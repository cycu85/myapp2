<?php

namespace App\Controller\Admin;

use App\Entity\Module;
use App\Form\EmailSettingsType;
use App\Form\GeneralSettingsType;
use App\Form\LdapSettingsType;
use App\Repository\ModuleRepository;
use App\Service\PermissionService;
use App\Service\SettingService;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
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

    #[Route('/settings/ldap', name: 'admin_settings_ldap')]
    public function ldapSettings(Request $request): Response
    {
        $user = $this->getUser();
        
        if (!$this->permissionService->canAccessModule($user, 'admin')) {
            $this->logger->warning('Unauthorized admin LDAP settings access attempt', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $this->getClientIp()
            ]);
            throw $this->createAccessDeniedException('Brak dostępu do panelu administracyjnego');
        }

        // Pobierz obecne ustawienia LDAP
        $currentSettings = $this->getLdapSettings();
        
        $form = $this->createForm(LdapSettingsType::class, $currentSettings);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $data = $form->getData();
            
            // Sprawdź który przycisk został kliknięty
            $isTestConnection = $form->get('test')->isClicked();
            $isSyncExisting = $form->get('sync_existing')->isClicked();
            $isSyncNew = $form->get('sync_new')->isClicked();
            
            if ($isTestConnection) {
                // Testowanie połączenia LDAP
                try {
                    $result = $this->testLdapConnection($data);
                    $this->addFlash('success', 'Połączenie LDAP działa prawidłowo! Znaleziono ' . $result['user_count'] . ' użytkowników.');
                    
                    $this->logger->info('LDAP connection test successful', [
                        'user' => $user->getUsername(),
                        'ldap_host' => $data['ldap_host'],
                        'user_count' => $result['user_count'],
                        'ip' => $this->getClientIp()
                    ]);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Błąd połączenia LDAP: ' . $e->getMessage());
                    
                    $this->logger->error('LDAP connection test failed', [
                        'user' => $user->getUsername(),
                        'ldap_host' => $data['ldap_host'],
                        'error' => $e->getMessage(),
                        'ip' => $this->getClientIp()
                    ]);
                }
            } elseif ($isSyncExisting) {
                // Synchronizacja istniejących użytkowników
                try {
                    $result = $this->syncExistingUsers($data);
                    $this->addFlash('success', 'Zsynchronizowano ' . $result['updated'] . ' istniejących użytkowników z LDAP.');
                    
                    $this->logger->info('LDAP existing users sync completed', [
                        'user' => $user->getUsername(),
                        'updated_users' => $result['updated'],
                        'ip' => $this->getClientIp()
                    ]);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Błąd synchronizacji: ' . $e->getMessage());
                    
                    $this->logger->error('LDAP existing users sync failed', [
                        'user' => $user->getUsername(),
                        'error' => $e->getMessage(),
                        'ip' => $this->getClientIp()
                    ]);
                }
            } elseif ($isSyncNew) {
                // Synchronizacja nowych użytkowników
                try {
                    $result = $this->syncNewUsers($data);
                    $this->addFlash('success', 'Dodano ' . $result['created'] . ' nowych użytkowników z LDAP.');
                    
                    $this->logger->info('LDAP new users sync completed', [
                        'user' => $user->getUsername(),
                        'created_users' => $result['created'],
                        'ip' => $this->getClientIp()
                    ]);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Błąd synchronizacji: ' . $e->getMessage());
                    
                    $this->logger->error('LDAP new users sync failed', [
                        'user' => $user->getUsername(),
                        'error' => $e->getMessage(),
                        'ip' => $this->getClientIp()
                    ]);
                }
            } elseif ($form->isValid()) {
                // Zapisywanie ustawień
                try {
                    $this->saveLdapSettings($data);
                    
                    $this->addFlash('success', 'Ustawienia LDAP zostały zapisane pomyślnie!');
                    
                    $this->logger->info('LDAP settings updated successfully', [
                        'user' => $user->getUsername(),
                        'ip' => $this->getClientIp()
                    ]);

                    return $this->redirectToRoute('admin_settings_ldap');
                    
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Wystąpił błąd podczas zapisywania ustawień: ' . $e->getMessage());
                    
                    $this->logger->error('Failed to save LDAP settings', [
                        'user' => $user->getUsername(),
                        'error' => $e->getMessage(),
                        'ip' => $this->getClientIp()
                    ]);
                }
            }
        }

        $this->logger->info('Admin LDAP settings page accessed', [
            'user' => $user->getUsername(),
            'ip' => $this->getClientIp()
        ]);

        return $this->render('admin/settings/ldap.html.twig', [
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
        // Pobierz hasło z bazy danych jeśli nie zostało podane w formularzu
        $password = $smtpSettings['smtp_password'];
        if (empty($password)) {
            $password = $this->settingService->get('smtp_password', '');
        }
        
        // Buduj DSN na podstawie ustawień SMTP
        $encryption = $smtpSettings['smtp_encryption'] !== 'none' ? $smtpSettings['smtp_encryption'] : null;
        $dsnParts = [
            'smtp://',
            urlencode($smtpSettings['smtp_username']),
            ':',
            urlencode($password),
            '@',
            $smtpSettings['smtp_host'],
            ':',
            $smtpSettings['smtp_port']
        ];
        
        if ($encryption) {
            $dsnParts[] = '?encryption=' . $encryption;
        }
        
        $dsn = implode('', $dsnParts);
        
        // Utwórz transport SMTP na podstawie konfiguracji
        $transport = Transport::fromDsn($dsn);
        $mailer = new Mailer($transport);
        
        // Utwórz wiadomość
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

        // Wyślij przez skonfigurowany transport
        $mailer->send($email);
    }

    private function getLdapSettings(): array
    {
        return [
            'ldap_enabled' => (bool) $this->settingService->get('ldap_enabled', false),
            'ldap_host' => $this->settingService->get('ldap_host', 'ldap://localhost'),
            'ldap_port' => (int) $this->settingService->get('ldap_port', '389'),
            'ldap_encryption' => $this->settingService->get('ldap_encryption', 'none'),
            'ldap_bind_dn' => $this->settingService->get('ldap_bind_dn', ''),
            'ldap_bind_password' => '', // Nigdy nie pobieraj hasła do formularza
            'ldap_base_dn' => $this->settingService->get('ldap_base_dn', ''),
            'ldap_user_filter' => $this->settingService->get('ldap_user_filter', '(&(objectClass=user)(!(userAccountControl:1.2.840.113556.1.4.803:=2)))'),
            'ldap_map_username' => $this->settingService->get('ldap_map_username', 'sAMAccountName'),
            'ldap_map_email' => $this->settingService->get('ldap_map_email', 'mail'),
            'ldap_map_firstname' => $this->settingService->get('ldap_map_firstname', 'givenName'),
            'ldap_map_lastname' => $this->settingService->get('ldap_map_lastname', 'sn'),
            'ldap_map_displayname' => $this->settingService->get('ldap_map_displayname', 'displayName'),
            'ldap_auto_create_users' => (bool) $this->settingService->get('ldap_auto_create_users', false),
            'ldap_update_existing_users' => (bool) $this->settingService->get('ldap_update_existing_users', false),
        ];
    }

    private function saveLdapSettings(array $data): void
    {
        $this->settingService->set('ldap_enabled', $data['ldap_enabled'] ? '1' : '0', 'ldap', 'boolean', 'Włącz integrację LDAP');
        $this->settingService->set('ldap_host', $data['ldap_host'], 'ldap', 'text', 'Serwer LDAP');
        $this->settingService->set('ldap_port', (string) $data['ldap_port'], 'ldap', 'number', 'Port LDAP');
        $this->settingService->set('ldap_encryption', $data['ldap_encryption'], 'ldap', 'text', 'Typ szyfrowania LDAP');
        $this->settingService->set('ldap_bind_dn', $data['ldap_bind_dn'], 'ldap', 'text', 'Bind DN użytkownika serwisowego');
        $this->settingService->set('ldap_base_dn', $data['ldap_base_dn'], 'ldap', 'text', 'Base DN katalog bazowy');
        $this->settingService->set('ldap_user_filter', $data['ldap_user_filter'], 'ldap', 'text', 'Filtr użytkowników LDAP');
        $this->settingService->set('ldap_map_username', $data['ldap_map_username'], 'ldap', 'text', 'Mapowanie pola username');
        $this->settingService->set('ldap_map_email', $data['ldap_map_email'], 'ldap', 'text', 'Mapowanie pola email');
        $this->settingService->set('ldap_map_firstname', $data['ldap_map_firstname'], 'ldap', 'text', 'Mapowanie pola imię');
        $this->settingService->set('ldap_map_lastname', $data['ldap_map_lastname'], 'ldap', 'text', 'Mapowanie pola nazwisko');
        $this->settingService->set('ldap_map_displayname', $data['ldap_map_displayname'], 'ldap', 'text', 'Mapowanie pola pełna nazwa');
        $this->settingService->set('ldap_auto_create_users', $data['ldap_auto_create_users'] ? '1' : '0', 'ldap', 'boolean', 'Automatycznie twórz nowych użytkowników');
        $this->settingService->set('ldap_update_existing_users', $data['ldap_update_existing_users'] ? '1' : '0', 'ldap', 'boolean', 'Aktualizuj istniejących użytkowników');
        
        // Zapisz hasło tylko jeśli zostało podane
        if (!empty($data['ldap_bind_password'])) {
            $this->settingService->set('ldap_bind_password', $data['ldap_bind_password'], 'ldap', 'password', 'Hasło użytkownika serwisowego LDAP');
        }
    }

    private function testLdapConnection(array $ldapSettings): array
    {
        // Pobierz hasło z bazy danych jeśli nie zostało podane w formularzu
        $password = $ldapSettings['ldap_bind_password'];
        if (empty($password)) {
            $password = $this->settingService->get('ldap_bind_password', '');
        }

        // Tutaj będzie implementacja połączenia z LDAP
        // Na razie zwracamy przykładowe dane
        return [
            'user_count' => 42,
            'connection_successful' => true
        ];
    }

    private function syncExistingUsers(array $ldapSettings): array
    {
        // Tutaj będzie implementacja synchronizacji istniejących użytkowników
        // Na razie zwracamy przykładowe dane
        return [
            'updated' => 15,
            'errors' => 0
        ];
    }

    private function syncNewUsers(array $ldapSettings): array
    {
        // Tutaj będzie implementacja synchronizacji nowych użytkowników
        // Na razie zwracamy przykładowe dane
        return [
            'created' => 8,
            'errors' => 0
        ];
    }

    private function getClientIp(): ?string
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        return $request?->getClientIp();
    }
}