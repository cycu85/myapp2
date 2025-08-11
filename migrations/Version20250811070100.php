<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Dodanie pola inspection_report_file do tabeli tool_inspections
 * i nowego statusu 'under_inspection' do tabeli tools
 */
final class Version20250811070100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Dodanie pola dla pliku przeglądu i nowego statusu narzędzi';
    }

    public function up(Schema $schema): void
    {
        // Dodanie pola dla pliku przeglądu
        $this->addSql('ALTER TABLE tool_inspections ADD inspection_report_file VARCHAR(255) DEFAULT NULL');
        
        // Rozszerzenie ENUM o nowy status 'under_inspection'
        $this->addSql('ALTER TABLE tools MODIFY status VARCHAR(50) DEFAULT \'active\'');
    }

    public function down(Schema $schema): void
    {
        // Usunięcie pola dla pliku przeglądu
        $this->addSql('ALTER TABLE tool_inspections DROP COLUMN inspection_report_file');
        
        // Przywrócenie oryginalnego ENUM (bez under_inspection)
        $this->addSql('ALTER TABLE tools MODIFY status VARCHAR(50) DEFAULT \'active\'');
    }
}