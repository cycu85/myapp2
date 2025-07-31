<?php

namespace App\DataFixtures;

use App\Entity\Module;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\UserRole;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        // Create modules
        $adminModule = new Module();
        $adminModule->setName('admin')
            ->setDisplayName('Administracja')
            ->setDescription('Panel administracyjny systemu')
            ->setRequiredPermissions(['VIEW', 'CREATE', 'EDIT', 'DELETE', 'CONFIGURE', 'EMPLOYEES_VIEW', 'EMPLOYEES_EDIT_BASIC', 'EMPLOYEES_EDIT_FULL']);
        $manager->persist($adminModule);

        $equipmentModule = new Module();
        $equipmentModule->setName('equipment')
            ->setDisplayName('Sprzęt wysokościowy')
            ->setDescription('Zarządzanie sprzętem wysokościowym')
            ->setRequiredPermissions(['VIEW', 'CREATE', 'EDIT', 'DELETE', 'ASSIGN', 'REVIEW', 'EXPORT']);
        $manager->persist($equipmentModule);

        // Create roles
        $adminRole = new Role();
        $adminRole->setName('system_admin')
            ->setDescription('Administrator systemu')
            ->setModule($adminModule)
            ->setPermissions(['VIEW', 'CREATE', 'EDIT', 'DELETE', 'CONFIGURE', 'EMPLOYEES_EDIT_FULL'])
            ->setIsSystemRole(true);
        $manager->persist($adminRole);

        // Employee management roles
        $employeesViewRole = new Role();
        $employeesViewRole->setName('employees_viewer')
            ->setDescription('Przeglądanie listy pracowników')
            ->setModule($adminModule)
            ->setPermissions(['EMPLOYEES_VIEW'])
            ->setIsSystemRole(true);
        $manager->persist($employeesViewRole);

        $employeesEditorRole = new Role();
        $employeesEditorRole->setName('employees_editor')
            ->setDescription('Edycja podstawowych danych pracowników')
            ->setModule($adminModule)
            ->setPermissions(['EMPLOYEES_VIEW', 'EMPLOYEES_EDIT_BASIC'])
            ->setIsSystemRole(true);
        $manager->persist($employeesEditorRole);

        $employeesManagerRole = new Role();
        $employeesManagerRole->setName('employees_manager')
            ->setDescription('Pełne zarządzanie pracownikami')
            ->setModule($adminModule)
            ->setPermissions(['EMPLOYEES_VIEW', 'EMPLOYEES_EDIT_BASIC', 'EMPLOYEES_EDIT_FULL'])
            ->setIsSystemRole(true);
        $manager->persist($employeesManagerRole);

        $equipmentManagerRole = new Role();
        $equipmentManagerRole->setName('equipment_manager')
            ->setDescription('Menedżer sprzętu wysokościowego')
            ->setModule($equipmentModule)
            ->setPermissions(['VIEW', 'CREATE', 'EDIT', 'DELETE', 'ASSIGN', 'REVIEW', 'EXPORT'])
            ->setIsSystemRole(true);
        $manager->persist($equipmentManagerRole);

        $equipmentViewerRole = new Role();
        $equipmentViewerRole->setName('equipment_viewer')
            ->setDescription('Przeglądanie sprzętu wysokościowego')
            ->setModule($equipmentModule)
            ->setPermissions(['VIEW'])
            ->setIsSystemRole(true);
        $manager->persist($equipmentViewerRole);

        // Create admin user
        $adminUser = new User();
        $adminUser->setUsername('admin')
            ->setEmail('admin@assethub.local')
            ->setFirstName('Administrator')
            ->setLastName('Systemu')
            ->setPosition('Administrator')
            ->setDepartment('IT');

        $hashedPassword = $this->passwordHasher->hashPassword($adminUser, 'admin123');
        $adminUser->setPassword($hashedPassword);
        $manager->persist($adminUser);

        // Create test user
        $testUser = new User();
        $testUser->setUsername('user')
            ->setEmail('user@assethub.local')
            ->setFirstName('Jan')
            ->setLastName('Kowalski')
            ->setEmployeeNumber('EMP001')
            ->setPosition('Pracownik')
            ->setDepartment('Produkcja');

        $hashedPassword = $this->passwordHasher->hashPassword($testUser, 'user123');
        $testUser->setPassword($hashedPassword);
        $manager->persist($testUser);

        // Create HR user with employee management permissions
        $hrUser = new User();
        $hrUser->setUsername('hr')
            ->setEmail('hr@assethub.local')
            ->setFirstName('Anna')
            ->setLastName('Nowak')
            ->setEmployeeNumber('EMP002')
            ->setPosition('Specjalista ds. kadr')
            ->setDepartment('HR');

        $hashedPassword = $this->passwordHasher->hashPassword($hrUser, 'hr123');
        $hrUser->setPassword($hashedPassword);
        $manager->persist($hrUser);

        $manager->flush();

        // Assign roles to users
        $adminUserRole = new UserRole();
        $adminUserRole->setUser($adminUser)
            ->setRole($adminRole)
            ->setAssignedBy($adminUser);
        $manager->persist($adminUserRole);

        $equipmentAdminRole = new UserRole();
        $equipmentAdminRole->setUser($adminUser)
            ->setRole($equipmentManagerRole)
            ->setAssignedBy($adminUser);
        $manager->persist($equipmentAdminRole);

        $testUserRole = new UserRole();
        $testUserRole->setUser($testUser)
            ->setRole($equipmentViewerRole)
            ->setAssignedBy($adminUser);
        $manager->persist($testUserRole);

        // Assign HR role to HR user
        $hrUserRole = new UserRole();
        $hrUserRole->setUser($hrUser)
            ->setRole($employeesEditorRole)
            ->setAssignedBy($adminUser);
        $manager->persist($hrUserRole);

        $manager->flush();
    }
}
