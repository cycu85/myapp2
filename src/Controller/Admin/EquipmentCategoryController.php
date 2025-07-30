<?php

namespace App\Controller\Admin;

use App\Entity\EquipmentCategory;
use App\Form\EquipmentCategoryType;
use App\Repository\EquipmentCategoryRepository;
use App\Service\PermissionService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/equipment-categories')]
class EquipmentCategoryController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
    }

    #[Route('/', name: 'admin_equipment_categories_index')]
    public function index(EquipmentCategoryRepository $categoryRepository, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin equipment categories access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $categories = $categoryRepository->findAllOrdered();

        $this->logger->info('Admin equipment categories index accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'categories_count' => count($categories)
        ]);

        return $this->render('admin/equipment_categories/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/new', name: 'admin_equipment_categories_new')]
    public function new(Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'CREATE')) {
            $this->logger->warning('Unauthorized equipment category create access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia kategorii sprzętu');
        }

        $category = new EquipmentCategory();
        $form = $this->createForm(EquipmentCategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($category);
            $this->entityManager->flush();

            $this->logger->info('Equipment category created successfully', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'category_id' => $category->getId(),
                'category_name' => $category->getName()
            ]);

            $this->addFlash('success', 'Kategoria sprzętu została utworzona pomyślnie.');

            return $this->redirectToRoute('admin_equipment_categories_index');
        }

        $this->logger->info('Equipment category new form accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp()
        ]);

        return $this->render('admin/equipment_categories/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_equipment_categories_show', requirements: ['id' => '\d+'])]
    public function show(EquipmentCategory $category, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'VIEW')) {
            $this->logger->warning('Unauthorized equipment category view access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'category_id' => $category->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania kategorii sprzętu');
        }

        $this->logger->info('Equipment category viewed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'category_id' => $category->getId(),
            'category_name' => $category->getName()
        ]);

        return $this->render('admin/equipment_categories/show.html.twig', [
            'category' => $category,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_equipment_categories_edit', requirements: ['id' => '\d+'])]
    public function edit(Request $request, EquipmentCategory $category): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'EDIT')) {
            $this->logger->warning('Unauthorized equipment category edit access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'category_id' => $category->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do edycji kategorii sprzętu');
        }

        $form = $this->createForm(EquipmentCategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->logger->info('Equipment category updated successfully', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'category_id' => $category->getId(),
                'category_name' => $category->getName()
            ]);

            $this->addFlash('success', 'Kategoria sprzętu została zaktualizowana pomyślnie.');

            return $this->redirectToRoute('admin_equipment_categories_index');
        }

        $this->logger->info('Equipment category edit form accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'category_id' => $category->getId()
        ]);

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
            $this->logger->warning('Unauthorized equipment category delete access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'category_id' => $category->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania kategorii sprzętu');
        }

        if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
            // Check if category has equipment assigned
            if ($category->getEquipmentCount() > 0) {
                $this->logger->warning('Equipment category delete blocked - has assigned equipment', [
                    'user' => $user->getUsername(),
                    'ip' => $request->getClientIp(),
                    'category_id' => $category->getId(),
                    'category_name' => $category->getName(),
                    'equipment_count' => $category->getEquipmentCount()
                ]);
                $this->addFlash('error', 'Nie można usunąć kategorii która ma przypisany sprzęt.');
                return $this->redirectToRoute('admin_equipment_categories_index');
            }

            $categoryName = $category->getName();
            $categoryId = $category->getId();
            
            $this->entityManager->remove($category);
            $this->entityManager->flush();

            $this->logger->warning('Equipment category deleted', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'category_id' => $categoryId,
                'category_name' => $categoryName
            ]);

            $this->addFlash('success', 'Kategoria sprzętu została usunięta pomyślnie.');
        } else {
            $this->logger->warning('Equipment category delete attempt with invalid CSRF token', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'category_id' => $category->getId()
            ]);
        }

        return $this->redirectToRoute('admin_equipment_categories_index');
    }

    #[Route('/{id}/toggle-status', name: 'admin_equipment_categories_toggle_status', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function toggleStatus(Request $request, EquipmentCategory $category): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'EDIT')) {
            $this->logger->warning('Unauthorized equipment category toggle status access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'category_id' => $category->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do zmiany statusu kategorii sprzętu');
        }

        if ($this->isCsrfTokenValid('toggle_status'.$category->getId(), $request->request->get('_token'))) {
            $oldStatus = $category->isActive();
            $category->setIsActive(!$category->isActive());
            $this->entityManager->flush();

            $status = $category->isActive() ? 'aktywowana' : 'dezaktywowana';
            
            $this->logger->info('Equipment category status toggled', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'category_id' => $category->getId(),
                'category_name' => $category->getName(),
                'old_status' => $oldStatus,
                'new_status' => $category->isActive()
            ]);
            
            $this->addFlash('success', "Kategoria została {$status}.");
        } else {
            $this->logger->warning('Equipment category toggle status attempt with invalid CSRF token', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'category_id' => $category->getId()
            ]);
        }

        return $this->redirectToRoute('admin_equipment_categories_index');
    }
}