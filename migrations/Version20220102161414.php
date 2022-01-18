<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220102161414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rechnungen ADD mitglieder_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rechnungen ADD CONSTRAINT FK_C6D2D35FB86CFF65 FOREIGN KEY (mitglieder_id) REFERENCES mitglieder (id)');
        $this->addSql('CREATE INDEX IDX_C6D2D35FB86CFF65 ON rechnungen (mitglieder_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rechnungen DROP FOREIGN KEY FK_C6D2D35FB86CFF65');
        $this->addSql('DROP INDEX IDX_C6D2D35FB86CFF65 ON rechnungen');
        $this->addSql('ALTER TABLE rechnungen DROP mitglieder_id');
    }
}
