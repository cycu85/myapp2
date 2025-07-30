<?php

namespace App\Controller;

use App\Service\PermissionService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private LoggerInterface $logger
    ) {
    }

    #[Route('/', name: 'dashboard')]
    public function index(): Response
    {
        $user = $this->getUser();
        $availableModules = $this->permissionService->getUserModules($user);

        $this->logger->info('Dashboard accessed', [
            'user' => $user?->getUsername() ?? 'anonymous',
            'modules_count' => count($availableModules),
            'ip' => $this->getClientIp()
        ]);

        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
            'modules' => $availableModules,
        ]);
    }

    private function getClientIp(): ?string
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        return $request?->getClientIp();
    }
}