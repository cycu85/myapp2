<?php

namespace App\Controller;

use App\Entity\ToolSet;
use App\Entity\ToolSetItem;
use App\Form\ToolSetType;
use App\Form\ToolSetItemType;
use App\Repository\ToolSetRepository;
use App\Repository\ToolRepository;
use App\Service\PermissionService;
use App\Service\ToolSetService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/tools/sets')]
#[IsGranted('ROLE_USER')]
class ToolSetController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager,
        private ToolSetService $toolSetService
    ) {
    }

    #[Route('/', name: 'app_tool_set_index', methods: ['GET'])]
    public function index(Request $request, ToolSetRepository $setRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania zestawów narzędzi.');
        }

        // Get filter parameters
        $statusFilter = $request->query->get('status', '');
        $assignedToFilter = $request->query->get('assigned_to', '');
        $search = $request->query->get('search', '');

        $criteria = [];
        if ($statusFilter) {
            $criteria['status'] = $statusFilter;
        }
        if ($assignedToFilter) {
            $criteria['assignedTo'] = $assignedToFilter;
        }
        if ($search) {
            $criteria['search'] = $search;
        }

        $toolSets = empty($criteria) ? 
            $setRepository->findBy([], ['createdAt' => 'DESC']) :
            $setRepository->findByCriteria($criteria);

        // Get statistics
        $statistics = $setRepository->getStatistics();

        return $this->render('tool_set/index.html.twig', [
            'tool_sets' => $toolSets,
            'statistics' => $statistics,
            'current_status' => $statusFilter,
            'current_assigned_to' => $assignedToFilter,
            'current_search' => $search,
            'can_create' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE'),
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
            'can_assign' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'ASSIGN'),
        ]);
    }

    #[Route('/new', name: 'app_tool_set_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia zestawów narzędzi.');
        }

        $toolSet = new ToolSet();
        $form = $this->createForm(ToolSetType::class, $toolSet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $toolSet->setCreatedBy($this->getUser());
            
            $this->entityManager->persist($toolSet);
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Zestaw narzędzi "%s" został utworzony pomyślnie.', $toolSet->getName()));

            return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
        }

        return $this->render('tool_set/new.html.twig', [
            'tool_set' => $toolSet,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tool_set_show', methods: ['GET'])]
    public function show(ToolSet $toolSet): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania zestawów narzędzi.');
        }

        return $this->render('tool_set/show.html.twig', [
            'tool_set' => $toolSet,
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
            'can_assign' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'ASSIGN'),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tool_set_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ToolSet $toolSet): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji zestawów narzędzi.');
        }

        $form = $this->createForm(ToolSetType::class, $toolSet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Zestaw narzędzi "%s" został zaktualizowany pomyślnie.', $toolSet->getName()));

            return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
        }

        return $this->render('tool_set/edit.html.twig', [
            'tool_set' => $toolSet,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tool_set_delete', methods: ['POST'])]
    public function delete(Request $request, ToolSet $toolSet): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania zestawów narzędzi.');
        }

        if ($this->isCsrfTokenValid('delete'.$toolSet->getId(), $request->request->get('_token'))) {
            $toolSetName = $toolSet->getName();
            
            // Check if set is currently assigned
            if ($toolSet->getStatus() === ToolSet::STATUS_CHECKED_OUT) {
                $this->addFlash('error', sprintf('Nie można usunąć zestawu "%s" - jest obecnie wydany.', $toolSetName));
            } else {
                $this->entityManager->remove($toolSet);
                $this->entityManager->flush();

                $this->addFlash('success', sprintf('Zestaw narzędzi "%s" został usunięty pomyślnie.', $toolSetName));
            }
        } else {
            $this->addFlash('error', 'Nieprawidłowy token CSRF.');
        }

        return $this->redirectToRoute('app_tool_set_index');
    }

    #[Route('/{id}/add-item', name: 'app_tool_set_add_item', methods: ['GET', 'POST'])]
    public function addItem(Request $request, ToolSet $toolSet): Response
    {

        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji zestawów narzędzi.');
        }

        $item = new ToolSetItem();
        $item->setToolSet($toolSet);

        $form = $this->createForm(ToolSetItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($item);
            $this->entityManager->flush();

            // Update set completion status
            $toolSet->updateStatusBasedOnCondition();
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Narzędzie "%s" zostało dodane do zestawu.', 
                $item->getTool()?->getName() ?? 'nieznane'));

            // Handle AJAX request
            if ($request->isXmlHttpRequest()) {
                return new Response('', 200);
            }

            return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
        }

        // Handle AJAX request for form rendering/validation errors
        if ($request->isXmlHttpRequest()) {
            return $this->render('tool_set/_add_item_form.html.twig', [
                'tool_set' => $toolSet,
                'item' => $item,
                'form' => $form->createView(),
            ], new Response('', $form->isSubmitted() && !$form->isValid() ? 400 : 200));
        }

        return $this->render('tool_set/add_item.html.twig', [
            'tool_set' => $toolSet,
            'item' => $item,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{setId}/item/{itemId}/edit', name: 'app_tool_set_edit_item', methods: ['GET', 'POST'])]
    public function editItem(Request $request, int $setId, int $itemId): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji zestawów narzędzi.');
        }

        $item = $this->entityManager->getRepository(ToolSetItem::class)->find($itemId);
        if (!$item || $item->getToolSet()->getId() !== $setId) {
            throw $this->createNotFoundException('Pozycja zestawu nie została znaleziona.');
        }

        $toolSet = $item->getToolSet();

        $form = $this->createForm(ToolSetItemType::class, $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            // Update set completion status
            $toolSet->updateStatusBasedOnCondition();
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Pozycja "%s" została zaktualizowana.', 
                $item->getTool()?->getName() ?? 'nieznane'));

            return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
        }

        return $this->render('tool_set/edit_item.html.twig', [
            'tool_set' => $toolSet,
            'item' => $item,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{setId}/item/{itemId}/remove', name: 'app_tool_set_remove_item', methods: ['POST'])]
    public function removeItem(Request $request, int $setId, int $itemId): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji zestawów narzędzi.');
        }

        $item = $this->entityManager->getRepository(ToolSetItem::class)->find($itemId);
        if (!$item || $item->getToolSet()->getId() !== $setId) {
            throw $this->createNotFoundException('Pozycja zestawu nie została znaleziona.');
        }

        $toolSet = $item->getToolSet();

        if ($this->isCsrfTokenValid('remove_item'.$item->getId(), $request->request->get('_token'))) {
            $toolName = $item->getTool()?->getName() ?? 'nieznane';
            
            $this->entityManager->remove($item);
            $this->entityManager->flush();

            // Update set completion status
            $toolSet->updateStatusBasedOnCondition();
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Narzędzie "%s" zostało usunięte z zestawu.', $toolName));
        } else {
            $this->addFlash('error', 'Nieprawidłowy token CSRF.');
        }

        return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
    }

    #[Route('/{id}/checkout', name: 'app_tool_set_checkout', methods: ['POST'])]
    public function checkout(Request $request, ToolSet $toolSet): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'ASSIGN')) {
            throw $this->createAccessDeniedException('Brak uprawnień do wydawania zestawów narzędzi.');
        }

        if (!$this->isCsrfTokenValid('checkout'.$toolSet->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Nieprawidłowy token CSRF.');
            return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
        }

        $assignedToId = $request->request->get('assigned_to');
        $assignedTo = $assignedToId ? $this->entityManager->getRepository('App\Entity\User')->find($assignedToId) : null;

        if (!$assignedTo) {
            $this->addFlash('error', 'Należy wybrać osobę, której zostanie wydany zestaw.');
            return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
        }

        try {
            $this->toolSetService->checkOutSet($toolSet, $assignedTo, $this->getUser());
            $this->addFlash('success', sprintf('Zestaw "%s" został wydany dla %s.', 
                $toolSet->getName(), $assignedTo->getFullName()));
        } catch (\Exception $e) {
            $this->addFlash('error', 'Błąd podczas wydawania zestawu: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
    }

    #[Route('/{id}/checkin', name: 'app_tool_set_checkin', methods: ['POST'])]
    public function checkin(Request $request, ToolSet $toolSet): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'ASSIGN')) {
            throw $this->createAccessDeniedException('Brak uprawnień do odbioru zestawów narzędzi.');
        }

        if (!$this->isCsrfTokenValid('checkin'.$toolSet->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Nieprawidłowy token CSRF.');
            return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
        }

        try {
            $this->toolSetService->checkInSet($toolSet, $this->getUser());
            $this->addFlash('success', sprintf('Zestaw "%s" został odebrany pomyślnie.', $toolSet->getName()));
        } catch (\Exception $e) {
            $this->addFlash('error', 'Błąd podczas odbioru zestawu: ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
    }

    #[Route('/{id}/clone', name: 'app_tool_set_clone', methods: ['POST'])]
    public function clone(Request $request, ToolSet $toolSet): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia zestawów narzędzi.');
        }

        if (!$this->isCsrfTokenValid('clone'.$toolSet->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Nieprawidłowy token CSRF.');
            return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
        }

        try {
            $clonedSet = $this->toolSetService->cloneSet($toolSet, $this->getUser());
            
            $this->addFlash('success', sprintf('Zestaw "%s" został skopiowany jako "%s".', 
                $toolSet->getName(), $clonedSet->getName()));
                
            return $this->redirectToRoute('app_tool_set_show', ['id' => $clonedSet->getId()]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Błąd podczas kopiowania zestawu: ' . $e->getMessage());
            return $this->redirectToRoute('app_tool_set_show', ['id' => $toolSet->getId()]);
        }
    }
}