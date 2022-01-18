<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220104071156 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pflichtstunden ADD mitglieder_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pflichtstunden ADD CONSTRAINT FK_3CD49F3FB86CFF65 FOREIGN KEY (mitglieder_id) REFERENCES mitglieder (id)');
        $this->addSql('CREATE INDEX IDX_3CD49F3FB86CFF65 ON pflichtstunden (mitglieder_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pflichtstunden DROP FOREIGN KEY FK_3CD49F3FB86CFF65');
        $this->addSql('DROP INDEX IDX_3CD49F3FB86CFF65 ON pflichtstunden');
        $this->addSql('ALTER TABLE pflichtstunden DROP mitglieder_id');
    }
}
