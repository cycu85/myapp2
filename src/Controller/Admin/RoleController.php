<?php

namespace App\Controller\Admin;

use App\Entity\Role;
use App\Entity\Module;
use App\Form\RoleType;
use App\Repository\RoleRepository;
use App\Repository\ModuleRepository;
use App\Service\PermissionService;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/roles')]
class RoleController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager,
        private LoggerInterface $logger
    ) {
    }

    #[Route('/', name: 'admin_roles_index')]
    public function index(RoleRepository $roleRepository, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin roles access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $roles = $roleRepository->findAll();

        $this->logger->info('Admin roles index accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'roles_count' => count($roles)
        ]);

        return $this->render('admin/roles/index.html.twig', [
            'roles' => $roles,
        ]);
    }

    #[Route('/new', name: 'admin_roles_new')]
    public function new(Request $request, ModuleRepository $moduleRepository): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'CREATE')) {
            $this->logger->warning('Unauthorized role create access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia ról');
        }

        $role = new Role();
        $form = $this->createForm(RoleType::class, $role);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($role);
            $this->entityManager->flush();

            $this->logger->info('Role created successfully', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'role_id' => $role->getId(),
                'role_name' => $role->getName(),
                'module' => $role->getModule()?->getName(),
                'permissions' => $role->getPermissions()
            ]);

            $this->addFlash('success', 'Rola została utworzona pomyślnie.');

            return $this->redirectToRoute('admin_roles_index');
        }

        $this->logger->info('Role new form accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp()
        ]);

        return $this->render('admin/roles/new.html.twig', [
            'role' => $role,
            'form' => $form,
            'modules' => $moduleRepository->findAll(),
            'availablePermissions' => PermissionService::getAvailablePermissions(),
        ]);
    }

    #[Route('/{id}', name: 'admin_roles_show', requirements: ['id' => '\d+'])]
    public function show(Role $role, Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'VIEW')) {
            $this->logger->warning('Unauthorized role view access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'role_id' => $role->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania ról');
        }

        $this->logger->info('Role viewed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'role_id' => $role->getId(),
            'role_name' => $role->getName()
        ]);

        return $this->render('admin/roles/show.html.twig', [
            'role' => $role,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_roles_edit', requirements: ['id' => '\d+'])]
    public function edit(Request $request, Role $role, ModuleRepository $moduleRepository): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'EDIT')) {
            $this->logger->warning('Unauthorized role edit access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'role_id' => $role->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do edycji ról');
        }

        if ($role->isSystemRole()) {
            $this->logger->warning('Attempt to edit system role blocked', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'role_id' => $role->getId(),
                'role_name' => $role->getName()
            ]);
            $this->addFlash('warning', 'Nie można edytować roli systemowej.');
            return $this->redirectToRoute('admin_roles_show', ['id' => $role->getId()]);
        }

        $form = $this->createForm(RoleType::class, $role);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->logger->info('Role updated successfully', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'role_id' => $role->getId(),
                'role_name' => $role->getName(),
                'module' => $role->getModule()?->getName(),
                'permissions' => $role->getPermissions()
            ]);

            $this->addFlash('success', 'Rola została zaktualizowana pomyślnie.');

            return $this->redirectToRoute('admin_roles_index');
        }

        $this->logger->info('Role edit form accessed', [
            'user' => $user->getUsername(),
            'ip' => $request->getClientIp(),
            'role_id' => $role->getId()
        ]);

        return $this->render('admin/roles/edit.html.twig', [
            'role' => $role,
            'form' => $form,
            'modules' => $moduleRepository->findAll(),
            'availablePermissions' => PermissionService::getAvailablePermissions(),
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_roles_delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Request $request, Role $role): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'DELETE')) {
            $this->logger->warning('Unauthorized role delete access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'role_id' => $role->getId()
            ]);
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania ról');
        }

        if ($role->isSystemRole()) {
            $this->logger->warning('Attempt to delete system role blocked', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'role_id' => $role->getId(),
                'role_name' => $role->getName()
            ]);
            $this->addFlash('error', 'Nie można usunąć roli systemowej.');
            return $this->redirectToRoute('admin_roles_index');
        }

        if ($this->isCsrfTokenValid('delete'.$role->getId(), $request->request->get('_token'))) {
            // Check if role is assigned to any users
            if ($role->getUserRoles()->count() > 0) {
                $this->logger->warning('Role delete blocked - assigned to users', [
                    'user' => $user->getUsername(),
                    'ip' => $request->getClientIp(),
                    'role_id' => $role->getId(),
                    'role_name' => $role->getName(),
                    'assigned_users_count' => $role->getUserRoles()->count()
                ]);
                $this->addFlash('error', 'Nie można usunąć roli przypisanej do użytkowników.');
                return $this->redirectToRoute('admin_roles_index');
            }

            $roleName = $role->getName();
            $roleId = $role->getId();
            
            $this->entityManager->remove($role);
            $this->entityManager->flush();

            $this->logger->warning('Role deleted', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'role_id' => $roleId,
                'role_name' => $roleName
            ]);

            $this->addFlash('success', 'Rola została usunięta pomyślnie.');
        } else {
            $this->logger->warning('Role delete attempt with invalid CSRF token', [
                'user' => $user->getUsername(),
                'ip' => $request->getClientIp(),
                'role_id' => $role->getId()
            ]);
        }

        return $this->redirectToRoute('admin_roles_index');
    }
}