<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\ModuleRepository;
use App\Repository\UserRoleRepository;

class PermissionService
{
    public function __construct(
        private UserRoleRepository $userRoleRepository,
        private ModuleRepository $moduleRepository
    ) {
    }

    public function hasPermission(User $user, string $module, string $permission): bool
    {
        $userRoles = $this->userRoleRepository->findActiveByUser($user->getId());
        
        foreach ($userRoles as $userRole) {
            $role = $userRole->getRole();
            if ($role->getModule()->getName() === $module) {
                if ($role->hasPermission($permission)) {
                    return true;
                }
            }
        }
        
        return false;
    }

    public function getUserModules(User $user): array
    {
        $userRoles = $this->userRoleRepository->findActiveByUser($user->getId());
        $modules = [];
        
        foreach ($userRoles as $userRole) {
            $module = $userRole->getRole()->getModule();
            if ($module->isEnabled() && !in_array($module, $modules, true)) {
                $modules[] = $module;
            }
        }
        
        return $modules;
    }

    public function getModulePermissions(User $user, string $moduleName): array
    {
        $userRoles = $this->userRoleRepository->findActiveByUser($user->getId());
        $permissions = [];
        
        foreach ($userRoles as $userRole) {
            $role = $userRole->getRole();
            if ($role->getModule()->getName() === $moduleName) {
                $permissions = array_unique(array_merge($permissions, $role->getPermissions()));
            }
        }
        
        return $permissions;
    }

    public function canAccessModule(User $user, string $moduleName): bool
    {
        $module = $this->moduleRepository->findByName($moduleName);
        
        if (!$module || !$module->isEnabled()) {
            return false;
        }
        
        $userModules = $this->getUserModules($user);
        
        foreach ($userModules as $userModule) {
            if ($userModule->getName() === $moduleName) {
                return true;
            }
        }
        
        return false;
    }

    public static function getAvailablePermissions(): array
    {
        return [
            'VIEW' => 'Podgląd',
            'CREATE' => 'Tworzenie',
            'EDIT' => 'Edycja',
            'DELETE' => 'Usuwanie',
            'ASSIGN' => 'Przypisywanie',
            'REVIEW' => 'Przeglądy',
            'EXPORT' => 'Eksport',
            'CONFIGURE' => 'Konfiguracja'
        ];
    }
}