# Wzór logowania dla nowych kontrolerów

## 📋 Szablon kontrolera z logowaniem

```php
<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExampleController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger,
        // ... inne dependency injection
    ) {
    }

    #[Route('/example', name: 'example_action')]
    public function exampleAction(Request $request): Response
    {
        $user = $this->getUser();
        
        try {
            // Logowanie dostępu
            $this->logger->info('Example action accessed', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'ip' => $request->getClientIp(),
                'route' => $request->get('_route')
            ]);

            // Logika biznesowa...
            
            // Logowanie sukcesu operacji
            $this->logger->info('Example operation completed successfully', [
                'user' => $user->getUsername(),
                'operation' => 'example_operation',
                'context' => ['key' => 'value']
            ]);

            return $this->render('example/template.html.twig');
            
        } catch (\Exception $e) {
            // Logowanie błędów
            $this->logger->error('Example operation failed', [
                'user' => $user?->getUsername() ?? 'anonymous',
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'ip' => $request->getClientIp()
            ]);
            
            throw $e;
        }
    }

    // Metoda pomocnicza dla IP (opcjonalna jeśli nie używasz Request w metodzie)
    private function getClientIp(): ?string
    {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        return $request?->getClientIp();
    }
}
```

## 🎯 Poziomy logowania - kiedy używać

### INFO - Normalne operacje
```php
// Dostęp do stron
$this->logger->info('Page accessed', ['user' => $user->getUsername()]);

// Pomyślne operacje CRUD
$this->logger->info('Entity created', ['entity_id' => $entity->getId()]);

// Ważne zdarzenia biznesowe
$this->logger->info('User role assigned', ['user' => $user->getId(), 'role' => $role->getName()]);
```

### WARNING - Nietypowe sytuacje
```php
// Nieautoryzowane próby dostępu
$this->logger->warning('Unauthorized access attempt', [
    'user' => $user?->getUsername() ?? 'anonymous',
    'route' => $request->get('_route'),
    'ip' => $request->getClientIp()
]);

// Przestarzałe funkcje
$this->logger->warning('Deprecated feature used', ['feature' => 'old_api']);

// Nietypowe dane wejściowe
$this->logger->warning('Invalid input received', ['input' => $invalidData]);
```

### ERROR - Błędy wymagające uwagi
```php
// Wyjątki aplikacji
$this->logger->error('Operation failed', [
    'error' => $e->getMessage(),
    'user' => $user?->getUsername(),
    'context' => $relevantData
]);

// Błędy bazy danych
$this->logger->error('Database operation failed', [
    'operation' => 'insert',
    'table' => 'users',
    'error' => $e->getMessage()
]);

// Błędy zewnętrznych serwisów
$this->logger->error('External service unavailable', [
    'service' => 'payment_gateway',
    'response_code' => $responseCode
]);
```

## 📝 Kontekst logowania - co zawierać

### Zawsze dołączaj:
- **user** - nazwa użytkownika lub 'anonymous'
- **ip** - adres IP użytkownika
- **action** - jaka operacja była wykonywana

### Dla operacji CRUD:
- **entity_id** - ID encji
- **entity_type** - typ encji
- **changes** - co zostało zmienione

### Dla błędów:
- **error** - treść błędu
- **file** - plik gdzie wystąpił błąd
- **line** - linia błędu
- **context** - dodatkowe dane kontekstowe

### Dla bezpieczeństwa:
- **user_agent** - przeglądarka użytkownika
- **referer** - poprzednia strona
- **session_id** - ID sesji (jeśli potrzebne)

## 🚫 Czego NIE logować

```php
// ❌ NIE loguj danych wrażliwych
$this->logger->info('User created', [
    'password' => $password,          // NIE!
    'credit_card' => $ccNumber,       // NIE!
    'social_security' => $ssn         // NIE!
]);

// ✅ Loguj bezpiecznie
$this->logger->info('User created', [
    'username' => $username,
    'email' => $email,
    'roles_count' => count($roles)
]);
```

## 📊 Przykłady z różnych typów kontrolerów

### Kontroler CRUD
```php
public function create(Request $request): Response
{
    if ($request->isMethod('POST')) {
        try {
            $entity = new SomeEntity();
            // ... wypełnienie danych
            
            $this->entityManager->persist($entity);
            $this->entityManager->flush();

            $this->logger->info('Entity created successfully', [
                'entity_type' => 'SomeEntity',
                'entity_id' => $entity->getId(),
                'user' => $this->getUser()->getUsername(),
                'ip' => $request->getClientIp()
            ]);

            return $this->redirectToRoute('entity_list');
            
        } catch (\Exception $e) {
            $this->logger->error('Failed to create entity', [
                'entity_type' => 'SomeEntity',
                'error' => $e->getMessage(),
                'user' => $this->getUser()->getUsername(),
                'input_data' => $request->request->all()
            ]);
            
            $this->addFlash('error', 'Nie udało się utworzyć rekordu.');
        }
    }
}
```

### Kontroler API
```php
#[Route('/api/data', methods: ['GET'])]
public function apiData(Request $request): JsonResponse
{
    $user = $this->getUser();
    
    $this->logger->info('API endpoint accessed', [
        'endpoint' => '/api/data',
        'user' => $user?->getUsername() ?? 'anonymous',
        'ip' => $request->getClientIp(),
        'user_agent' => $request->headers->get('User-Agent')
    ]);

    try {
        $data = $this->dataService->getData();
        
        return $this->json($data);
        
    } catch (\Exception $e) {
        $this->logger->error('API request failed', [
            'endpoint' => '/api/data',
            'error' => $e->getMessage(),
            'user' => $user?->getUsername() ?? 'anonymous'
        ]);
        
        return $this->json(['error' => 'Internal server error'], 500);
    }
}
```

## 🔧 Narzędzia pomocnicze

### Sprawdzanie czy user jest zalogowany
```php
$user = $this->getUser();
$username = $user?->getUsername() ?? 'anonymous';
```

### Pobieranie IP w metodach bez Request
```php
private function getClientIp(): ?string
{
    $request = $this->container->get('request_stack')->getCurrentRequest();
    return $request?->getClientIp();
}
```

### Logowanie z try-catch
```php
try {
    // operacja
    $this->logger->info('Operation successful');
} catch (\Exception $e) {
    $this->logger->error('Operation failed', [
        'error' => $e->getMessage(),
        'trace' => $e->getTraceAsString()
    ]);
    throw $e; // re-throw jeśli potrzebne
}
```

Używaj tego wzoru we wszystkich nowych kontrolerach dla spójnego logowania w całej aplikacji!