<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\ModuleRepository;
use App\Repository\UserRoleRepository;
use Psr\Log\LoggerInterface;

class PermissionService
{
    public function __construct(
        private UserRoleRepository $userRoleRepository,
        private ModuleRepository $moduleRepository,
        private LoggerInterface $logger
    ) {
    }

    public function hasPermission(User $user, string $module, string $permission): bool
    {
        $userRoles = $this->userRoleRepository->findActiveByUser($user->getId());
        
        $this->logger->info('Checking permission', [
            'user_id' => $user->getId(),
            'username' => $user->getUsername(),
            'module' => $module,
            'permission' => $permission,
            'user_roles_count' => count($userRoles)
        ]);
        
        // Check if user is system admin - automatic full access
        foreach ($userRoles as $userRole) {
            $role = $userRole->getRole();
            if ($role->getName() === 'system_admin' && $role->getModule()->getName() === 'admin') {
                $this->logger->info('System admin access granted', [
                    'user' => $user->getUsername(),
                    'module' => $module,
                    'permission' => $permission
                ]);
                return true;
            }
        }
        
        foreach ($userRoles as $userRole) {
            $role = $userRole->getRole();
            $roleName = $role->getName();
            $roleModule = $role->getModule()->getName();
            $rolePermissions = $role->getPermissions();
            
            $this->logger->info('Checking role', [
                'role_name' => $roleName,
                'role_module' => $roleModule,
                'role_permissions' => $rolePermissions,
                'target_module' => $module,
                'target_permission' => $permission
            ]);
            
            if ($roleModule === $module) {
                if ($role->hasPermission($permission)) {
                    $this->logger->info('Permission granted', [
                        'user' => $user->getUsername(),
                        'role' => $roleName,
                        'module' => $module,
                        'permission' => $permission
                    ]);
                    return true;
                }
            }
        }
        
        $this->logger->warning('Permission denied', [
            'user' => $user->getUsername(),
            'module' => $module,
            'permission' => $permission
        ]);
        
        return false;
    }

    public function getUserModules(User $user): array
    {
        $userRoles = $this->userRoleRepository->findActiveByUser($user->getId());
        $moduleUserRoles = [];
        $seenModules = [];
        
        // Check if user is system admin - show all enabled modules
        $isSystemAdmin = false;
        foreach ($userRoles as $userRole) {
            $role = $userRole->getRole();
            if ($role->getName() === 'system_admin' && $role->getModule()->getName() === 'admin') {
                $isSystemAdmin = true;
                break;
            }
        }
        
        if ($isSystemAdmin) {
            // For system admin, include all enabled modules
            $allModules = $this->moduleRepository->findEnabledModules();
            foreach ($allModules as $module) {
                if (!in_array($module->getId(), $seenModules, true)) {
                    // Create a virtual user role for display purposes
                    $virtualUserRole = null;
                    // Find actual user role for this module or use admin role
                    foreach ($userRoles as $userRole) {
                        if ($userRole->getRole()->getModule()->getId() === $module->getId()) {
                            $virtualUserRole = $userRole;
                            break;
                        }
                    }
                    // If no specific role found, use the admin role for display
                    if (!$virtualUserRole) {
                        foreach ($userRoles as $userRole) {
                            if ($userRole->getRole()->getName() === 'system_admin') {
                                $virtualUserRole = $userRole;
                                break;
                            }
                        }
                    }
                    if ($virtualUserRole) {
                        $moduleUserRoles[] = $virtualUserRole;
                        $seenModules[] = $module->getId();
                    }
                }
            }
        } else {
            // Regular user - only show modules they have explicit access to
            foreach ($userRoles as $userRole) {
                $module = $userRole->getRole()->getModule();
                if ($module->isEnabled() && !in_array($module->getId(), $seenModules, true)) {
                    $moduleUserRoles[] = $userRole;
                    $seenModules[] = $module->getId();
                }
            }
        }
        
        return $moduleUserRoles;
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
        
        // Check if user is system admin - automatic access to all modules
        $userRoles = $this->userRoleRepository->findActiveByUser($user->getId());
        foreach ($userRoles as $userRole) {
            $role = $userRole->getRole();
            if ($role->getName() === 'system_admin' && $role->getModule()->getName() === 'admin') {
                return true;
            }
        }
        
        $userModules = $this->getUserModules($user);
        
        foreach ($userModules as $userRole) {
            if ($userRole->getRole()->getModule()->getName() === $moduleName) {
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
            'CONFIGURE' => 'Konfiguracja',
            'INSPECT' => 'Przeprowadzanie przeglądów',
            'MANAGE_SETS' => 'Zarządzanie zestawami',
            'EMPLOYEES_VIEW' => 'Przeglądanie pracowników',
            'EMPLOYEES_EDIT_BASIC' => 'Edycja podstawowych danych pracowników',
            'EMPLOYEES_EDIT_FULL' => 'Pełna edycja pracowników'
        ];
    }
}