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
            ->setRequiredPermissions(['VIEW', 'CREATE', 'EDIT', 'DELETE', 'CONFIGURE']);
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
            ->setPermissions(['VIEW', 'CREATE', 'EDIT', 'DELETE', 'CONFIGURE'])
            ->setIsSystemRole(true);
        $manager->persist($adminRole);

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

        $manager->flush();
    }
}
