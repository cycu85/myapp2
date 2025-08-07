<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250806135927 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create tables for Tools module: tool_categories, tool_types, tools';
    }

    public function up(Schema $schema): void
    {
        // Tabela kategorii narzędzi (elektronarzędzia, hydrauliczne, proste)
        $this->addSql('CREATE TABLE tool_categories (
            id INT AUTO_INCREMENT NOT NULL,
            name VARCHAR(100) NOT NULL,
            description TEXT DEFAULT NULL,
            icon VARCHAR(50) DEFAULT NULL,
            is_active TINYINT(1) DEFAULT 1,
            sort_order INT DEFAULT 0,
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            PRIMARY KEY(id),
            UNIQUE INDEX UNIQ_tool_categories_name (name),
            INDEX IDX_tool_categories_active_sort (is_active, sort_order)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Tabela typów narzędzi (wielosztuki vs pojedyncze)
        $this->addSql('CREATE TABLE tool_types (
            id INT AUTO_INCREMENT NOT NULL,
            name VARCHAR(100) NOT NULL,
            description TEXT DEFAULT NULL,
            is_multi_quantity TINYINT(1) DEFAULT 0 COMMENT \'Whether this type supports quantity tracking\',
            is_active TINYINT(1) DEFAULT 1,
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            PRIMARY KEY(id),
            UNIQUE INDEX UNIQ_tool_types_name (name),
            INDEX IDX_tool_types_multi (is_multi_quantity),
            INDEX IDX_tool_types_active (is_active)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Główna tabela narzędzi
        $this->addSql('CREATE TABLE tools (
            id INT AUTO_INCREMENT NOT NULL,
            category_id INT NOT NULL,
            type_id INT NOT NULL,
            created_by_id INT DEFAULT NULL,
            updated_by_id INT DEFAULT NULL,
            name VARCHAR(255) NOT NULL,
            description TEXT DEFAULT NULL,
            serial_number VARCHAR(100) DEFAULT NULL,
            inventory_number VARCHAR(100) DEFAULT NULL,
            manufacturer VARCHAR(100) DEFAULT NULL,
            model VARCHAR(100) DEFAULT NULL,
            purchase_date DATE DEFAULT NULL,
            purchase_price DECIMAL(10,2) DEFAULT NULL,
            warranty_end_date DATE DEFAULT NULL,
            status ENUM(\'active\', \'inactive\', \'maintenance\', \'broken\', \'sold\', \'disposed\') DEFAULT \'active\',
            location VARCHAR(255) DEFAULT NULL,
            current_quantity INT DEFAULT 1 COMMENT \'Current quantity for multi-quantity tools\',
            total_quantity INT DEFAULT 1 COMMENT \'Total quantity purchased for multi-quantity tools\',
            min_quantity INT DEFAULT NULL COMMENT \'Minimum quantity alert threshold\',
            unit VARCHAR(50) DEFAULT \'szt\' COMMENT \'Unit of measurement\',
            next_inspection_date DATE DEFAULT NULL,
            inspection_interval_months INT DEFAULT NULL COMMENT \'How often to inspect (in months)\',
            notes TEXT DEFAULT NULL,
            is_active TINYINT(1) DEFAULT 1,
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            PRIMARY KEY(id),
            INDEX IDX_tools_category (category_id),
            INDEX IDX_tools_type (type_id),
            INDEX IDX_tools_created_by (created_by_id),
            INDEX IDX_tools_updated_by (updated_by_id),
            INDEX IDX_tools_status (status),
            INDEX IDX_tools_active (is_active),
            INDEX IDX_tools_serial (serial_number),
            INDEX IDX_tools_inventory (inventory_number),
            INDEX IDX_tools_inspection_date (next_inspection_date),
            INDEX IDX_tools_location (location),
            CONSTRAINT FK_tools_category FOREIGN KEY (category_id) REFERENCES tool_categories (id),
            CONSTRAINT FK_tools_type FOREIGN KEY (type_id) REFERENCES tool_types (id),
            CONSTRAINT FK_tools_created_by FOREIGN KEY (created_by_id) REFERENCES users (id),
            CONSTRAINT FK_tools_updated_by FOREIGN KEY (updated_by_id) REFERENCES users (id)
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Dodaj moduł tools do systemu modułów
        $this->addSql('INSERT INTO modules (name, display_name, description, is_enabled, created_at, updated_at) 
                       VALUES (\'tools\', \'Narzędzia\', \'Zarządzanie narzędziami, przeglądami i zestawami\', 1, NOW(), NOW())');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE tools');
        $this->addSql('DROP TABLE tool_types');  
        $this->addSql('DROP TABLE tool_categories');
        $this->addSql('DELETE FROM modules WHERE name = \'tools\'');
    }
}
