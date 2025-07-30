<?php

namespace App\Controller\Admin;

use App\Entity\EquipmentCategory;
use App\Form\EquipmentCategoryType;
use App\Repository\EquipmentCategoryRepository;
use App\Service\PermissionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/equipment-categories')]
class EquipmentCategoryController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager
    ) {
    }

    #[Route('/', name: 'admin_equipment_categories_index')]
    public function index(EquipmentCategoryRepository $categoryRepository): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $categories = $categoryRepository->findAllOrdered();

        return $this->render('admin/equipment_categories/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/new', name: 'admin_equipment_categories_new')]
    public function new(Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia kategorii sprzętu');
        }

        $category = new EquipmentCategory();
        $form = $this->createForm(EquipmentCategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($category);
            $this->entityManager->flush();

            $this->addFlash('success', 'Kategoria sprzętu została utworzona pomyślnie.');

            return $this->redirectToRoute('admin_equipment_categories_index');
        }

        return $this->render('admin/equipment_categories/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_equipment_categories_show', requirements: ['id' => '\d+'])]
    public function show(EquipmentCategory $category): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania kategorii sprzętu');
        }

        return $this->render('admin/equipment_categories/show.html.twig', [
            'category' => $category,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_equipment_categories_edit', requirements: ['id' => '\d+'])]
    public function edit(Request $request, EquipmentCategory $category): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji kategorii sprzętu');
        }

        $form = $this->createForm(EquipmentCategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', 'Kategoria sprzętu została zaktualizowana pomyślnie.');

            return $this->redirectToRoute('admin_equipment_categories_index');
        }

        return $this->render('admin/equipment_categories/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_equipment_categories_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, EquipmentCategory $category): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'DELETE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania kategorii sprzętu');
        }

        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            // Check if category has equipment assigned
            if ($category->getEquipmentCount() > 0) {
                $this->addFlash('error', 'Nie można usunąć kategorii która ma przypisany sprzęt.');
                return $this->redirectToRoute('admin_equipment_categories_index');
            }

            $this->entityManager->remove($category);
            $this->entityManager->flush();

            $this->addFlash('success', 'Kategoria sprzętu została usunięta pomyślnie.');
        }

        return $this->redirectToRoute('admin_equipment_categories_index');
    }

    #[Route('/{id}/toggle-status', name: 'admin_equipment_categories_toggle_status', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function toggleStatus(Request $request, EquipmentCategory $category): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do zmiany statusu kategorii sprzętu');
        }

        if ($this->isCsrfTokenValid('toggle_status'.$category->getId(), $request->request->get('_token'))) {
            $category->setIsActive(!$category->isActive());
            $this->entityManager->flush();

            $status = $category->isActive() ? 'aktywowana' : 'dezaktywowana';
            $this->addFlash('success', "Kategoria została {$status}.");
        }

        return $this->redirectToRoute('admin_equipment_categories_index');
    }
}