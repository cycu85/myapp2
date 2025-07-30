<?php

namespace App\Controller\Admin;

use App\Entity\Role;
use App\Entity\Module;
use App\Form\RoleType;
use App\Repository\RoleRepository;
use App\Repository\ModuleRepository;
use App\Service\PermissionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/roles')]
class RoleController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private EntityManagerInterface $entityManager
    ) {
    }

    #[Route('/', name: 'admin_roles_index')]
    public function index(RoleRepository $roleRepository): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $roles = $roleRepository->findAll();

        return $this->render('admin/roles/index.html.twig', [
            'roles' => $roles,
        ]);
    }

    #[Route('/new', name: 'admin_roles_new')]
    public function new(Request $request, ModuleRepository $moduleRepository): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'CREATE')) {
            throw $this->createAccessDeniedException('Brak uprawnień do tworzenia ról');
        }

        $role = new Role();
        $form = $this->createForm(RoleType::class, $role);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($role);
            $this->entityManager->flush();

            $this->addFlash('success', 'Rola została utworzona pomyślnie.');

            return $this->redirectToRoute('admin_roles_index');
        }

        return $this->render('admin/roles/new.html.twig', [
            'role' => $role,
            'form' => $form,
            'modules' => $moduleRepository->findAll(),
            'availablePermissions' => PermissionService::getAvailablePermissions(),
        ]);
    }

    #[Route('/{id}', name: 'admin_roles_show', requirements: ['id' => '\d+'])]
    public function show(Role $role): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'VIEW')) {
            throw $this->createAccessDeniedException('Brak uprawnień do przeglądania ról');
        }

        return $this->render('admin/roles/show.html.twig', [
            'role' => $role,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_roles_edit', requirements: ['id' => '\d+'])]
    public function edit(Request $request, Role $role, ModuleRepository $moduleRepository): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->hasPermission($user, 'admin', 'EDIT')) {
            throw $this->createAccessDeniedException('Brak uprawnień do edycji ról');
        }

        if ($role->isSystemRole()) {
            $this->addFlash('warning', 'Nie można edytować roli systemowej.');
            return $this->redirectToRoute('admin_roles_show', ['id' => $role->getId()]);
        }

        $form = $this->createForm(RoleType::class, $role);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', 'Rola została zaktualizowana pomyślnie.');

            return $this->redirectToRoute('admin_roles_index');
        }

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
            throw $this->createAccessDeniedException('Brak uprawnień do usuwania ról');
        }

        if ($role->isSystemRole()) {
            $this->addFlash('error', 'Nie można usunąć roli systemowej.');
            return $this->redirectToRoute('admin_roles_index');
        }

        if ($this->isCsrfTokenValid('delete'.$role->getId(), $request->request->get('_token'))) {
            // Check if role is assigned to any users
            if ($role->getUserRoles()->count() > 0) {
                $this->addFlash('error', 'Nie można usunąć roli przypisanej do użytkowników.');
                return $this->redirectToRoute('admin_roles_index');
            }

            $this->entityManager->remove($role);
            $this->entityManager->flush();

            $this->addFlash('success', 'Rola została usunięta pomyślnie.');
        }

        return $this->redirectToRoute('admin_roles_index');
    }
}