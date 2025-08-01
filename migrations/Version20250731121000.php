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
        // Apply settings table modifications that were originally in Version20250731114334
        $this->addSql('ALTER TABLE settings CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE settings RENAME INDEX uniq_e545a0c5cc0f3c3c TO UNIQ_E545A0C55FA1E697');
    }

    public function down(Schema $schema): void
    {
        // Revert settings table modifications
        $this->addSql('ALTER TABLE settings CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE settings RENAME INDEX uniq_e545a0c55fa1e697 TO UNIQ_E545A0C5CC0F3C3C');
    }
}