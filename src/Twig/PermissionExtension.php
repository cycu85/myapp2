<?php

namespace App\Twig;

use App\Service\PermissionService;
use Symfony\Bundle\SecurityBundle\Security;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class PermissionExtension extends AbstractExtension
{
    public function __construct(
        private PermissionService $permissionService,
        private Security $security
    ) {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('is_granted_module', [$this, 'isGrantedModule']),
            new TwigFunction('has_permission', [$this, 'hasPermission']),
            new TwigFunction('get_user_modules', [$this, 'getUserModules']),
        ];
    }

    public function isGrantedModule(string $moduleName): bool
    {
        $user = $this->security->getUser();
        if (!$user) {
            return false;
        }

        return $this->permissionService->canAccessModule($user, $moduleName);
    }

    public function hasPermission(string $moduleName, string $permission): bool
    {
        $user = $this->security->getUser();
        if (!$user) {
            return false;
        }

        return $this->permissionService->hasPermission($user, $moduleName, $permission);
    }

    public function getUserModules(): array
    {
        $user = $this->security->getUser();
        if (!$user) {
            return [];
        }

        return $this->permissionService->getUserModules($user);
    }
}