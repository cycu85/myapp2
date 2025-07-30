# 🚀 Przewodnik Instalacji AssetHub na Ubuntu Server

Ten przewodnik przeprowadzi Cię przez proces instalacji systemu AssetHub na serwerze Ubuntu 22.04 LTS krok po kroku.

## 📋 Wymagania Wstępne

### Serwer
- Ubuntu 22.04 LTS (zalecane) lub 20.04 LTS
- Minimum 2GB RAM (zalecane 4GB)
- Minimum 10GB miejsca na dysku (zalecane 20GB)
- Dostęp root lub sudo
- Połączenie internetowe

### Oprogramowanie (zostanie zainstalowane w trakcie)
- PHP 8.2+
- Apache2 lub Nginx
- Composer
- Git

## 🛠️ Instalacja Krok po Krok

### Krok 1: Przygotowanie Systemu

```bash
# Logowanie jako root lub użytkownik z uprawnieniami sudo
sudo su -

# Aktualizacja listy pakietów
apt update && apt upgrade -y

# Instalacja podstawowych narzędzi
apt install -y curl wget git unzip software-properties-common apt-transport-https
```

### Krok 2: Instalacja PHP 8.2

```bash
# Dodanie repozytorium Ondřej Surý dla najnowszych wersji PHP
add-apt-repository ppa:ondrej/php -y
apt update

# Instalacja PHP 8.2 i wymaganych rozszerzeń
apt install -y php8.2 php8.2-cli php8.2-fpm php8.2-common \
    php8.2-sqlite3 php8.2-pdo php8.2-mysql php8.2-pgsql \
    php8.2-intl php8.2-mbstring php8.2-xml php8.2-curl \
    php8.2-gd php8.2-zip php8.2-opcache php8.2-bcmath

# Sprawdzenie wersji PHP
php -v
```

### Krok 3: Konfiguracja PHP dla Produkcji

```bash
# Edycja pliku konfiguracyjnego PHP
nano /etc/php/8.2/apache2/php.ini

# Zalecane ustawienia produkcyjne:
```

```ini
# Znajdź i zmień następujące wartości:
memory_limit = 256M
upload_max_filesize = 10M
post_max_size = 10M
max_execution_time = 300
date.timezone = Europe/Warsaw

# Optymalizacja OPcache
opcache.enable=1
opcache.memory_consumption=256
opcache.max_accelerated_files=20000
opcache.validate_timestamps=0
opcache.save_comments=1
opcache.fast_shutdown=1
```

### Krok 4: Instalacja i Konfiguracja Apache2

```bash
# Instalacja Apache2
apt install -y apache2

# Włączenie niezbędnych modułów
a2enmod rewrite
a2enmod ssl
a2enmod headers
a2enmod php8.2

# Uruchomienie i włączenie Apache2
systemctl enable apache2
systemctl start apache2

# Sprawdzenie statusu
systemctl status apache2
```

### Krok 5: Instalacja Composera

```bash
# Pobranie i instalacja Composera
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
chmod +x /usr/local/bin/composer

# Sprawdzenie instalacji
composer --version
```

### Krok 6: Pobranie i Przygotowanie AssetHub

```bash
# Przejście do katalogu web
cd /var/www

# Klonowanie repozytorium (zastąp URL rzeczywistym adresem)
git clone https://github.com/your-username/assethub.git assethub

# Zmiana właściciela na www-data
chown -R www-data:www-data assethub

# Przejście do katalogu aplikacji
cd assethub

# Instalacja zależności PHP (jako www-data)
sudo -u www-data composer install --no-dev --optimize-autoloader

# Ustawienie uprawnień
chmod -R 755 .
chmod -R 775 var/ public/
chown -R www-data:www-data var/ public/
```

### Krok 7: Konfiguracja Apache VirtualHost

```bash
# Utworzenie pliku konfiguracyjnego VirtualHost
nano /etc/apache2/sites-available/assethub.conf
```

```apache
<VirtualHost *:80>
    ServerName your-domain.com
    ServerAlias www.your-domain.com
    DocumentRoot /var/www/assethub/public
    
    <Directory /var/www/assethub/public>
        AllowOverride All
        Order Allow,Deny
        Allow from All
        Require all granted
        
        # Redirect wszystkiego do index.php
        <IfModule mod_rewrite.c>
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^(.*)$ index.php [QSA,L]
        </IfModule>
    </Directory>
    
    # Ochrona katalogów systemowych
    <Directory /var/www/assethub/var>
        Require all denied
    </Directory>
    
    <Directory /var/www/assethub/config>
        Require all denied
    </Directory>
    
    <Directory /var/www/assethub/src>
        Require all denied
    </Directory>
    
    # Logi
    ErrorLog ${APACHE_LOG_DIR}/assethub_error.log
    CustomLog ${APACHE_LOG_DIR}/assethub_access.log combined
    LogLevel warn
</VirtualHost>
```

```bash
# Aktywacja strony i dezaktywacja domyślnej
a2ensite assethub.conf
a2dissite 000-default.conf

# Restart Apache
systemctl reload apache2
```

### Krok 8: Konfiguracja DNS (opcjonalne)

Jeśli używasz własnej domeny, skonfiguruj rekord DNS:

```
A record: your-domain.com -> IP_SERWERA
CNAME: www.your-domain.com -> your-domain.com
```

### Krok 9: Instalacja SSL z Let's Encrypt (opcjonalne ale zalecane)

```bash
# Instalacja Certbot
apt install -y certbot python3-certbot-apache

# Uzyskanie certyfikatu SSL
certbot --apache -d your-domain.com -d www.your-domain.com

# Test automatycznego odnawiania
certbot renew --dry-run
```

### Krok 10: Uruchomienie Kreatora Instalacji

1. **Otwórz przeglądarkę** i przejdź do swojej domeny lub IP serwera:
   ```
   http://your-domain.com/install
   ```

2. **Postępuj zgodnie z kreatorem**:

   **Krok 1 - Ekran powitalny**
   - Przeczytaj informacje o systemie
   - Kliknij "Rozpocznij instalację"

   **Krok 2 - Sprawdzenie wymagań**
   - Kreator sprawdzi automatycznie wszystkie wymagania
   - Jeśli wszystko jest OK, kliknij "Dalej"
   - Jeśli są problemy, rozwiąż je i odśwież stronę

   **Krok 3 - Konfiguracja bazy danych**
   - System domyślnie używa SQLite (nie wymaga konfiguracji)
   - **Opcjonalnie**: Zaznacz "Załaduj dane przykładowe" dla testów
   - Kliknij "Utwórz bazę danych"

   **Krok 4 - Konto administratora**
   ```
   Imię: Jan
   Nazwisko: Kowalski
   Login: admin
   Email: admin@twoja-domena.com
   Hasło: (silne hasło)
   Potwierdź hasło: (to samo hasło)
   ```
   - Kliknij "Utwórz administratora"

   **Krok 5 - Zakończenie**
   - Instalacja zakończona!
   - Kliknij "Przejdź do systemu"

## 🔧 Konfiguracja Zaawansowana

### Baza Danych MySQL (opcjonalnie)

Jeśli wolisz MySQL zamiast SQLite:

```bash
# Instalacja MySQL
apt install -y mysql-server

# Zabezpieczenie MySQL
mysql_secure_installation

# Utworzenie bazy danych
mysql -u root -p
```

```sql
CREATE DATABASE assethub CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'assethub'@'localhost' IDENTIFIED BY 'strong_password_here';
GRANT ALL PRIVILEGES ON assethub.* TO 'assethub'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

Następnie utwórz plik `.env.local`:

```bash
nano /var/www/assethub/.env.local
```

```env
DATABASE_URL="mysql://assethub:strong_password_here@127.0.0.1:3306/assethub"
```

### Konfiguracja Email (opcjonalnie)

Dla funkcji powiadomień email, dodaj do `.env.local`:

```env
# Gmail
MAILER_DSN=gmail://username:password@default

# SMTP
MAILER_DSN=smtp://user:password@smtp.example.com:587

# Sendmail (lokalny)
MAILER_DSN=sendmail://default
```

### Optymalizacja Wydajności

```bash
# Wyczyszczenie i optymalizacja cache
cd /var/www/assethub
sudo -u www-data php bin/console cache:clear --env=prod
sudo -u www-data php bin/console cache:warmup --env=prod

# Optymalizacja Composer autoloader
sudo -u www-data composer dump-autoload --optimize --no-dev
```

### Automatyczne Kopie Zapasowe

Utwórz skrypt backupu:

```bash
nano /usr/local/bin/assethub-backup.sh
```

```bash
#!/bin/bash
BACKUP_DIR="/var/backups/assethub"
DATE=$(date +%Y%m%d_%H%M%S)

# Utworzenie katalogu jeśli nie istnieje
mkdir -p $BACKUP_DIR

# Backup bazy danych SQLite
cp /var/www/assethub/var/data.db $BACKUP_DIR/database_$DATE.db

# Backup plików aplikacji (opcjonalnie)
tar -czf $BACKUP_DIR/files_$DATE.tar.gz -C /var/www/assethub public/uploads

# Usuwanie starych backupów (starszych niż 30 dni)
find $BACKUP_DIR -name "*.db" -mtime +30 -delete
find $BACKUP_DIR -name "*.tar.gz" -mtime +30 -delete

echo "Backup completed: $DATE"
```

```bash
# Nadanie uprawnień wykonania
chmod +x /usr/local/bin/assethub-backup.sh

# Dodanie do cron (codziennie o 2:00)
crontab -e
```

Dodaj linię:
```
0 2 * * * /usr/local/bin/assethub-backup.sh >> /var/log/assethub-backup.log 2>&1
```

### Monitoring i Logi

```bash
# Śledzenie logów aplikacji
tail -f /var/www/assethub/var/log/prod.log

# Śledzenie logów Apache
tail -f /var/log/apache2/assethub_error.log
tail -f /var/log/apache2/assethub_access.log

# Monitoring miejsca na dysku
df -h

# Monitoring procesów
htop
```

## 🔒 Zabezpieczenia

### Firewall (UFW)

```bash
# Włączenie UFW
ufw enable

# Zezwolenie na podstawowe porty
ufw allow 22/tcp    # SSH
ufw allow 80/tcp    # HTTP
ufw allow 443/tcp   # HTTPS

# Sprawdzenie statusu
ufw status verbose
```

### Fail2Ban

```bash
# Instalacja Fail2Ban
apt install -y fail2ban

# Konfiguracja dla Apache
nano /etc/fail2ban/jail.local
```

```ini
[DEFAULT]
bantime = 3600
findtime = 600
maxretry = 5

[apache-auth]
enabled = true

[apache-badbots]
enabled = true

[apache-noscript]
enabled = true

[apache-overflows]
enabled = true
```

```bash
# Restart Fail2Ban
systemctl restart fail2ban
systemctl enable fail2ban
```

### Aktualizacje Automatyczne

```bash
# Instalacja unattended-upgrades
apt install -y unattended-upgrades

# Konfiguracja
dpkg-reconfigure unattended-upgrades
```

## 🚨 Rozwiązywanie Problemów

### Problem: Strona nie ładuje się

**Rozwiązanie:**
```bash
# Sprawdź status Apache
systemctl status apache2

# Sprawdź logi błędów
tail -f /var/log/apache2/assethub_error.log

# Sprawdź uprawnienia
ls -la /var/www/assethub/public/
```

### Problem: Błąd 500 - Internal Server Error

**Rozwiązanie:**
```bash
# Sprawdź logi Symfony
tail -f /var/www/assethub/var/log/prod.log

# Wyczyść cache
sudo -u www-data php bin/console cache:clear --env=prod

# Sprawdź uprawnienia katalogów
chmod -R 775 /var/www/assethub/var/
chown -R www-data:www-data /var/www/assethub/var/
```

### Problem: Baza danych nie działa

**Rozwiązanie:**
```bash
# Sprawdź czy plik bazy istnieje
ls -la /var/www/assethub/var/data.db

# Sprawdź uprawnienia
chown www-data:www-data /var/www/assethub/var/data.db
chmod 664 /var/www/assethub/var/data.db

# Sprawdź czy katalog var/ jest zapisywalny
chmod 775 /var/www/assethub/var/
```

### Problem: Kreator instalacji nie działa

**Rozwiązanie:**
```bash
# Sprawdź czy routing działa
sudo -u www-data php bin/console debug:router | grep install

# Sprawdź czy mod_rewrite jest włączony
a2enmod rewrite
systemctl reload apache2

# Sprawdź konfigurację VirtualHost
apache2ctl -t
```

## 📞 Wsparcie

Jeśli napotkasz problemy podczas instalacji:

1. **Sprawdź logi systemu** w pierwszej kolejności
2. **Przeczytaj sekcję rozwiązywania problemów** powyżej
3. **Zgłoś problem** na GitHub Issues z logami i opisem błędu
4. **Napisz na forum** społecznościowym projektu

### Przydatne Komendy Diagnostyczne

```bash
# Status wszystkich usług
systemctl status apache2 mysql

# Test konfiguracji Apache
apache2ctl configtest

# Informacje o PHP
php -m | grep -i sqlite
php -i | grep -i memory

# Sprawdzenie miejsca na dysku
df -h

# Sprawdzenie wykorzystania pamięci
free -h

# Logi systemowe
journalctl -f
```

---

**Gratulacje! 🎉**

AssetHub został pomyślnie zainstalowany na Twoim serwerze Ubuntu. System jest teraz gotowy do użycia.

**Następne kroki:**
1. Zaloguj się do systemu jako administrator
2. Skonfiguruj moduły według potrzeb
3. Dodaj użytkowników i przypisz im role
4. Rozpocznij inwentaryzację swojego sprzętu

**Pamiętaj o:**
- Regularnych kopiach zapasowych
- Aktualizacjach systemu
- Monitoringu logów
- Używaniu silnych haseł

Powodzenia w zarządzaniu zasobami Twojej firmy! 🚀