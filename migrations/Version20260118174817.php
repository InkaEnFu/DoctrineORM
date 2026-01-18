<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260118174817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pobocka (id INT AUTO_INCREMENT NOT NULL, cislo_popisne INT NOT NULL, ulice VARCHAR(255) NOT NULL, mesto VARCHAR(255) NOT NULL, kod_zeme VARCHAR(2) NOT NULL, jmeno_vedouciho VARCHAR(255) DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE TABLE zamestnanec (id INT AUTO_INCREMENT NOT NULL, jmeno VARCHAR(255) NOT NULL, pobocka_id INT NOT NULL, INDEX IDX_1ADB89F83318FBD (pobocka_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE zamestnanec ADD CONSTRAINT FK_1ADB89F83318FBD FOREIGN KEY (pobocka_id) REFERENCES pobocka (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE zamestnanec DROP FOREIGN KEY FK_1ADB89F83318FBD');
        $this->addSql('DROP TABLE pobocka');
        $this->addSql('DROP TABLE zamestnanec');
    }
}
