<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220115154136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE verein ADD vers_1 VARCHAR(255) DEFAULT NULL, ADD vers_1_betrag NUMERIC(10, 2) DEFAULT NULL, ADD vers_2 VARCHAR(255) DEFAULT NULL, ADD vers_2_betrag NUMERIC(10, 2) DEFAULT NULL, ADD vers_3 VARCHAR(255) DEFAULT NULL, ADD vers_3_betrag NUMERIC(10, 2) DEFAULT NULL, ADD vers_4 VARCHAR(255) DEFAULT NULL, ADD vers_4_betrag NUMERIC(10, 2) DEFAULT NULL, ADD vers_5 VARCHAR(255) DEFAULT NULL, ADD vers_5_betrag NUMERIC(10, 2) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE verein DROP vers_1, DROP vers_1_betrag, DROP vers_2, DROP vers_2_betrag, DROP vers_3, DROP vers_3_betrag, DROP vers_4, DROP vers_4_betrag, DROP vers_5, DROP vers_5_betrag');
    }
}
