<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220106074342 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mitglieder ADD funktion VARCHAR(50) DEFAULT NULL, ADD beruf VARCHAR(255) DEFAULT NULL, ADD eintrittsdatum DATE DEFAULT NULL, ADD austrittsdatum DATE DEFAULT NULL, ADD notiz LONGTEXT DEFAULT NULL, ADD parkplatz TINYINT(1) DEFAULT NULL, ADD parkplatzanzahl VARCHAR(2) DEFAULT NULL, ADD kaution VARCHAR(10) DEFAULT NULL, ADD zeitungsbezug TINYINT(1) DEFAULT NULL, ADD zb_pflichtstunden TINYINT(1) DEFAULT NULL, ADD zb_zeitung TINYINT(1) DEFAULT NULL, ADD zb_mitgliedsbeitrag TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mitglieder DROP funktion, DROP beruf, DROP eintrittsdatum, DROP austrittsdatum, DROP notiz, DROP parkplatz, DROP parkplatzanzahl, DROP kaution, DROP zeitungsbezug, DROP zb_pflichtstunden, DROP zb_zeitung, DROP zb_mitgliedsbeitrag');
    }
}
