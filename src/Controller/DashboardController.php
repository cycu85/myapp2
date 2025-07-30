<?php

namespace App\Controller;

use App\Service\PermissionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    public function __construct(private PermissionService $permissionService)
    {
    }

    #[Route('/', name: 'dashboard')]
    public function index(): Response
    {
        $user = $this->getUser();
        $availableModules = $this->permissionService->getUserModules($user);

        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
            'modules' => $availableModules,
        ]);
    }
}