<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211229092240 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE verein (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, gruendungsdatum DATE DEFAULT NULL, anschrift VARCHAR(255) DEFAULT NULL, plz VARCHAR(255) DEFAULT NULL, ort VARCHAR(255) DEFAULT NULL, telefon VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, register VARCHAR(255) DEFAULT NULL, registernummer VARCHAR(255) DEFAULT NULL, registergericht VARCHAR(255) DEFAULT NULL, bank VARCHAR(255) DEFAULT NULL, iban VARCHAR(255) DEFAULT NULL, bic VARCHAR(255) DEFAULT NULL, steuernummer VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE verein');
    }
}
