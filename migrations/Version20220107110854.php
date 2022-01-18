<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220107110854 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ablesung (id INT AUTO_INCREMENT NOT NULL, parzelle_id INT DEFAULT NULL, jahr DATE DEFAULT NULL, stromzaehlernummer VARCHAR(100) DEFAULT NULL, stromzaehlerstand NUMERIC(10, 2) DEFAULT NULL, INDEX IDX_48B6028727C7C766 (parzelle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ablesung ADD CONSTRAINT FK_48B6028727C7C766 FOREIGN KEY (parzelle_id) REFERENCES parzellen (id)');
        $this->addSql('DROP TABLE wasser');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE wasser (id INT AUTO_INCREMENT NOT NULL, parzelle_id INT DEFAULT NULL, jahr DATE DEFAULT NULL, zaehlernummer VARCHAR(100) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, zaehlerstand NUMERIC(10, 2) DEFAULT NULL, INDEX IDX_8A0B94AE27C7C766 (parzelle_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE wasser ADD CONSTRAINT FK_8A0B94AE27C7C766 FOREIGN KEY (parzelle_id) REFERENCES parzellen (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE ablesung');
    }
}
