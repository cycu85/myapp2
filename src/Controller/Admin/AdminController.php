<?php

namespace App\Controller\Admin;

use App\Entity\Module;
use App\Repository\ModuleRepository;
use App\Service\PermissionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private ModuleRepository $moduleRepository
    ) {
    }

    #[Route('/', name: 'admin_dashboard')]
    public function dashboard(): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        return $this->render('admin/dashboard.html.twig');
    }

    #[Route('/modules', name: 'admin_modules')]
    public function modules(): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $modules = $this->moduleRepository->findAll();

        return $this->render('admin/modules/index.html.twig', [
            'modules' => $modules,
        ]);
    }

    #[Route('/dictionaries', name: 'admin_dictionaries')]
    public function dictionaries(): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        return $this->render('admin/dictionaries/index.html.twig');
    }

    #[Route('/settings', name: 'admin_settings')]
    public function settings(): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        return $this->render('admin/settings/index.html.twig');
    }
}