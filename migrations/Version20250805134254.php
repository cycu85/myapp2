<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250805134254 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Dodaj pole avatar i inne brakujące kolumny do tabeli users (sprawdza INFORMATION_SCHEMA)';
    }

    public function up(Schema $schema): void
    {
        $connection = $this->connection;
        $databaseName = $connection->getDatabase();
        
        // Sprawdź które kolumny nie istnieją i dodaj je
        $columnsToAdd = [];
        
        // Sprawdź kolumnę avatar
        $result = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'users' AND COLUMN_NAME = 'avatar'",
            [$databaseName]
        );
        if ($result == 0) {
            $columnsToAdd[] = 'ADD avatar VARCHAR(255) DEFAULT NULL';
        }
        
        // Sprawdź kolumnę branch
        $result = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'users' AND COLUMN_NAME = 'branch'",
            [$databaseName]
        );
        if ($result == 0) {
            $columnsToAdd[] = 'ADD branch VARCHAR(100) DEFAULT NULL';
        }
        
        // Sprawdź kolumnę status
        $result = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'users' AND COLUMN_NAME = 'status'",
            [$databaseName]
        );
        if ($result == 0) {
            $columnsToAdd[] = 'ADD status VARCHAR(50) DEFAULT NULL';
        }
        
        // Sprawdź kolumnę supervisor_id
        $result = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'users' AND COLUMN_NAME = 'supervisor_id'",
            [$databaseName]
        );
        if ($result == 0) {
            $columnsToAdd[] = 'ADD supervisor_id INT DEFAULT NULL';
        }
        
        // Dodaj kolumny jeśli są jakieś do dodania
        if (!empty($columnsToAdd)) {
            $this->addSql('ALTER TABLE users ' . implode(', ', $columnsToAdd));
        }
        
        // Sprawdź czy klucz obcy już istnieje
        $constraintExists = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'users' 
             AND CONSTRAINT_NAME = 'FK_1483A5E919E9AC5F'",
            [$databaseName]
        );
        
        if ($constraintExists == 0) {
            $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E919E9AC5F FOREIGN KEY (supervisor_id) REFERENCES `users` (id)');
        }
        
        // Sprawdź czy indeks już istnieje
        $indexExists = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.STATISTICS 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'users' 
             AND INDEX_NAME = 'IDX_1483A5E919E9AC5F'",
            [$databaseName]
        );
        
        if ($indexExists == 0) {
            $this->addSql('CREATE INDEX IDX_1483A5E919E9AC5F ON users (supervisor_id)');
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `users` DROP FOREIGN KEY FK_1483A5E919E9AC5F');
        $this->addSql('DROP INDEX IDX_1483A5E919E9AC5F ON `users`');
        $this->addSql('ALTER TABLE `users` DROP avatar, DROP branch, DROP status, DROP supervisor_id');
    }
}
