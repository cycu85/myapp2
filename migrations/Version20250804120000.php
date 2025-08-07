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
        $connection = $this->connection;
        $databaseName = $connection->getDatabase();
        
        // Check if columns already exist
        $branchExists = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'users' AND COLUMN_NAME = 'branch'",
            [$databaseName]
        );
        
        $supervisorExists = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'users' AND COLUMN_NAME = 'supervisor_id'",
            [$databaseName]
        );
        
        $statusExists = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'users' AND COLUMN_NAME = 'status'",
            [$databaseName]
        );
        
        // Add columns only if they don't exist
        if ($branchExists == 0) {
            $this->addSql('ALTER TABLE users ADD branch VARCHAR(100) DEFAULT NULL');
        }
        
        if ($supervisorExists == 0) {
            $this->addSql('ALTER TABLE users ADD supervisor_id INT DEFAULT NULL');
        }
        
        if ($statusExists == 0) {
            $this->addSql('ALTER TABLE users ADD status VARCHAR(50) DEFAULT NULL');
        }
        
        // Add foreign key constraint for supervisor_id only if column was added
        if ($supervisorExists == 0) {
            $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E919E9AC5F FOREIGN KEY (supervisor_id) REFERENCES users (id)');
            $this->addSql('CREATE INDEX IDX_1483A5E919E9AC5F ON users (supervisor_id)');
        }
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