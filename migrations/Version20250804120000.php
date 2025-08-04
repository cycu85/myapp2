<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Add employee fields: branch, supervisor_id, status to users table
 */
final class Version20250804120000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add employee management fields: branch, supervisor_id, status to users table';
    }

    public function up(Schema $schema): void
    {
        // Add new employee fields to users table
        $this->addSql('ALTER TABLE users ADD branch VARCHAR(100) DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD supervisor_id INT DEFAULT NULL');  
        $this->addSql('ALTER TABLE users ADD status VARCHAR(50) DEFAULT NULL');
        
        // Add foreign key constraint for supervisor_id
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E919E9AC5F FOREIGN KEY (supervisor_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E919E9AC5F ON users (supervisor_id)');
    }

    public function down(Schema $schema): void
    {
        // Remove foreign key constraint and index first
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E919E9AC5F');
        $this->addSql('DROP INDEX IDX_1483A5E919E9AC5F ON users');
        
        // Remove the columns
        $this->addSql('ALTER TABLE users DROP branch');
        $this->addSql('ALTER TABLE users DROP supervisor_id');
        $this->addSql('ALTER TABLE users DROP status');
    }
}