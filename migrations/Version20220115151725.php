<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220115151725 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE verein ADD gartenpacht NUMERIC(10, 2) DEFAULT NULL, ADD parkplatzpacht NUMERIC(10, 2) DEFAULT NULL, ADD beitraglandesverband NUMERIC(10, 2) DEFAULT NULL, ADD beitragbundesverband NUMERIC(10, 2) DEFAULT NULL, ADD beitragregionalverband NUMERIC(10, 2) DEFAULT NULL, ADD gesamtflaeche NUMERIC(30, 2) DEFAULT NULL, ADD pflichtstundenbetrag NUMERIC(10, 2) DEFAULT NULL, ADD kautionsbetrag NUMERIC(10, 2) DEFAULT NULL, ADD zeitungsbetrag NUMERIC(10, 2) DEFAULT NULL, ADD grundpreis_strom NUMERIC(10, 2) DEFAULT NULL, ADD grundpreis_wasser NUMERIC(10, 2) DEFAULT NULL, ADD fixkosten_strom NUMERIC(10, 2) DEFAULT NULL, ADD fixkosten_wasser NUMERIC(10, 2) DEFAULT NULL, ADD betrag_stromzaehlertausch NUMERIC(10, 2) DEFAULT NULL, ADD betrag_wasserzaehlertausch NUMERIC(10, 2) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE verein DROP gartenpacht, DROP parkplatzpacht, DROP beitraglandesverband, DROP beitragbundesverband, DROP beitragregionalverband, DROP gesamtflaeche, DROP pflichtstundenbetrag, DROP kautionsbetrag, DROP zeitungsbetrag, DROP grundpreis_strom, DROP grundpreis_wasser, DROP fixkosten_strom, DROP fixkosten_wasser, DROP betrag_stromzaehlertausch, DROP betrag_wasserzaehlertausch');
    }
}
