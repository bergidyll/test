<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220115160303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE verein ADD umlage_1 VARCHAR(255) DEFAULT NULL, ADD umlage_2 VARCHAR(255) DEFAULT NULL, ADD umlage_3 VARCHAR(255) DEFAULT NULL, ADD umlage_4 VARCHAR(255) DEFAULT NULL, ADD umlage_5 VARCHAR(255) DEFAULT NULL, ADD umlage_1_betrag NUMERIC(10, 2) DEFAULT NULL, ADD umlage_2_betrag NUMERIC(10, 2) DEFAULT NULL, ADD umlage_3_betrag NUMERIC(10, 2) DEFAULT NULL, ADD umlage_4_betrag NUMERIC(10, 2) DEFAULT NULL, ADD umlage_5_betrag NUMERIC(10, 2) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE verein DROP umlage_1, DROP umlage_2, DROP umlage_3, DROP umlage_4, DROP umlage_5, DROP umlage_1_betrag, DROP umlage_2_betrag, DROP umlage_3_betrag, DROP umlage_4_betrag, DROP umlage_5_betrag');
    }
}
