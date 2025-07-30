# System Logowania - AssetHub

## 📋 Przegląd

System AssetHub używa **Symfony Monolog Bundle** do zarządzania logami. Logi są automatycznie zapisywane w katalogu `var/log/` i dostępne przez panel administratora.

## 📁 Struktura Logów

```
var/log/
├── dev.log              # Środowisko deweloperskie (wszystkie logi)
├── prod.log             # Środowisko produkcyjne (błędy i ważne zdarzenia)
├── security.log         # Zdarzenia bezpieczeństwa (tylko dev)
├── app.log             # Logi aplikacyjne (tylko dev)
├── doctrine.log        # Operacje bazodanowe (tylko dev)
├── equipment.log       # Moduł sprzętu (tylko dev)
├── dictionary.log      # System słowników (tylko dev)
└── deprecation.log     # Przestarzałe funkcje
```

## ⚙️ Konfiguracja

### Plik: `config/packages/monolog.yaml`

```yaml
monolog:
    channels:
        - deprecation
        - security    
        - app         
        - doctrine    
        - equipment   
        - dictionary  

when@dev:
    monolog:
        handlers:
            main:
                type: stream
                path: "%kernel.logs_dir%/%kernel.environment%.log"
                level: debug
            security:
                type: stream
                path: "%kernel.logs_dir%/security.log"
                level: info
                channels: [security]

when@prod:
    monolog:
        handlers:
            main:
                type: fingers_crossed
                action_level: error
                handler: nested
            nested:
                type: stream
                path: "%kernel.logs_dir%/%kernel.environment%.log"
                level: debug
                formatter: monolog.formatter.json
```

## 💻 Użycie w Kontrolerach

### Podstawowe logowanie

```php
<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyController extends AbstractController
{
    public function __construct(
        private LoggerInterface $logger
    ) {
    }

    public function someAction(): Response
    {
        // Podstawowe poziomy logowania
        $this->logger->debug('Debug information');
        $this->logger->info('Information message');
        $this->logger->warning('Warning message');
        $this->logger->error('Error occurred');
        $this->logger->critical('Critical system error');

        // Logowanie z kontekstem
        $this->logger->info('User action performed', [
            'user' => $this->getUser()->getUsername(),
            'action' => 'create_item',
            'item_id' => 123,
            'ip' => $request->getClientIp(),
            'timestamp' => new \DateTime()
        ]);

        return $this->render('template.html.twig');
    }
}
```

### Logowanie błędów z obsługą wyjątków

```php
public function riskyAction(): Response
{
    try {
        // Kod który może rzucić wyjątek
        $this->someRiskyOperation();
        
        $this->logger->info('Operation completed successfully');
        
    } catch (\Exception $e) {
        $this->logger->error('Operation failed', [
            'error' => $e->getMessage(),
            'file' => $e->getFile(),
            'line' => $e->getLine(),
            'user' => $this->getUser()?->getUsername(),
            'trace' => $e->getTraceAsString()
        ]);
        
        $this->addFlash('error', 'Wystąpił błąd podczas operacji.');
    }
}
```

## 🔧 Kanały Logowania

### Dedykowane kanały (tylko dev)

```php
// Wstrzyknięcie dedykowanych loggerów
public function __construct(
    private LoggerInterface $logger,           // Główny logger
    private LoggerInterface $securityLogger,  // @monolog.logger.security
    private LoggerInterface $appLogger,       // @monolog.logger.app
) {
}

// Użycie
$this->securityLogger->info('User login attempt', ['user' => 'admin']);
$this->appLogger->debug('Application state changed');
```

## 📊 Panel Administracyjny

### Dostęp do logów: `/admin/logs`

Funkcjonalności:
- **Przeglądanie** - lista wszystkich plików logów
- **Podgląd** - ostatnie 1000 linii z podświetlaniem
- **Pobieranie** - download pełnych plików
- **Czyszczenie** - bezpieczne usuwanie zawartości

### Bezpieczeństwo
- Dostęp tylko dla administratorów
- Walidacja ścieżek plików
- Ochrona przed path traversal
- CSRF protection w formularzach

## 📝 Poziomy Logowania

| Poziom | Opis | Kiedy używać |
|--------|------|--------------|
| `DEBUG` | Szczegółowe informacje debugowe | Tylko developement |
| `INFO` | Informacje o normalnej pracy | Ważne zdarzenia systemu |
| `WARNING` | Ostrzeżenia, nie są błędami | Przestarzałe funkcje, nietypowe sytuacje |
| `ERROR` | Błędy wymagające uwagi | Wyjątki, błędy operacji |
| `CRITICAL` | Błędy krytyczne | Awarie systemu, bezpieczeństwo |

## 🎯 Dobre Praktyki

### 1. Używaj kontekstu
```php
// ✅ Dobrze - z kontekstem
$this->logger->info('Dictionary entry created', [
    'type' => 'equipment_categories',
    'name' => 'New Category',
    'user' => $user->getUsername()
]);

// ❌ Źle - bez kontekstu
$this->logger->info('Dictionary entry created');
```

### 2. Loguj ważne zdarzenia biznesowe
```php
// Tworzenie, edycja, usuwanie danych
// Operacje użytkowników
// Zmiany uprawnień
// Błędy operacji
```

### 3. Nie loguj danych wrażliwych
```php
// ❌ Nigdy nie loguj haseł, tokenów, danych osobowych
$this->logger->info('User data', ['password' => $password]); // NIE!

// ✅ Loguj tylko niezbędne informacje
$this->logger->info('User authenticated', ['user' => $username]);
```

### 4. Używaj odpowiednich poziomów
```php
// ✅ DEBUG - tylko dla developmentu
$this->logger->debug('SQL query executed', ['query' => $sql]);

// ✅ INFO - normalne zdarzenia
$this->logger->info('User logged out', ['user' => $username]);

// ✅ ERROR - błędy wymagające uwagi
$this->logger->error('Database connection failed', ['error' => $e->getMessage()]);
```

## 🚀 Wydajność

- **Produkcja**: Tylko błędy i ważne zdarzenia (fingers_crossed handler)
- **Development**: Wszystkie logi, różne pliki według kanałów
- **Automatyczne czyszczenie**: Skonfiguruj rotację logów w systemie
- **Monitoring**: Użyj zewnętrznych narzędzi do analizy logów

## 📋 Przykłady z AssetHub

### Logowanie w DictionaryController
```php
$this->logger->info('Dictionary entry created', [
    'type' => $type,
    'name' => $dictionary->getName(),
    'user' => $user->getUsername(),
    'ip' => $request->getClientIp()
]);
```

### Automatyczne logowanie błędów
Symfony automatycznie loguje wszystkie nieobsłużone wyjątki do głównego logu.

### Logowanie w CLI
```bash
# Sprawdzenie ostatnich logów
tail -f var/log/prod.log

# Wyszukiwanie błędów
grep "ERROR" var/log/prod.log

# Analiza logów z kontekstem
grep -A 5 -B 5 "Dictionary" var/log/dev.log
```