<?php

namespace App\Controller\Admin;

use App\Service\PermissionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    public function __construct(private PermissionService $permissionService)
    {
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
}