<?php

namespace App\Controller;

use App\Entity\Tool;
use App\Entity\ToolCategory;
use App\Entity\ToolType;
use App\Form\ToolType as ToolFormType;
use App\Repository\ToolRepository;
use App\Repository\ToolCategoryRepository;
use App\Repository\ToolTypeRepository;
use App\Service\PermissionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/tools')]
#[IsGranted('ROLE_USER')]
class ToolController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager
    ) {
    }

    #[Route('/', name: 'app_tool_index', methods: ['GET'])]
    public function index(
        Request $request,
        ToolRepository $toolRepository,
        ToolCategoryRepository $categoryRepository,
        ToolTypeRepository $typeRepository
    ): Response {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania narzędzi.');
        }

        // Get filter parameters
        $search = $request->query->get('search', '');
        $categoryFilter = $request->query->get('category', '');
        $typeFilter = $request->query->get('type', '');
        $statusFilter = $request->query->get('status', '');
        $locationFilter = $request->query->get('location', '');

        // Build criteria for filtering
        $criteria = [];
        if ($search) {
            $criteria['search'] = $search;
        }
        if ($categoryFilter) {
            $criteria['category'] = $categoryRepository->find($categoryFilter);
        }
        if ($typeFilter) {
            $criteria['type'] = $typeRepository->find($typeFilter);
        }
        if ($statusFilter) {
            $criteria['status'] = $statusFilter;
        }
        if ($locationFilter) {
            $criteria['location'] = $locationFilter;
        }

        // Get filtered tools or all tools
        $tools = empty($criteria) ? 
            $toolRepository->findBy(['isActive' => true], ['name' => 'ASC']) :
            $toolRepository->findByCriteria($criteria);

        // Get filter options
        $categories = $categoryRepository->findActive();
        $types = $typeRepository->findActive();
        $statuses = Tool::STATUSES;

        // Get unique locations for filter
        $locations = $toolRepository->createQueryBuilder('t')
            ->select('DISTINCT t.location')
            ->where('t.location IS NOT NULL')
            ->andWhere('t.isActive = true')
            ->orderBy('t.location', 'ASC')
            ->getQuery()
            ->getSingleColumnResult();

        // Get statistics
        $statistics = $toolRepository->getStatistics();

        return $this->render('tool/index.html.twig', [
            'tools' => $tools,
            'categories' => $categories,
            'types' => $types,
            'statuses' => $statuses,
            'locations' => $locations,
            'statistics' => $statistics,
            'current_search' => $search,
            'current_category' => $categoryFilter,
            'current_type' => $typeFilter,
            'current_status' => $statusFilter,
            'current_location' => $locationFilter,
            'can_create' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE'),
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
        ]);
    }

    #[Route('/new', name: 'app_tool_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia narzędzi.');
        }

        $tool = new Tool();
        $form = $this->createForm(ToolFormType::class, $tool);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tool->setCreatedBy($this->getUser());
            
            $this->entityManager->persist($tool);
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Narzędzie "%s" zostało dodane pomyślnie.', $tool->getName()));

            return $this->redirectToRoute('app_tool_index');
        }

        return $this->render('tool/new.html.twig', [
            'tool' => $tool,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tool_show', methods: ['GET'])]
    public function show(Tool $tool): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania narzędzi.');
        }

        if (!$tool->isActive()) {
            throw $this->createNotFoundException('Narzędzie nie zostało znalezione.');
        }

        return $this->render('tool/show.html.twig', [
            'tool' => $tool,
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tool_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tool $tool): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji narzędzi.');
        }

        if (!$tool->isActive()) {
            throw $this->createNotFoundException('Narzędzie nie zostało znalezione.');
        }

        $form = $this->createForm(ToolFormType::class, $tool);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tool->setUpdatedBy($this->getUser());
            
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Narzędzie "%s" zostało zaktualizowane pomyślnie.', $tool->getName()));

            return $this->redirectToRoute('app_tool_show', ['id' => $tool->getId()]);
        }

        return $this->render('tool/edit.html.twig', [
            'tool' => $tool,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tool_delete', methods: ['POST'])]
    public function delete(Request $request, Tool $tool): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania narzędzi.');
        }

        if (!$tool->isActive()) {
            throw $this->createNotFoundException('Narzędzie nie zostało znalezione.');
        }

        if ($this->isCsrfTokenValid('delete'.$tool->getId(), $request->request->get('_token'))) {
            // Soft delete - mark as inactive instead of removing
            $tool->setIsActive(false);
            $tool->setUpdatedBy($this->getUser());
            
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Narzędzie "%s" zostało usunięte pomyślnie.', $tool->getName()));
        } else {
            $this->addFlash('error', 'Nieprawidłowy token CSRF.');
        }

        return $this->redirectToRoute('app_tool_index');
    }

    #[Route('/statistics/dashboard', name: 'app_tool_statistics', methods: ['GET'])]
    public function statistics(ToolRepository $toolRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania statystyk narzędzi.');
        }

        $statistics = $toolRepository->getStatistics();
        $categoryStats = $toolRepository->countByCategory();
        $statusStats = $toolRepository->countByStatus();
        $lowQuantityTools = $toolRepository->findWithLowQuantity();
        $upcomingInspections = $toolRepository->findWithUpcomingInspections(30);
        $overdueInspections = $toolRepository->findWithOverdueInspections();

        return $this->render('tool/statistics.html.twig', [
            'statistics' => $statistics,
            'category_stats' => $categoryStats,
            'status_stats' => $statusStats,
            'low_quantity_tools' => $lowQuantityTools,
            'upcoming_inspections' => $upcomingInspections,
            'overdue_inspections' => $overdueInspections,
        ]);
    }

    #[Route('/export/csv', name: 'app_tool_export_csv', methods: ['GET'])]
    public function exportCsv(
        Request $request,
        ToolRepository $toolRepository,
        ToolCategoryRepository $categoryRepository,
        ToolTypeRepository $typeRepository
    ): Response {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do eksportu narzędzi.');
        }

        // Use same filtering as index
        $search = $request->query->get('search', '');
        $categoryFilter = $request->query->get('category', '');
        $typeFilter = $request->query->get('type', '');
        $statusFilter = $request->query->get('status', '');
        $locationFilter = $request->query->get('location', '');

        $criteria = [];
        if ($search) $criteria['search'] = $search;
        if ($categoryFilter) $criteria['category'] = $categoryRepository->find($categoryFilter);
        if ($typeFilter) $criteria['type'] = $typeRepository->find($typeFilter);
        if ($statusFilter) $criteria['status'] = $statusFilter;
        if ($locationFilter) $criteria['location'] = $locationFilter;

        $tools = empty($criteria) ? 
            $toolRepository->findBy(['isActive' => true], ['name' => 'ASC']) :
            $toolRepository->findByCriteria($criteria);

        $response = new Response();
        $response->headers->set('Content-Type', 'text/csv; charset=UTF-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="narzedzia_' . date('Y-m-d') . '.csv"');

        $output = fopen('php://output', 'w');
        
        // Add BOM for UTF-8
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));
        
        // CSV headers
        fputcsv($output, [
            'ID',
            'Nazwa',
            'Kategoria',
            'Typ',
            'Status',
            'Numer seryjny',
            'Numer inwentarzowy',
            'Producent',
            'Model',
            'Lokalizacja',
            'Aktualna ilość',
            'Całkowita ilość',
            'Minimalna ilość',
            'Jednostka',
            'Data zakupu',
            'Cena zakupu',
            'Następny przegląd',
            'Data utworzenia'
        ], ';');

        // CSV data
        foreach ($tools as $tool) {
            fputcsv($output, [
                $tool->getId(),
                $tool->getName(),
                $tool->getCategory()?->getName(),
                $tool->getType()?->getName(),
                $tool->getStatusLabel(),
                $tool->getSerialNumber(),
                $tool->getInventoryNumber(),
                $tool->getManufacturer(),
                $tool->getModel(),
                $tool->getLocation(),
                $tool->getCurrentQuantity(),
                $tool->getTotalQuantity(),
                $tool->getMinQuantity(),
                $tool->getUnit(),
                $tool->getPurchaseDate()?->format('Y-m-d'),
                $tool->getPurchasePrice(),
                $tool->getNextInspectionDate()?->format('Y-m-d'),
                $tool->getCreatedAt()?->format('Y-m-d H:i:s')
            ], ';');
        }

        fclose($output);

        return $response;
    }

    #[Route('/bulk-action', name: 'app_tool_bulk_action', methods: ['POST'])]
    public function bulkAction(Request $request, ToolRepository $toolRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji narzędzi.');
        }

        $action = $request->request->get('bulk_action');
        $selectedIds = $request->request->get('selected_tools', []);

        if (empty($selectedIds)) {
            $this->addFlash('warning', 'Nie wybrano żadnych narzędzi.');
            return $this->redirectToRoute('app_tool_index');
        }

        $tools = $toolRepository->findBy(['id' => $selectedIds, 'isActive' => true]);
        $count = 0;

        foreach ($tools as $tool) {
            switch ($action) {
                case 'activate':
                    $tool->setStatus(Tool::STATUS_ACTIVE);
                    $count++;
                    break;
                case 'deactivate':
                    $tool->setStatus(Tool::STATUS_INACTIVE);
                    $count++;
                    break;
                case 'maintenance':
                    $tool->setStatus(Tool::STATUS_MAINTENANCE);
                    $count++;
                    break;
                case 'delete':
                    if ($this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE')) {
                        $tool->setIsActive(false);
                        $count++;
                    }
                    break;
            }
            
            if ($count > 0) {
                $tool->setUpdatedBy($this->getUser());
            }
        }

        if ($count > 0) {
            $this->entityManager->flush();
            $this->addFlash('success', sprintf('Zaktualizowano %d narzędzi.', $count));
        } else {
            $this->addFlash('warning', 'Nie zaktualizowano żadnych narzędzi.');
        }

        return $this->redirectToRoute('app_tool_index');
    }
}