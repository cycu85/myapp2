<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Settings table modifications - moved from Version20250731114334 to fix dependency issues
 */
final class Version20250731121000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Apply settings table modifications after table creation';
    }

    public function up(Schema $schema): void
    {
        // Check if settings table exists before modifying it
        $connection = $this->connection;
        $databaseName = $connection->getDatabase();
        
        // Check if table exists
        $tableExists = $connection->fetchOne(
            "SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES 
             WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'settings'",
            [$databaseName]
        );
        
        if ($tableExists > 0) {
            // Check if old index exists before renaming
            $oldIndexExists = $connection->fetchOne(
                "SELECT COUNT(*) FROM INFORMATION_SCHEMA.STATISTICS 
                 WHERE TABLE_SCHEMA = ? AND TABLE_NAME = 'settings' AND INDEX_NAME = 'uniq_e545a0c5cc0f3c3c'",
                [$databaseName]
            );
            
            // Apply settings table modifications only if table exists
            $this->addSql('ALTER TABLE settings CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL');
            
            // Rename index only if old index exists
            if ($oldIndexExists > 0) {
                $this->addSql('ALTER TABLE settings RENAME INDEX uniq_e545a0c5cc0f3c3c TO UNIQ_E545A0C55FA1E697');
            }
        }
    }

    public function down(Schema $schema): void
    {
        // Revert settings table modifications
        $this->addSql('ALTER TABLE settings CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE settings RENAME INDEX uniq_e545a0c55fa1e697 TO UNIQ_E545A0C5CC0F3C3C');
    }
}