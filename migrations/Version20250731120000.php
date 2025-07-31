<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Settings system migration
 */
final class Version20250731120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add settings table for system configuration';
    }

    public function up(Schema $schema): void
    {
        // Create settings table
        $this->addSql('CREATE TABLE settings (
            id INT AUTO_INCREMENT NOT NULL, 
            setting_key VARCHAR(255) NOT NULL, 
            setting_value LONGTEXT DEFAULT NULL, 
            category VARCHAR(100) DEFAULT NULL, 
            type VARCHAR(50) DEFAULT NULL, 
            description VARCHAR(255) DEFAULT NULL, 
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', 
            updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', 
            UNIQUE INDEX UNIQ_E545A0C5CC0F3C3C (setting_key), 
            PRIMARY KEY(id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Insert default settings
        $this->addSql('INSERT INTO settings (setting_key, setting_value, category, type, description, created_at, updated_at) VALUES 
            (\'app_name\', \'AssetHub\', \'general\', \'text\', \'Nazwa aplikacji\', NOW(), NOW()),
            (\'company_logo\', \'/assets/images/logo-dark.png\', \'general\', \'file\', \'Logo firmy\', NOW(), NOW()),
            (\'primary_color\', \'#405189\', \'general\', \'color\', \'Główny kolor aplikacji\', NOW(), NOW())
        ');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE settings');
    }
}