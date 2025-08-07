<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250807071858 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create tool_sets and tool_set_items tables for managing tool sets';
    }

    public function up(Schema $schema): void
    {
        // Create tool_sets table
        $this->addSql('CREATE TABLE tool_sets (
            id INT AUTO_INCREMENT NOT NULL,
            created_by_id INT DEFAULT NULL,
            updated_by_id INT DEFAULT NULL,
            name VARCHAR(255) NOT NULL,
            description TEXT DEFAULT NULL,
            code VARCHAR(100) DEFAULT NULL,
            location VARCHAR(255) DEFAULT NULL,
            status VARCHAR(50) NOT NULL DEFAULT \'active\',
            is_active TINYINT(1) NOT NULL DEFAULT 1,
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            PRIMARY KEY(id),
            UNIQUE INDEX UNIQ_tool_sets_code (code),
            INDEX IDX_tool_sets_created_by (created_by_id),
            INDEX IDX_tool_sets_updated_by (updated_by_id),
            INDEX IDX_tool_sets_status (status),
            INDEX IDX_tool_sets_active (is_active),
            INDEX IDX_tool_sets_location (location),
            CONSTRAINT FK_tool_sets_created_by FOREIGN KEY (created_by_id) REFERENCES users (id) ON DELETE SET NULL,
            CONSTRAINT FK_tool_sets_updated_by FOREIGN KEY (updated_by_id) REFERENCES users (id) ON DELETE SET NULL
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Create tool_set_items table
        $this->addSql('CREATE TABLE tool_set_items (
            id INT AUTO_INCREMENT NOT NULL,
            tool_set_id INT NOT NULL,
            tool_id INT NOT NULL,
            quantity INT NOT NULL DEFAULT 1,
            required_quantity INT NOT NULL DEFAULT 1,
            notes TEXT DEFAULT NULL,
            is_active TINYINT(1) NOT NULL DEFAULT 1,
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            PRIMARY KEY(id),
            INDEX IDX_tool_set_items_set (tool_set_id),
            INDEX IDX_tool_set_items_tool (tool_id),
            INDEX IDX_tool_set_items_active (is_active),
            UNIQUE INDEX UNIQ_tool_set_tool (tool_set_id, tool_id),
            CONSTRAINT FK_tool_set_items_set FOREIGN KEY (tool_set_id) REFERENCES tool_sets (id) ON DELETE CASCADE,
            CONSTRAINT FK_tool_set_items_tool FOREIGN KEY (tool_id) REFERENCES tools (id) ON DELETE CASCADE
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        // Create tool_set_inspections junction table for many-to-many relationship
        $this->addSql('CREATE TABLE tool_set_inspections (
            id INT AUTO_INCREMENT NOT NULL,
            tool_set_id INT NOT NULL,
            inspection_id INT NOT NULL,
            PRIMARY KEY(id),
            INDEX IDX_tool_set_inspections_set (tool_set_id),
            INDEX IDX_tool_set_inspections_inspection (inspection_id),
            UNIQUE INDEX UNIQ_set_inspection (tool_set_id, inspection_id),
            CONSTRAINT FK_tool_set_inspections_set FOREIGN KEY (tool_set_id) REFERENCES tool_sets (id) ON DELETE CASCADE,
            CONSTRAINT FK_tool_set_inspections_inspection FOREIGN KEY (inspection_id) REFERENCES tool_inspections (id) ON DELETE CASCADE
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE tool_set_inspections');
        $this->addSql('DROP TABLE tool_set_items');
        $this->addSql('DROP TABLE tool_sets');
    }
}
