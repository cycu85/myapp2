<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250811070036 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tool_categories CHANGE description description LONGTEXT DEFAULT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT 1 NOT NULL, CHANGE sort_order sort_order INT DEFAULT 0 NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE tool_categories RENAME INDEX uniq_tool_categories_name TO UNIQ_B75EAEE95E237E06');
        $this->addSql('ALTER TABLE tool_inspections CHANGE description description LONGTEXT DEFAULT NULL, CHANGE notes notes LONGTEXT DEFAULT NULL, CHANGE defects_found defects_found JSON DEFAULT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE tool_set_items CHANGE notes notes LONGTEXT DEFAULT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE tool_sets CHANGE description description LONGTEXT DEFAULT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE tool_set_inspections MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX UNIQ_set_inspection ON tool_set_inspections');
        $this->addSql('DROP INDEX `primary` ON tool_set_inspections');
        $this->addSql('ALTER TABLE tool_set_inspections DROP id');
        $this->addSql('ALTER TABLE tool_set_inspections ADD PRIMARY KEY (tool_set_id, inspection_id)');
        $this->addSql('ALTER TABLE tool_set_inspections RENAME INDEX idx_tool_set_inspections_set TO IDX_D14CA1A575AA0104');
        $this->addSql('ALTER TABLE tool_set_inspections RENAME INDEX idx_tool_set_inspections_inspection TO IDX_D14CA1A5F02F2DDF');
        $this->addSql('ALTER TABLE tool_types CHANGE description description LONGTEXT DEFAULT NULL, CHANGE is_multi_quantity is_multi_quantity TINYINT(1) DEFAULT 0 NOT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT 1 NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE tool_types RENAME INDEX uniq_tool_types_name TO UNIQ_B8E553685E237E06');
        $this->addSql('ALTER TABLE tools CHANGE description description LONGTEXT DEFAULT NULL, CHANGE status status VARCHAR(50) DEFAULT \'active\' NOT NULL, CHANGE current_quantity current_quantity INT DEFAULT 1 NOT NULL, CHANGE total_quantity total_quantity INT DEFAULT 1 NOT NULL, CHANGE min_quantity min_quantity INT DEFAULT NULL, CHANGE unit unit VARCHAR(50) DEFAULT \'szt\' NOT NULL, CHANGE inspection_interval_months inspection_interval_months INT DEFAULT NULL, CHANGE notes notes LONGTEXT DEFAULT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT 1 NOT NULL, CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tool_categories CHANGE description description TEXT DEFAULT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT 1, CHANGE sort_order sort_order INT DEFAULT 0, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE tool_categories RENAME INDEX uniq_b75eaee95e237e06 TO UNIQ_tool_categories_name');
        $this->addSql('ALTER TABLE tool_inspections CHANGE description description TEXT DEFAULT NULL, CHANGE notes notes TEXT DEFAULT NULL, CHANGE defects_found defects_found LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('DROP INDEX `PRIMARY` ON tool_set_inspections');
        $this->addSql('ALTER TABLE tool_set_inspections ADD id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_set_inspection ON tool_set_inspections (tool_set_id, inspection_id)');
        $this->addSql('ALTER TABLE tool_set_inspections ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE tool_set_inspections RENAME INDEX idx_d14ca1a5f02f2ddf TO IDX_tool_set_inspections_inspection');
        $this->addSql('ALTER TABLE tool_set_inspections RENAME INDEX idx_d14ca1a575aa0104 TO IDX_tool_set_inspections_set');
        $this->addSql('ALTER TABLE tool_set_items CHANGE notes notes TEXT DEFAULT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE tool_sets CHANGE description description TEXT DEFAULT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE tool_types CHANGE description description TEXT DEFAULT NULL, CHANGE is_multi_quantity is_multi_quantity TINYINT(1) DEFAULT 0 COMMENT \'Whether this type supports quantity tracking\', CHANGE is_active is_active TINYINT(1) DEFAULT 1, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE tool_types RENAME INDEX uniq_b8e553685e237e06 TO UNIQ_tool_types_name');
        $this->addSql('ALTER TABLE tools CHANGE description description TEXT DEFAULT NULL, CHANGE status status ENUM(\'active\', \'inactive\', \'maintenance\', \'broken\', \'sold\', \'disposed\') DEFAULT \'active\', CHANGE current_quantity current_quantity INT DEFAULT 1 COMMENT \'Current quantity for multi-quantity tools\', CHANGE total_quantity total_quantity INT DEFAULT 1 COMMENT \'Total quantity purchased for multi-quantity tools\', CHANGE min_quantity min_quantity INT DEFAULT NULL COMMENT \'Minimum quantity alert threshold\', CHANGE unit unit VARCHAR(50) DEFAULT \'szt\' COMMENT \'Unit of measurement\', CHANGE inspection_interval_months inspection_interval_months INT DEFAULT NULL COMMENT \'How often to inspect (in months)\', CHANGE notes notes TEXT DEFAULT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT 1, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
