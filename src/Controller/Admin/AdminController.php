<?php

namespace App\Controller\Admin;

use App\Entity\Module;
use App\Form\GeneralSettingsType;
use App\Repository\ModuleRepository;
use App\Service\PermissionService;
use App\Service\SettingService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private ModuleRepository $moduleRepository,
        private SettingService $settingService,
        private LoggerInterface $logger
    ) {
    }

    #[Route('/', name: 'admin_dashboard')]
    public function dashboard(): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin dashboard access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $this->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $this->logger->info('Admin dashboard accessed', [
            'user' => $user->getUsername(),
            'ip' => $this->getClientIp()
        ]);

        return $this->render('admin/dashboard.html.twig');
    }

    #[Route('/modules', name: 'admin_modules')]
    public function modules(): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin modules access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $this->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $modules = $this->moduleRepository->findAll();
        
        $this->logger->info('Admin modules page accessed', [
            'user' => $user->getUsername(),
            'modules_count' => count($modules),
            'ip' => $this->getClientIp()
        ]);

        return $this->render('admin/modules/index.html.twig', [
            'modules' => $modules,
        ]);
    }

    #[Route('/dictionaries', name: 'admin_dictionaries')]
    public function dictionaries(): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin dictionaries access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $this->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $this->logger->info('Admin dictionaries page accessed', [
            'user' => $user->getUsername(),
            'ip' => $this->getClientIp()
        ]);

        return $this->render('admin/dictionaries/index.html.twig');
    }

    #[Route('/settings', name: 'admin_settings')]
    public function settings(): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin settings access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $this->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        $this->logger->info('Admin settings page accessed', [
            'user' => $user->getUsername(),
            'ip' => $this->getClientIp()
        ]);

        return $this->render('admin/settings/index.html.twig');
    }

    #[Route('/settings/general', name: 'admin_settings_general')]
    public function generalSettings(Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin general settings access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $this->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        // Pobierz obecne ustawienia
        $currentSettings = $this->settingService->getGeneralSettings();
        
        $form = $this->createForm(GeneralSettingsType::class, $currentSettings);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $logoFile = $form->get('company_logo')->getData();

            try {
                $this->settingService->saveGeneralSettings($data, $logoFile);
                
                $this->addFlash('success', 'Ustawienia zostały zapisane pomyślnie!');
                
                $this->logger->info('General settings updated successfully', [
                    'user' => $user->getUsername(),
                    'ip' => $this->getClientIp(),
                    'settings' => $data
                ]);

                return $this->redirectToRoute('admin_settings_general');
                
            } catch (\Exception $e) {
                $this->addFlash('error', 'Wystąpił błąd podczas zapisywania ustawień: ' . $e->getMessage());
                
                $this->logger->error('Failed to save general settings', [
                    'user' => $user->getUsername(),
                    'error' => $e->getMessage(),
                    'ip' => $this->getClientIp()
                ]);
            }
        }

        $this->logger->info('Admin general settings page accessed', [
            'user' => $user->getUsername(),
            'ip' => $this->getClientIp()
        ]);

        return $this->render('admin/settings/general.html.twig', [
            'form' => $form->createView(),
            'current_settings' => $currentSettings,
        ]);
    }

    private function getClientIp(): ?string
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        return $request?->getClientIp();
    }
}