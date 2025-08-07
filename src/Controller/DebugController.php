<?php

namespace App\Controller;

use App\Service\PermissionService;
use App\Repository\ModuleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/debug-tools')]
class DebugController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private ModuleRepository $moduleRepository
    ) {}

    #[Route('/permissions', name: 'debug_permissions')]
    public function permissions(): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return new Response('Not logged in');
        }

        $debug = [
            'user' => $user->getUsername(),
            'all_modules' => [],
            'user_modules' => [],
            'tools_access' => $this->permissionService->canAccessModule($user, 'tools'),
            'tools_permissions' => []
        ];

        // All modules
        $allModules = $this->moduleRepository->findAll();
        foreach ($allModules as $module) {
            $debug['all_modules'][] = [
                'name' => $module->getName(),
                'display_name' => $module->getDisplayName(),
                'enabled' => $module->isEnabled()
            ];
        }

        // User modules
        $userModules = $this->permissionService->getUserModules($user);
        foreach ($userModules as $userRole) {
            $module = $userRole->getRole()->getModule();
            $debug['user_modules'][] = [
                'role_name' => $userRole->getRole()->getName(),
                'module_name' => $module->getName(),
                'module_display' => $module->getDisplayName(),
                'module_enabled' => $module->isEnabled()
            ];
        }

        // Tools specific permissions
        $permissions = ['VIEW', 'CREATE', 'EDIT', 'DELETE', 'ASSIGN', 'REVIEW', 'EXPORT', 'INSPECT', 'MANAGE_SETS'];
        foreach ($permissions as $permission) {
            $debug['tools_permissions'][$permission] = $this->permissionService->hasPermission($user, 'tools', $permission);
        }

        return new Response('<pre>' . json_encode($debug, JSON_PRETTY_PRINT) . '</pre>');
    }
}