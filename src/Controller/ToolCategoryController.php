<?php

namespace App\Controller;

use App\Entity\ToolCategory;
use App\Form\ToolCategoryType;
use App\Repository\ToolCategoryRepository;
use App\Service\PermissionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/tools/categories')]
#[IsGranted('ROLE_USER')]
class ToolCategoryController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager
    ) {
    }

    #[Route('/', name: 'app_tool_category_index', methods: ['GET'])]
    public function index(ToolCategoryRepository $categoryRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania kategorii narzędzi.');
        }

        $categories = $categoryRepository->findWithToolsCount();

        return $this->render('tool_category/index.html.twig', [
            'categories' => $categories,
            'can_create' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE'),
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
        ]);
    }

    #[Route('/new', name: 'app_tool_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ToolCategoryRepository $categoryRepository): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia kategorii narzędzi.');
        }

        $category = new ToolCategory();
        
        // Set default sort order
        $nextSortOrder = $categoryRepository->getNextSortOrder();
        $category->setSortOrder($nextSortOrder);
        
        $form = $this->createForm(ToolCategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($category);
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Kategoria "%s" została dodana pomyślnie.', $category->getName()));

            return $this->redirectToRoute('app_tool_category_index');
        }

        return $this->render('tool_category/new.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tool_category_show', methods: ['GET'])]
    public function show(ToolCategory $category): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania kategorii narzędzi.');
        }

        if (!$category->isActive()) {
            throw $this->createNotFoundException('Kategoria nie została znaleziona.');
        }

        return $this->render('tool_category/show.html.twig', [
            'category' => $category,
            'can_edit' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE'),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tool_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ToolCategory $category): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji kategorii narzędzi.');
        }

        if (!$category->isActive()) {
            throw $this->createNotFoundException('Kategoria nie została znaleziona.');
        }

        $form = $this->createForm(ToolCategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', sprintf('Kategoria "%s" została zaktualizowana pomyślnie.', $category->getName()));

            return $this->redirectToRoute('app_tool_category_show', ['id' => $category->getId()]);
        }

        return $this->render('tool_category/edit.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_tool_category_delete', methods: ['POST'])]
    public function delete(Request $request, ToolCategory $category): Response
    {
        if (!$this->permissionService->hasPermission($this->getUser(), 'tools', 'DELETE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania kategorii narzędzi.');
        }

        if (!$category->isActive()) {
            throw $this->createNotFoundException('Kategoria nie została znaleziona.');
        }

        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            // Check if category has any tools
            if ($category->getActiveToolsCount() > 0) {
                $this->addFlash('error', sprintf('Nie można usunąć kategorii "%s" - zawiera %d narzędzi. Najpierw przenieś narzędzia do innej kategorii.', 
                    $category->getName(), $category->getActiveToolsCount()));
            } else {
                // Soft delete
                $category->setIsActive(false);
                $this->entityManager->flush();

                $this->addFlash('success', sprintf('Kategoria "%s" została usunięta pomyślnie.', $category->getName()));
            }
        } else {
            $this->addFlash('error', 'Nieprawidłowy token CSRF.');
        }

        return $this->redirectToRoute('app_tool_category_index');
    }
}