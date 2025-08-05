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
        return 'Dodaj pole avatar i inne brakujące kolumny do tabeli users (tylko jeśli nie istnieją)';
    }

    public function up(Schema $schema): void
    {
        // Dodaj kolumny tylko jeśli nie istnieją
        $this->addSql('ALTER TABLE users 
            ADD COLUMN IF NOT EXISTS avatar VARCHAR(255) DEFAULT NULL,
            ADD COLUMN IF NOT EXISTS branch VARCHAR(100) DEFAULT NULL, 
            ADD COLUMN IF NOT EXISTS status VARCHAR(50) DEFAULT NULL, 
            ADD COLUMN IF NOT EXISTS supervisor_id INT DEFAULT NULL');
        
        // Dodaj klucz obcy tylko jeśli nie istnieje
        $this->addSql('ALTER TABLE users 
            ADD CONSTRAINT IF NOT EXISTS FK_1483A5E919E9AC5F 
            FOREIGN KEY (supervisor_id) REFERENCES `users` (id)');
        
        // Dodaj indeks tylko jeśli nie istnieje  
        $this->addSql('CREATE INDEX IF NOT EXISTS IDX_1483A5E919E9AC5F ON users (supervisor_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `users` DROP FOREIGN KEY FK_1483A5E919E9AC5F');
        $this->addSql('DROP INDEX IDX_1483A5E919E9AC5F ON `users`');
        $this->addSql('ALTER TABLE `users` DROP avatar, DROP branch, DROP status, DROP supervisor_id');
    }
}
