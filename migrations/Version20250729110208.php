<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250729110208 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE "modules" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(50) NOT NULL, display_name VARCHAR(100) NOT NULL, description CLOB DEFAULT NULL, is_enabled BOOLEAN NOT NULL, required_permissions CLOB DEFAULT NULL, config CLOB DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2EB743D75E237E06 ON "modules" (name)');
        $this->addSql('CREATE TABLE "roles" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description CLOB DEFAULT NULL, permissions CLOB NOT NULL, is_system_role BOOLEAN NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, module_id INTEGER NOT NULL, CONSTRAINT FK_B63E2EC7AFC2B591 FOREIGN KEY (module_id) REFERENCES "modules" (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_B63E2EC7AFC2B591 ON "roles" (module_id)');
        $this->addSql('CREATE TABLE "user_roles" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, assigned_at DATETIME NOT NULL, is_active BOOLEAN NOT NULL, user_id INTEGER NOT NULL, role_id INTEGER NOT NULL, assigned_by_id INTEGER DEFAULT NULL, CONSTRAINT FK_54FCD59FA76ED395 FOREIGN KEY (user_id) REFERENCES "users" (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_54FCD59FD60322AC FOREIGN KEY (role_id) REFERENCES "roles" (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_54FCD59F6E6F1246 FOREIGN KEY (assigned_by_id) REFERENCES "users" (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_54FCD59FA76ED395 ON "user_roles" (user_id)');
        $this->addSql('CREATE INDEX IDX_54FCD59FD60322AC ON "user_roles" (role_id)');
        $this->addSql('CREATE INDEX IDX_54FCD59F6E6F1246 ON "user_roles" (assigned_by_id)');
        $this->addSql('CREATE TABLE "users" (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username VARCHAR(180) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, employee_number VARCHAR(50) DEFAULT NULL, position VARCHAR(100) DEFAULT NULL, department VARCHAR(100) DEFAULT NULL, phone_number VARCHAR(20) DEFAULT NULL, ldap_dn VARCHAR(500) DEFAULT NULL, is_active BOOLEAN NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9F85E0677 ON "users" (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON "users" (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE "modules"');
        $this->addSql('DROP TABLE "roles"');
        $this->addSql('DROP TABLE "user_roles"');
        $this->addSql('DROP TABLE "users"');
    }
}
