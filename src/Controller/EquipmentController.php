<?php

namespace App\Controller;

use App\Entity\Equipment;
use App\Entity\EquipmentLog;
use App\Form\EquipmentType;
use App\Repository\EquipmentRepository;
use App\Repository\EquipmentCategoryRepository;
use App\Service\PermissionService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/equipment')]
class EquipmentController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
    }

    #[Route('/', name: 'equipment_index')]
    public function index(EquipmentRepository $equipmentRepository, EquipmentCategoryRepository $categoryRepository, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'equipment')) {
            $this->logger->warning('Unauthorized equipment module access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do modułu sprzętu');
        }

        $equipment = $equipmentRepository->findAll();
        $categories = $categoryRepository->findActive();
        $statistics = $equipmentRepository->getStatisticsByStatus();

        $this->logger->info('Equipment index accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'equipment_count' => count($equipment),
            'categories_count' => count($categories)
        ]);

        return $this->render('equipment/index.html.twig', [
            'equipment' => $equipment,
            'categories' => $categories,
            'statistics' => $statistics,
            'can_create' => $this->permissionService->hasPermission($user, 'equipment', 'CREATE'),
            'can_edit' => $this->permissionService->hasPermission($user, 'equipment', 'EDIT'),
            'can_delete' => $this->permissionService->hasPermission($user, 'equipment', 'DELETE'),
        ]);
    }

    #[Route('/new', name: 'equipment_new')]
    public function new(Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'equipment', 'CREATE')) {
            $this->logger->warning('Unauthorized equipment create access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia sprzętu');
        }

        $equipment = new Equipment();
        $equipment->setCreatedBy($user);
        
        $form = $this->createForm(EquipmentType::class, $equipment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($equipment);
            
            // Create log entry
            $log = new EquipmentLog();
            $log->setEquipment($equipment);
            $log->setAction(EquipmentLog::ACTION_CREATED);
            $log->setDescription('Sprzęt został utworzony w systemie');
            $log->setCreatedBy($user);
            $this->entityManager->persist($log);
            
            $this->entityManager->flush();

            $this->logger->info('Equipment created successfully', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'equipment_id' => $equipment->getId(),
                'equipment_name' => $equipment->getName(),
                'category' => $equipment->getCategory()?->getName()
            ]);

            $this->addFlash('success', 'Sprzęt został dodany pomyślnie.');

            return $this->redirectToRoute('equipment_index');
        }

        $this->logger->info('Equipment new form accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp()
        ]);

        return $this->render('equipment/new.html.twig', [
            'equipment' => $equipment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'equipment_show', requirements: ['id' => '\d+'])]
    public function show(Equipment $equipment, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'equipment', 'VIEW')) {
            $this->logger->warning('Unauthorized equipment view access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'equipment_id' => $equipment->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania sprzętu');
        }

        $this->logger->info('Equipment viewed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'equipment_id' => $equipment->getId(),
            'equipment_name' => $equipment->getName()
        ]);

        return $this->render('equipment/show.html.twig', [
            'equipment' => $equipment,
        ]);
    }

    #[Route('/{id}/edit', name: 'equipment_edit', requirements: ['id' => '\d+'])]
    public function edit(Request $request, Equipment $equipment): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'equipment', 'EDIT')) {
            $this->logger->warning('Unauthorized equipment edit access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'equipment_id' => $equipment->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do edycji sprzętu');
        }

        $originalStatus = $equipment->getStatus();
        $originalAssignee = $equipment->getAssignedTo();
        
        $form = $this->createForm(EquipmentType::class, $equipment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $equipment->setUpdatedBy($user);
            
            // Create log entry for changes
            $changes = [];
            if ($originalStatus !== $equipment->getStatus()) {
                $changes[] = 'zmiana statusu z "' . $originalStatus . '" na "' . $equipment->getStatus() . '"';
                
                $log = new EquipmentLog();
                $log->setEquipment($equipment);
                $log->setAction(EquipmentLog::ACTION_STATUS_CHANGED);
                $log->setDescription('Status sprzętu został zmieniony');
                $log->setPreviousStatus($originalStatus);
                $log->setNewStatus($equipment->getStatus());
                $log->setCreatedBy($user);
                $this->entityManager->persist($log);
            }
            
            if ($originalAssignee !== $equipment->getAssignedTo()) {
                if ($equipment->getAssignedTo()) {
                    $changes[] = 'przypisanie do użytkownika';
                    $action = EquipmentLog::ACTION_ASSIGNED;
                } else {
                    $changes[] = 'usunięcie przypisania';
                    $action = EquipmentLog::ACTION_UNASSIGNED;
                }
                
                $log = new EquipmentLog();
                $log->setEquipment($equipment);
                $log->setAction($action);
                $log->setDescription('Zmiana przypisania sprzętu');
                $log->setPreviousAssignee($originalAssignee);
                $log->setNewAssignee($equipment->getAssignedTo());
                $log->setCreatedBy($user);
                $this->entityManager->persist($log);
            }
            
            if (empty($changes)) {
                $log = new EquipmentLog();
                $log->setEquipment($equipment);
                $log->setAction(EquipmentLog::ACTION_UPDATED);
                $log->setDescription('Dane sprzętu zostały zaktualizowane');
                $log->setCreatedBy($user);
                $this->entityManager->persist($log);
            }
            
            $this->entityManager->flush();

            $this->logger->info('Equipment updated successfully', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'equipment_id' => $equipment->getId(),
                'equipment_name' => $equipment->getName(),
                'changes' => $changes
            ]);

            $this->addFlash('success', 'Sprzęt został zaktualizowany pomyślnie.');

            return $this->redirectToRoute('equipment_show', ['id' => $equipment->getId()]);
        }

        $this->logger->info('Equipment edit form accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'equipment_id' => $equipment->getId()
        ]);

        return $this->render('equipment/edit.html.twig', [
            'equipment' => $equipment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'equipment_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, Equipment $equipment): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'equipment', 'DELETE')) {
            $this->logger->warning('Unauthorized equipment delete access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'equipment_id' => $equipment->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania sprzętu');
        }

        if ($this->isCsrfTokenValid('delete'.$equipment->getId(), $request->request->get('_token'))) {
            $equipmentName = $equipment->getName();
            $equipmentId = $equipment->getId();
            
            $this->entityManager->remove($equipment);
            $this->entityManager->flush();

            $this->logger->warning('Equipment deleted', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'equipment_id' => $equipmentId,
                'equipment_name' => $equipmentName
            ]);

            $this->addFlash('success', 'Sprzęt został usunięty pomyślnie.');
        } else {
            $this->logger->warning('Equipment delete attempt with invalid CSRF token', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'equipment_id' => $equipment->getId()
            ]);
        }

        return $this->redirectToRoute('equipment_index');
    }

    #[Route('/category/{id}', name: 'equipment_by_category', requirements: ['id' => '\d+'])]
    public function byCategory(int $id, EquipmentRepository $equipmentRepository, EquipmentCategoryRepository $categoryRepository, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'equipment')) {
            $this->logger->warning('Unauthorized equipment by category access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'category_id' => $id
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do modułu sprzętu');
        }

        $category = $categoryRepository->find($id);
        if (!$category) {
            $this->logger->warning('Equipment category not found', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'category_id' => $id
            ]);
            throw $this->createNotFoundException('Kategoria nie została znaleziona');
        }

        $equipment = $equipmentRepository->findByCategory($id);

        $this->logger->info('Equipment by category accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'category_id' => $id,
            'category_name' => $category->getName(),
            'equipment_count' => count($equipment)
        ]);

        return $this->render('equipment/by_category.html.twig', [
            'equipment' => $equipment,
            'category' => $category,
        ]);
    }

    #[Route('/my', name: 'equipment_my')]
    public function myEquipment(EquipmentRepository $equipmentRepository, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'equipment')) {
            $this->logger->warning('Unauthorized my equipment access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do modułu sprzętu');
        }

        $equipment = $equipmentRepository->findAssignedToUser($user);

        $this->logger->info('My equipment accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'assigned_equipment_count' => count($equipment)
        ]);

        return $this->render('equipment/my.html.twig', [
            'equipment' => $equipment,
        ]);
    }
}