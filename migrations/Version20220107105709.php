<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220107105709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wasser ADD parzelle_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE wasser ADD CONSTRAINT FK_8A0B94AE27C7C766 FOREIGN KEY (parzelle_id) REFERENCES parzellen (id)');
        $this->addSql('CREATE INDEX IDX_8A0B94AE27C7C766 ON wasser (parzelle_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wasser DROP FOREIGN KEY FK_8A0B94AE27C7C766');
        $this->addSql('DROP INDEX IDX_8A0B94AE27C7C766 ON wasser');
        $this->addSql('ALTER TABLE wasser DROP parzelle_id');
    }
}
