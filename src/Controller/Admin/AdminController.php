<?php

namespace App\Controller\Admin;

use App\Entity\Module;
use App\Form\EmailSettingsType;
use App\Form\GeneralSettingsType;
use App\Repository\ModuleRepository;
use App\Service\PermissionService;
use App\Service\SettingService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    public function __construct(
        private PermissionService $permissionService,
        private ModuleRepository $moduleRepository,
        private SettingService $settingService,
        private MailerInterface $mailer,
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
            
            // Sprawdź czy użytkownik wpisał kolor w polu tekstowym
            $colorFromText = $form->get('primary_color_text')->getData();
            if ($colorFromText && preg_match('/^#[0-9A-Fa-f]{6}$/', $colorFromText)) {
                $data['primary_color'] = $colorFromText;
            }

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

    #[Route('/settings/email', name: 'admin_settings_email')]
    public function emailSettings(Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin email settings access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $this->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        // Pobierz obecne ustawienia email
        $currentSettings = $this->getEmailSettings();
        
        $form = $this->createForm(EmailSettingsType::class, $currentSettings);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();
            
            // Sprawdź który przycisk został kliknięty
            $isTestEmail = $form->get('test')->isClicked();
            
            if ($isTestEmail) {
                // Wysyłanie emaila testowego
                $testEmail = $form->get('test_email')->getData();
                
                if (!$testEmail) {
                    $this->addFlash('error', 'Podaj adres email do wysłania wiadomości testowej');
                } else {
                    try {
                        $this->sendTestEmail($testEmail, $data);
                        $this->addFlash('success', 'Wiadomość testowa została wysłana pomyślnie na adres: ' . $testEmail);
                        
                        $this->logger->info('Test email sent successfully', [
                            'user' => $user->getUsername(),
                            'test_email' => $testEmail,
                            'ip' => $this->getClientIp()
                        ]);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Błąd podczas wysyłania wiadomości testowej: ' . $e->getMessage());
                        
                        $this->logger->error('Failed to send test email', [
                            'user' => $user->getUsername(),
                            'test_email' => $testEmail,
                            'error' => $e->getMessage(),
                            'ip' => $this->getClientIp()
                        ]);
                    }
                }
            } else if ($form->isValid()) {
                // Zapisywanie ustawień
                try {
                    $this->saveEmailSettings($data);
                    
                    $this->addFlash('success', 'Ustawienia email zostały zapisane pomyślnie!');
                    
                    $this->logger->info('Email settings updated successfully', [
                        'user' => $user->getUsername(),
                        'ip' => $this->getClientIp()
                    ]);

                    return $this->redirectToRoute('admin_settings_email');
                    
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Wystąpił błąd podczas zapisywania ustawień: ' . $e->getMessage());
                    
                    $this->logger->error('Failed to save email settings', [
                        'user' => $user->getUsername(),
                        'error' => $e->getMessage(),
                        'ip' => $this->getClientIp()
                    ]);
                }
            }
        }

        $this->logger->info('Admin email settings page accessed', [
            'user' => $user->getUsername(),
            'ip' => $this->getClientIp()
        ]);

        return $this->render('admin/settings/email.html.twig', [
            'form' => $form->createView(),
            'current_settings' => $currentSettings,
        ]);
    }

    private function getEmailSettings(): array
    {
        return [
            'smtp_host' => $this->settingService->get('smtp_host', 'localhost'),
            'smtp_port' => (int) $this->settingService->get('smtp_port', '587'),
            'smtp_encryption' => $this->settingService->get('smtp_encryption', 'tls'),
            'smtp_username' => $this->settingService->get('smtp_username', ''),
            'smtp_password' => '', // Nigdy nie pobieraj hasła do formularza
            'from_email' => $this->settingService->get('from_email', 'noreply@localhost'),
            'from_name' => $this->settingService->get('from_name', 'AssetHub System'),
        ];
    }

    private function saveEmailSettings(array $data): void
    {
        $this->settingService->set('smtp_host', $data['smtp_host'], 'email', 'text', 'Serwer SMTP');
        $this->settingService->set('smtp_port', (string) $data['smtp_port'], 'email', 'number', 'Port SMTP');
        $this->settingService->set('smtp_encryption', $data['smtp_encryption'], 'email', 'text', 'Typ szyfrowania SMTP');
        $this->settingService->set('smtp_username', $data['smtp_username'], 'email', 'text', 'Nazwa użytkownika SMTP');
        $this->settingService->set('from_email', $data['from_email'], 'email', 'email', 'Adres nadawcy');
        $this->settingService->set('from_name', $data['from_name'], 'email', 'text', 'Nazwa nadawcy');
        
        // Zapisz hasło tylko jeśli zostało podane
        if (!empty($data['smtp_password'])) {
            $this->settingService->set('smtp_password', $data['smtp_password'], 'email', 'password', 'Hasło SMTP');
        }
    }

    private function sendTestEmail(string $testEmail, array $smtpSettings): void
    {
        $email = (new Email())
            ->from($smtpSettings['from_email'])
            ->to($testEmail)
            ->subject('Test wiadomości z AssetHub')
            ->html('
                <h2>Test połączenia SMTP</h2>
                <p>Gratulacje! Konfiguracja SMTP działa prawidłowo.</p>
                <p><strong>Szczegóły połączenia:</strong></p>
                <ul>
                    <li>Serwer: ' . htmlspecialchars($smtpSettings['smtp_host']) . '</li>
                    <li>Port: ' . htmlspecialchars($smtpSettings['smtp_port']) . '</li>
                    <li>Szyfrowanie: ' . htmlspecialchars($smtpSettings['smtp_encryption']) . '</li>
                    <li>Użytkownik: ' . htmlspecialchars($smtpSettings['smtp_username']) . '</li>
                </ul>
                <p><em>Wiadomość wysłana z systemu AssetHub</em></p>
            ');

        $this->mailer->send($email);
    }

    private function getClientIp(): ?string
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        return $request?->getClientIp();
    }
}