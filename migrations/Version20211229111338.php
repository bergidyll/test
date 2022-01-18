<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211229111338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mitglieder ADD parzellen_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mitglieder ADD CONSTRAINT FK_5FEB0C6AE1F431CD FOREIGN KEY (parzellen_id) REFERENCES parzellen (id)');
        $this->addSql('CREATE INDEX IDX_5FEB0C6AE1F431CD ON mitglieder (parzellen_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mitglieder DROP FOREIGN KEY FK_5FEB0C6AE1F431CD');
        $this->addSql('DROP INDEX IDX_5FEB0C6AE1F431CD ON mitglieder');
        $this->addSql('ALTER TABLE mitglieder DROP parzellen_id');
    }
}
