<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220112144543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ablesung ADD wasserstand_alt NUMERIC(10, 2) DEFAULT NULL, ADD wasserstand NUMERIC(10, 2) DEFAULT NULL, ADD wasserzaehlernummer_alt VARCHAR(100) DEFAULT NULL, ADD wasserzaehlernummer VARCHAR(100) DEFAULT NULL, ADD wasserdiff NUMERIC(10, 2) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ablesung DROP wasserstand_alt, DROP wasserstand, DROP wasserzaehlernummer_alt, DROP wasserzaehlernummer, DROP wasserdiff');
    }
}
