<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250731114334 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dictionaries DROP FOREIGN KEY `FK_4E1D094A727ACA70`');
        $this->addSql('DROP INDEX IDX_4E1D094A8CDE5729_9F75D7B0 ON dictionaries');
        $this->addSql('DROP INDEX IDX_4E1D094A8CDE5729 ON dictionaries');
        $this->addSql('ALTER TABLE dictionaries CHANGE is_active is_active TINYINT(1) NOT NULL, CHANGE sort_order sort_order INT NOT NULL, CHANGE is_system is_system TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE dictionaries ADD CONSTRAINT FK_9FC78498727ACA70 FOREIGN KEY (parent_id) REFERENCES dictionaries (id)');
        $this->addSql('ALTER TABLE dictionaries RENAME INDEX idx_4e1d094a727aca70 TO IDX_9FC78498727ACA70');
        $this->addSql('ALTER TABLE equipment CHANGE description description LONGTEXT DEFAULT NULL, CHANGE status status VARCHAR(50) NOT NULL, CHANGE notes notes LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D58312469DE2 FOREIGN KEY (category_id) REFERENCES equipment_categories (id)');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D583F4BD7827 FOREIGN KEY (assigned_to_id) REFERENCES `users` (id)');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D583B03A8386 FOREIGN KEY (created_by_id) REFERENCES `users` (id)');
        $this->addSql('ALTER TABLE equipment ADD CONSTRAINT FK_D338D583896DBBDE FOREIGN KEY (updated_by_id) REFERENCES `users` (id)');
        $this->addSql('ALTER TABLE equipment RENAME INDEX uniq_equipment_inventory_number TO UNIQ_D338D583964C83FF');
        $this->addSql('ALTER TABLE equipment RENAME INDEX idx_equipment_category TO IDX_D338D58312469DE2');
        $this->addSql('ALTER TABLE equipment RENAME INDEX idx_equipment_assigned_to TO IDX_D338D583F4BD7827');
        $this->addSql('ALTER TABLE equipment RENAME INDEX idx_equipment_created_by TO IDX_D338D583B03A8386');
        $this->addSql('ALTER TABLE equipment RENAME INDEX idx_equipment_updated_by TO IDX_D338D583896DBBDE');
        $this->addSql('ALTER TABLE equipment_attachment CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipment_attachment ADD CONSTRAINT FK_50542D65517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id)');
        $this->addSql('ALTER TABLE equipment_attachment ADD CONSTRAINT FK_50542D65A2B28FE8 FOREIGN KEY (uploaded_by_id) REFERENCES `users` (id)');
        $this->addSql('ALTER TABLE equipment_attachment RENAME INDEX idx_equipment_attachment_equipment TO IDX_50542D65517FE9FE');
        $this->addSql('ALTER TABLE equipment_attachment RENAME INDEX idx_equipment_attachment_uploaded_by TO IDX_50542D65A2B28FE8');
        $this->addSql('DROP INDEX UNIQ_equipment_categories_name ON equipment_categories');
        $this->addSql('ALTER TABLE equipment_categories CHANGE description description LONGTEXT DEFAULT NULL, CHANGE sort_order sort_order INT NOT NULL, CHANGE is_active is_active TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE equipment_log CHANGE description description LONGTEXT NOT NULL');
        $this->addSql('ALTER TABLE equipment_log ADD CONSTRAINT FK_BEBFA0A4517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id)');
        $this->addSql('ALTER TABLE equipment_log ADD CONSTRAINT FK_BEBFA0A4EB26760A FOREIGN KEY (previous_assignee_id) REFERENCES `users` (id)');
        $this->addSql('ALTER TABLE equipment_log ADD CONSTRAINT FK_BEBFA0A4CBE3CC18 FOREIGN KEY (new_assignee_id) REFERENCES `users` (id)');
        $this->addSql('ALTER TABLE equipment_log ADD CONSTRAINT FK_BEBFA0A4B03A8386 FOREIGN KEY (created_by_id) REFERENCES `users` (id)');
        $this->addSql('CREATE INDEX IDX_BEBFA0A4EB26760A ON equipment_log (previous_assignee_id)');
        $this->addSql('CREATE INDEX IDX_BEBFA0A4CBE3CC18 ON equipment_log (new_assignee_id)');
        $this->addSql('ALTER TABLE equipment_log RENAME INDEX idx_equipment_log_equipment TO IDX_BEBFA0A4517FE9FE');
        $this->addSql('ALTER TABLE equipment_log RENAME INDEX idx_equipment_log_created_by TO IDX_BEBFA0A4B03A8386');
        $this->addSql('ALTER TABLE modules CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE modules RENAME INDEX uniq_modules_name TO UNIQ_2EB743D75E237E06');
        $this->addSql('ALTER TABLE roles CHANGE description description LONGTEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE roles ADD CONSTRAINT FK_B63E2EC7AFC2B591 FOREIGN KEY (module_id) REFERENCES `modules` (id)');
        $this->addSql('ALTER TABLE roles RENAME INDEX idx_roles_module TO IDX_B63E2EC7AFC2B591');
        $this->addSql('ALTER TABLE settings CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE settings RENAME INDEX uniq_e545a0c5cc0f3c3c TO UNIQ_E545A0C55FA1E697');
        $this->addSql('ALTER TABLE user_roles ADD CONSTRAINT FK_54FCD59FA76ED395 FOREIGN KEY (user_id) REFERENCES `users` (id)');
        $this->addSql('ALTER TABLE user_roles ADD CONSTRAINT FK_54FCD59FD60322AC FOREIGN KEY (role_id) REFERENCES `roles` (id)');
        $this->addSql('ALTER TABLE user_roles ADD CONSTRAINT FK_54FCD59F6E6F1246 FOREIGN KEY (assigned_by_id) REFERENCES `users` (id)');
        $this->addSql('ALTER TABLE user_roles RENAME INDEX idx_user_roles_user TO IDX_54FCD59FA76ED395');
        $this->addSql('ALTER TABLE user_roles RENAME INDEX idx_user_roles_role TO IDX_54FCD59FD60322AC');
        $this->addSql('ALTER TABLE user_roles RENAME INDEX idx_user_roles_assigned_by TO IDX_54FCD59F6E6F1246');
        $this->addSql('ALTER TABLE users RENAME INDEX uniq_users_username TO UNIQ_1483A5E9F85E0677');
        $this->addSql('ALTER TABLE users RENAME INDEX uniq_users_email TO UNIQ_1483A5E9E7927C74');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE dictionaries DROP FOREIGN KEY FK_9FC78498727ACA70');
        $this->addSql('ALTER TABLE dictionaries CHANGE is_active is_active TINYINT(1) DEFAULT 1 NOT NULL, CHANGE sort_order sort_order INT DEFAULT 0 NOT NULL, CHANGE is_system is_system TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE dictionaries ADD CONSTRAINT `FK_4E1D094A727ACA70` FOREIGN KEY (parent_id) REFERENCES dictionaries (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_4E1D094A8CDE5729_9F75D7B0 ON dictionaries (type, is_active)');
        $this->addSql('CREATE INDEX IDX_4E1D094A8CDE5729 ON dictionaries (type)');
        $this->addSql('ALTER TABLE dictionaries RENAME INDEX idx_9fc78498727aca70 TO IDX_4E1D094A727ACA70');
        $this->addSql('ALTER TABLE equipment DROP FOREIGN KEY FK_D338D58312469DE2');
        $this->addSql('ALTER TABLE equipment DROP FOREIGN KEY FK_D338D583F4BD7827');
        $this->addSql('ALTER TABLE equipment DROP FOREIGN KEY FK_D338D583B03A8386');
        $this->addSql('ALTER TABLE equipment DROP FOREIGN KEY FK_D338D583896DBBDE');
        $this->addSql('ALTER TABLE equipment CHANGE description description TEXT DEFAULT NULL, CHANGE status status VARCHAR(50) DEFAULT \'available\' NOT NULL, CHANGE notes notes TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipment RENAME INDEX idx_d338d583f4bd7827 TO IDX_equipment_assigned_to');
        $this->addSql('ALTER TABLE equipment RENAME INDEX idx_d338d58312469de2 TO IDX_equipment_category');
        $this->addSql('ALTER TABLE equipment RENAME INDEX uniq_d338d583964c83ff TO UNIQ_equipment_inventory_number');
        $this->addSql('ALTER TABLE equipment RENAME INDEX idx_d338d583b03a8386 TO IDX_equipment_created_by');
        $this->addSql('ALTER TABLE equipment RENAME INDEX idx_d338d583896dbbde TO IDX_equipment_updated_by');
        $this->addSql('ALTER TABLE equipment_attachment DROP FOREIGN KEY FK_50542D65517FE9FE');
        $this->addSql('ALTER TABLE equipment_attachment DROP FOREIGN KEY FK_50542D65A2B28FE8');
        $this->addSql('ALTER TABLE equipment_attachment CHANGE description description TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipment_attachment RENAME INDEX idx_50542d65517fe9fe TO IDX_equipment_attachment_equipment');
        $this->addSql('ALTER TABLE equipment_attachment RENAME INDEX idx_50542d65a2b28fe8 TO IDX_equipment_attachment_uploaded_by');
        $this->addSql('ALTER TABLE equipment_categories CHANGE description description TEXT DEFAULT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT 1 NOT NULL, CHANGE sort_order sort_order INT DEFAULT 0 NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_equipment_categories_name ON equipment_categories (name)');
        $this->addSql('ALTER TABLE equipment_log DROP FOREIGN KEY FK_BEBFA0A4517FE9FE');
        $this->addSql('ALTER TABLE equipment_log DROP FOREIGN KEY FK_BEBFA0A4EB26760A');
        $this->addSql('ALTER TABLE equipment_log DROP FOREIGN KEY FK_BEBFA0A4CBE3CC18');
        $this->addSql('ALTER TABLE equipment_log DROP FOREIGN KEY FK_BEBFA0A4B03A8386');
        $this->addSql('DROP INDEX IDX_BEBFA0A4EB26760A ON equipment_log');
        $this->addSql('DROP INDEX IDX_BEBFA0A4CBE3CC18 ON equipment_log');
        $this->addSql('ALTER TABLE equipment_log CHANGE description description TEXT NOT NULL');
        $this->addSql('ALTER TABLE equipment_log RENAME INDEX idx_bebfa0a4517fe9fe TO IDX_equipment_log_equipment');
        $this->addSql('ALTER TABLE equipment_log RENAME INDEX idx_bebfa0a4b03a8386 TO IDX_equipment_log_created_by');
        $this->addSql('ALTER TABLE `modules` CHANGE description description TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE `modules` RENAME INDEX uniq_2eb743d75e237e06 TO UNIQ_modules_name');
        $this->addSql('ALTER TABLE `roles` DROP FOREIGN KEY FK_B63E2EC7AFC2B591');
        $this->addSql('ALTER TABLE `roles` CHANGE description description TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE `roles` RENAME INDEX idx_b63e2ec7afc2b591 TO IDX_roles_module');
        $this->addSql('ALTER TABLE settings CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE settings RENAME INDEX uniq_e545a0c55fa1e697 TO UNIQ_E545A0C5CC0F3C3C');
        $this->addSql('ALTER TABLE `user_roles` DROP FOREIGN KEY FK_54FCD59FA76ED395');
        $this->addSql('ALTER TABLE `user_roles` DROP FOREIGN KEY FK_54FCD59FD60322AC');
        $this->addSql('ALTER TABLE `user_roles` DROP FOREIGN KEY FK_54FCD59F6E6F1246');
        $this->addSql('ALTER TABLE `user_roles` RENAME INDEX idx_54fcd59f6e6f1246 TO IDX_user_roles_assigned_by');
        $this->addSql('ALTER TABLE `user_roles` RENAME INDEX idx_54fcd59fd60322ac TO IDX_user_roles_role');
        $this->addSql('ALTER TABLE `user_roles` RENAME INDEX idx_54fcd59fa76ed395 TO IDX_user_roles_user');
        $this->addSql('ALTER TABLE `users` RENAME INDEX uniq_1483a5e9e7927c74 TO UNIQ_users_email');
        $this->addSql('ALTER TABLE `users` RENAME INDEX uniq_1483a5e9f85e0677 TO UNIQ_users_username');
    }
}
