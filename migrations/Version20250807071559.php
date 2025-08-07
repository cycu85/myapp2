<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250807071559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create tool_inspections table for tracking tool inspections';
    }

    public function up(Schema $schema): void
    {
        // Create tool_inspections table
        $this->addSql('CREATE TABLE tool_inspections (
            id INT AUTO_INCREMENT NOT NULL,
            tool_id INT NOT NULL,
            created_by_id INT DEFAULT NULL,
            updated_by_id INT DEFAULT NULL,
            inspection_date DATE NOT NULL,
            planned_date DATE NOT NULL,
            inspector_name VARCHAR(255) NOT NULL,
            result VARCHAR(50) NOT NULL DEFAULT \'passed\',
            description TEXT DEFAULT NULL,
            notes TEXT DEFAULT NULL,
            defects_found LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\',
            next_inspection_date DATE DEFAULT NULL,
            cost NUMERIC(10, 2) DEFAULT NULL,
            is_active TINYINT(1) NOT NULL DEFAULT 1,
            created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\',
            PRIMARY KEY(id),
            INDEX IDX_tool_inspections_tool (tool_id),
            INDEX IDX_tool_inspections_created_by (created_by_id),
            INDEX IDX_tool_inspections_updated_by (updated_by_id),
            INDEX IDX_tool_inspections_inspection_date (inspection_date),
            INDEX IDX_tool_inspections_planned_date (planned_date),
            INDEX IDX_tool_inspections_result (result),
            INDEX IDX_tool_inspections_active (is_active),
            CONSTRAINT FK_tool_inspections_tool FOREIGN KEY (tool_id) REFERENCES tools (id) ON DELETE CASCADE,
            CONSTRAINT FK_tool_inspections_created_by FOREIGN KEY (created_by_id) REFERENCES users (id) ON DELETE SET NULL,
            CONSTRAINT FK_tool_inspections_updated_by FOREIGN KEY (updated_by_id) REFERENCES users (id) ON DELETE SET NULL
        ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE tool_inspections');
    }
}
