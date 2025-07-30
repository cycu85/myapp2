<?php

namespace App\Controller;

use App\Entity\Module;
use App\Entity\Role;
use App\Entity\User;
use App\Entity\UserRole;
use App\Entity\EquipmentCategory;
use App\Service\SampleDataService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

#[Route('/install')]
class InstallerController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserPasswordHasherInterface $passwordHasher,
        private SampleDataService $sampleDataService
    ) {}

    #[Route('/', name: 'installer_welcome')]
    public function welcome(): Response
    {
        // Check if already installed
        if ($this->isInstalled()) {
            return $this->redirectToRoute('home');
        }

        return $this->render('installer/welcome.html.twig');
    }

    #[Route('/requirements', name: 'installer_requirements')]
    public function requirements(): Response
    {
        if ($this->isInstalled()) {
            return $this->redirectToRoute('home');
        }

        $requirements = $this->checkRequirements();

        return $this->render('installer/requirements.html.twig', [
            'requirements' => $requirements,
            'can_proceed' => !in_array(false, array_column($requirements, 'status'))
        ]);
    }

    #[Route('/database', name: 'installer_database')]
    public function database(Request $request): Response
    {
        if ($this->isInstalled()) {
            return $this->redirectToRoute('home');
        }

        if ($request->isMethod('POST')) {
            try {
                // Create database schema
                $this->createDatabaseSchema();
                
                // Insert basic data
                $this->insertBasicData();
                
                // Load sample data if requested
                if ($request->request->get('load_sample_data') === '1') {
                    $this->sampleDataService->loadSampleData();
                    $this->addFlash('success', 'Dane przykładowe zostały załadowane pomyślnie.');
                }
                
                return $this->redirectToRoute('installer_admin');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Błąd podczas tworzenia bazy danych: ' . $e->getMessage());
            }
        }

        return $this->render('installer/database.html.twig');
    }

    #[Route('/admin', name: 'installer_admin')]
    public function admin(Request $request): Response
    {
        if ($this->isInstalled()) {
            return $this->redirectToRoute('home');
        }

        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            
            try {
                // Create admin user
                $this->createAdminUser($data);
                
                // Mark as installed
                $this->markAsInstalled();
                
                return $this->redirectToRoute('installer_finish');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Błąd podczas tworzenia administratora: ' . $e->getMessage());
            }
        }

        return $this->render('installer/admin.html.twig');
    }

    #[Route('/finish', name: 'installer_finish')]
    public function finish(): Response
    {
        if (!$this->isInstalled()) {
            return $this->redirectToRoute('installer_welcome');
        }

        return $this->render('installer/finish.html.twig');
    }

    private function isInstalled(): bool
    {
        $installFile = $this->getParameter('kernel.project_dir') . '/.installed';
        return file_exists($installFile);
    }

    private function markAsInstalled(): void
    {
        $installFile = $this->getParameter('kernel.project_dir') . '/.installed';
        $filesystem = new Filesystem();
        $filesystem->touch($installFile);
        file_put_contents($installFile, date('Y-m-d H:i:s'));
    }

    private function checkRequirements(): array
    {
        return [
            [
                'name' => 'PHP Version >= 8.2',
                'status' => version_compare(PHP_VERSION, '8.2.0', '>='),
                'current' => PHP_VERSION,
                'required' => '8.2.0'
            ],
            [
                'name' => 'MySQL Extension',
                'status' => extension_loaded('mysqli') || extension_loaded('pdo_mysql'),
                'current' => (extension_loaded('mysqli') || extension_loaded('pdo_mysql')) ? 'Zainstalowane' : 'Brak',
                'required' => 'Wymagane'
            ],
            [
                'name' => 'PDO Extension',
                'status' => extension_loaded('pdo'),
                'current' => extension_loaded('pdo') ? 'Zainstalowane' : 'Brak',
                'required' => 'Wymagane'
            ],
            [
                'name' => 'Intl Extension',
                'status' => extension_loaded('intl'),
                'current' => extension_loaded('intl') ? 'Zainstalowane' : 'Brak',
                'required' => 'Wymagane'
            ],
            [
                'name' => 'Writable var/ directory',
                'status' => is_writable($this->getParameter('kernel.project_dir') . '/var'),
                'current' => is_writable($this->getParameter('kernel.project_dir') . '/var') ? 'Zapisywalny' : 'Brak uprawnień',
                'required' => 'Zapisywalny'
            ]
        ];
    }

    private function createDatabaseSchema(): void
    {
        try {
            // Run database migrations
            $projectDir = $this->getParameter('kernel.project_dir');
            
            $process = new Process(['php', 'bin/console', 'doctrine:migrations:migrate', '--no-interaction'], $projectDir);
            $process->run();
            
            if (!$process->isSuccessful()) {
                throw new \Exception('Błąd podczas wykonywania migracji: ' . $process->getErrorOutput() . ' Output: ' . $process->getOutput());
            }
            
            // Verify tables were created
            $schemaManager = $this->entityManager->getConnection()->createSchemaManager();
            $tables = $schemaManager->listTableNames();
            
            // Debug: log what tables were actually created
            error_log('Created tables: ' . implode(', ', $tables));
            
            $requiredTables = ['modules', 'users', 'roles', 'user_roles', 'equipment_categories', 'equipment', 'equipment_log', 'equipment_attachment'];
            $missingTables = array_diff($requiredTables, $tables);
            
            if (!empty($missingTables)) {
                throw new \Exception('Brakujące tabele w bazie danych: ' . implode(', ', $missingTables) . '. Utworzone tabele: ' . implode(', ', $tables));
            }
        } catch (\Exception $e) {
            throw new \Exception('Błąd podczas tworzenia schematu bazy danych: ' . $e->getMessage());
        }
    }

    private function insertBasicData(): void
    {
        // Create modules
        $modules = [
            ['name' => 'admin', 'display_name' => 'Panel Administracyjny', 'description' => 'Zarządzanie systemem', 'is_enabled' => true],
            ['name' => 'equipment', 'display_name' => 'Sprzęt', 'description' => 'Zarządzanie sprzętem i narzędziami', 'is_enabled' => true],
            ['name' => 'safety', 'display_name' => 'Sprzęt Ochronny', 'description' => 'Zarządzanie środkami ochrony osobistej', 'is_enabled' => false],
            ['name' => 'it', 'display_name' => 'Sprzęt IT', 'description' => 'Zarządzanie sprzętem informatycznym', 'is_enabled' => false],
            ['name' => 'vehicles', 'display_name' => 'Flota Pojazdów', 'description' => 'Zarządzanie flotą pojazdów', 'is_enabled' => false],
        ];

        foreach ($modules as $moduleData) {
            $existingModule = $this->entityManager->getRepository(Module::class)->findOneBy(['name' => $moduleData['name']]);
            if (!$existingModule) {
                $module = new Module();
                $module->setName($moduleData['name']);
                $module->setDisplayName($moduleData['display_name']);
                $module->setDescription($moduleData['description']);
                $module->setIsEnabled($moduleData['is_enabled']);
                $this->entityManager->persist($module);
            }
        }

        $this->entityManager->flush();

        // Create basic roles
        $adminModule = $this->entityManager->getRepository(Module::class)->findOneBy(['name' => 'admin']);
        $equipmentModule = $this->entityManager->getRepository(Module::class)->findOneBy(['name' => 'equipment']);

        $roles = [
            [
                'name' => 'ADMIN',
                'description' => 'Pełny dostęp do panelu administracyjnego',
                'module' => $adminModule,
                'permissions' => ['VIEW', 'CREATE', 'EDIT', 'DELETE'],
                'is_system' => true
            ],
            [
                'name' => 'EQUIPMENT_MANAGER',
                'description' => 'Menedżer sprzętu - pełny dostęp',
                'module' => $equipmentModule,
                'permissions' => ['VIEW', 'CREATE', 'EDIT', 'DELETE'],
                'is_system' => true
            ],
            [
                'name' => 'EQUIPMENT_USER',
                'description' => 'Użytkownik sprzętu - tylko podgląd',
                'module' => $equipmentModule,
                'permissions' => ['VIEW'],
                'is_system' => true
            ]
        ];

        foreach ($roles as $roleData) {
            $existingRole = $this->entityManager->getRepository(Role::class)->findOneBy([
                'name' => $roleData['name'],
                'module' => $roleData['module']
            ]);
            if (!$existingRole) {
                $role = new Role();
                $role->setName($roleData['name']);
                $role->setDescription($roleData['description']);
                $role->setModule($roleData['module']);
                $role->setPermissions($roleData['permissions']);
                $role->setIsSystemRole($roleData['is_system']);
                $this->entityManager->persist($role);
            }
        }

        // Create basic equipment categories
        $categories = [
            ['name' => 'Narzędzia ręczne', 'description' => 'Młotki, śrubokręty, klucze', 'color' => '#007bff', 'icon' => 'ri-hammer-line'],
            ['name' => 'Narzędzia elektryczne', 'description' => 'Wiertarki, szlifierki, piły', 'color' => '#28a745', 'icon' => 'ri-flashlight-line'],
            ['name' => 'Sprzęt pomiarowy', 'description' => 'Mierniki, poziomice, dalmierze', 'color' => '#ffc107', 'icon' => 'ri-ruler-line'],
            ['name' => 'Sprzęt ochronny', 'description' => 'Kaski, rękawice, okulary', 'color' => '#dc3545', 'icon' => 'ri-shield-line'],
        ];

        foreach ($categories as $i => $categoryData) {
            $existingCategory = $this->entityManager->getRepository(EquipmentCategory::class)->findOneBy(['name' => $categoryData['name']]);
            if (!$existingCategory) {
                $category = new EquipmentCategory();
                $category->setName($categoryData['name']);
                $category->setDescription($categoryData['description']);
                $category->setColor($categoryData['color']);
                $category->setIcon($categoryData['icon']);
                $category->setSortOrder($i + 1);
                $category->setIsActive(true);
                $category->setCreatedAt(new \DateTime());
                $category->setUpdatedAt(new \DateTime());
                $this->entityManager->persist($category);
            }
        }

        $this->entityManager->flush();
    }

    private function createAdminUser(array $data): void
    {
        // Check if admin user already exists
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['username' => $data['username']]);
        if ($existingUser) {
            throw new \Exception('Użytkownik o tej nazwie już istnieje');
        }

        // Create admin user
        $user = new User();
        $user->setUsername($data['username']);
        $user->setEmail($data['email']);
        $user->setFirstName($data['firstName']);
        $user->setLastName($data['lastName']);
        $user->setIsActive(true);

        // Hash password
        $hashedPassword = $this->passwordHasher->hashPassword($user, $data['password']);
        $user->setPassword($hashedPassword);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        // Assign admin role
        $adminRole = $this->entityManager->getRepository(Role::class)->findOneBy(['name' => 'ADMIN']);
        if ($adminRole) {
            $userRole = new UserRole();
            $userRole->setUser($user);
            $userRole->setRole($adminRole);
            $userRole->setAssignedBy($user);
            $userRole->setIsActive(true);
            $this->entityManager->persist($userRole);
        }

        $this->entityManager->flush();
    }
}