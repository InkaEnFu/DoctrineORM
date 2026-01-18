<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260118175114 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE produkt (id INT AUTO_INCREMENT NOT NULL, nazev VARCHAR(120) NOT NULL, sku VARCHAR(64) NOT NULL, cena NUMERIC(10, 2) NOT NULL, pocet_kusu INT NOT NULL, aktivni TINYINT NOT NULL, vytvoreno DATETIME NOT NULL, UNIQUE INDEX UNIQ_1B938EA5F9038C4 (sku), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE sklad (id INT AUTO_INCREMENT NOT NULL, nazev VARCHAR(120) NOT NULL, adresa VARCHAR(255) NOT NULL, kapacita INT NOT NULL, klimatizovany TINYINT NOT NULL, teplota_c NUMERIC(6, 2) NOT NULL, posledni_inventura DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE produkt');
        $this->addSql('DROP TABLE sklad');
    }
}
