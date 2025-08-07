<?php

namespace App\Controller;

use App\Entity\ToolInspection;
use App\Entity\Tool;
use App\Form\ToolInspectionType;
use App\Repository\ToolInspectionRepository;
use App\Repository\ToolRepository;
use App\Service\PermissionService;
use App\Service\InspectionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/tools/inspections')]
#[IsGranted('ROLE_USER')]
class ToolInspectionController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager,
        private InspectionService $inspectionService
    ) {
    }

    #[Route('/', name: 'app_tool_inspection_index', methods: ['GET'])]
    public function index(Request $request, ToolInspectionRepository $inspectionRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania przeglądów narzędzi.');
        }

        // Get filter parameters
        $statusFilter = $request->query->get('status', '');
        $dateFromFilter = $request->query->get('date_from', '');
        $dateToFilter = $request->query->get('date_to', '');

        $criteria = [];
        if ($statusFilter) {
            $criteria['result'] = $statusFilter;
        }
        if ($dateFromFilter) {
            $criteria['dateFrom'] = new \DateTime($dateFromFilter);
        }
        if ($dateToFilter) {
            $criteria['dateTo'] = new \DateTime($dateToFilter);
        }

        $inspections = empty($criteria) ? 
            $inspectionRepository->findBy([], ['inspectionDate' => 'DESC']) :
            $inspectionRepository->findByCriteria($criteria);

        // Get upcoming and overdue inspections
        $upcomingInspections = $inspectionRepository->findUpcoming(30);
        $overdueInspections = $inspectionRepository->findOverdue();

        return $this->render('tool_inspection/index.html.twig', [
            'inspections' => $inspections,
            'upcoming_inspections' => $upcomingInspections,
            'overdue_inspections' => $overdueInspections,
            'current_status' => $statusFilter,
            'current_date_from' => $dateFromFilter,
            'current_date_to' => $dateToFilter,
            'can_create' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE'),
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
        ]);
    }

    #[Route('/new', name: 'app_tool_inspection_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia przeglądów narzędzi.');
        }

        $inspection = new ToolInspection();
        $form = $this->createForm(ToolInspectionType::class, $inspection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $inspection->setInspectedBy($this->getUser());
            
            $this->entityManager->persist($inspection);
            $this->entityManager->flush();

            // Update tool's next inspection date if passed
            if ($inspection->isPassed() && $inspection->getTool()) {
                $nextDate = $inspection->calculateNextInspectionDate();
                if ($nextDate) {
                    $inspection->getTool()->setNextInspectionDate($nextDate);
                    $this->entityManager->flush();
                }
            }

            $this->addFlash('success', sprintf('Przegląd narzędzia "%s" został dodany pomyślnie.', 
                $inspection->getTool()?->getName() ?? 'nieznane'));

            return $this->redirectToRoute('app_tool_inspection_index');
        }

        return $this->render('tool_inspection/new.html.twig', [
            'inspection' => $inspection,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/tool/{toolId}/new', name: 'app_tool_inspection_new_for_tool', methods: ['GET', 'POST'])]
    public function newForTool(int $toolId, Request $request, ToolRepository $toolRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia przeglądów narzędzi.');
        }

        $tool = $toolRepository->find($toolId);
        if (!$tool || !$tool->isActive()) {
            throw $this->createNotFoundException('Narzędzie nie zostało znalezione.');
        }

        $inspection = new ToolInspection();
        $inspection->setTool($tool);
        $inspection->setInspectionDate(new \DateTime());

        $form = $this->createForm(ToolInspectionType::class, $inspection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $inspection->setInspectedBy($this->getUser());
            
            $this->entityManager->persist($inspection);
            $this->entityManager->flush();

            // Update tool's next inspection date if passed
            if ($inspection->isPassed()) {
                $nextDate = $inspection->calculateNextInspectionDate();
                if ($nextDate) {
                    $tool->setNextInspectionDate($nextDate);
                    $this->entityManager->flush();
                }
            }

            $this->addFlash('success', sprintf('Przegląd narzędzia "%s" został dodany pomyślnie.', $tool->getName()));

            return $this->redirectToRoute('app_tool_show', ['id' => $tool->getId()]);
        }

        return $this->render('tool_inspection/new.html.twig', [
            'inspection' => $inspection,
            'form' => $form->createView(),
            'tool' => $tool,
        ]);
    }

    #[Route('/{id}', name: 'app_tool_inspection_show', methods: ['GET'])]
    public function show(ToolInspection $inspection): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania przeglądów narzędzi.');
        }

        return $this->render('tool_inspection/show.html.twig', [
            'inspection' => $inspection,
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tool_inspection_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ToolInspection $inspection): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji przeglądów narzędzi.');
        }

        $form = $this->createForm(ToolInspectionType::class, $inspection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            // Update tool's next inspection date if status changed to passed
            if ($inspection->isPassed() && $inspection->getTool()) {
                $nextDate = $inspection->calculateNextInspectionDate();
                if ($nextDate) {
                    $inspection->getTool()->setNextInspectionDate($nextDate);
                    $this->entityManager->flush();
                }
            }

            $this->addFlash('success', sprintf('Przegląd narzędzia "%s" został zaktualizowany pomyślnie.', 
                $inspection->getTool()?->getName() ?? 'nieznane'));

            return $this->redirectToRoute('app_tool_inspection_show', ['id' => $inspection->getId()]);
        }

        return $this->render('tool_inspection/edit.html.twig', [
            'inspection' => $inspection,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tool_inspection_delete', methods: ['POST'])]
    public function delete(Request $request, ToolInspection $inspection): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania przeglądów narzędzi.');
        }

        if ($this->isCsrfTokenValid('delete'.$inspection->getId(), $request->request->get('_token'))) {
            $toolName = $inspection->getTool()?->getName() ?? 'nieznane';
            
            $this->entityManager->remove($inspection);
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Przegląd narzędzia "%s" został usunięty pomyślnie.', $toolName));
        } else {
            $this->addFlash('error', 'Nieprawidłowy token CSRF.');
        }

        return $this->redirectToRoute('app_tool_inspection_index');
    }

    #[Route('/calendar', name: 'app_tool_inspection_calendar', methods: ['GET'])]
    public function calendar(ToolInspectionRepository $inspectionRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania kalendarza przeglądów.');
        }

        // Get inspections for current month and next 3 months
        $now = new \DateTime();
        $endDate = (clone $now)->add(new \DateInterval('P3M'));

        $inspections = $inspectionRepository->findInDateRange($now, $endDate);
        $overdueInspections = $inspectionRepository->findOverdue();

        return $this->render('tool_inspection/calendar.html.twig', [
            'inspections' => $inspections,
            'overdue_inspections' => $overdueInspections,
            'start_date' => $now,
            'end_date' => $endDate,
        ]);
    }

    #[Route('/bulk-schedule', name: 'app_tool_inspection_bulk_schedule', methods: ['GET', 'POST'])]
    public function bulkSchedule(Request $request, ToolRepository $toolRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do planowania przeglądów.');
        }

        if ($request->isMethod('POST')) {
            $toolIds = $request->request->get('selected_tools', []);
            $inspectionDate = $request->request->get('inspection_date');

            if (empty($toolIds) || !$inspectionDate) {
                $this->addFlash('error', 'Nie wybrano narzędzi lub nie podano daty przeglądu.');
                return $this->redirectToRoute('app_tool_inspection_bulk_schedule');
            }

            $date = new \DateTime($inspectionDate);
            $tools = $toolRepository->findBy(['id' => $toolIds, 'isActive' => true]);
            $count = 0;

            foreach ($tools as $tool) {
                try {
                    $inspection = $this->inspectionService->createInspection($tool, $date, $this->getUser());
                    $count++;
                } catch (\Exception $e) {
                    // Log error but continue with other tools
                    continue;
                }
            }

            if ($count > 0) {
                $this->addFlash('success', sprintf('Zaplanowano przeglądy dla %d narzędzi.', $count));
            } else {
                $this->addFlash('warning', 'Nie udało się zaplanować żadnego przeglądu.');
            }

            return $this->redirectToRoute('app_tool_inspection_index');
        }

        // Get tools that need inspection or don't have next inspection date
        $toolsNeedingInspection = $toolRepository->findNeedingInspection();

        return $this->render('tool_inspection/bulk_schedule.html.twig', [
            'tools' => $toolsNeedingInspection,
        ]);
    }
}