<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211229113419 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE parzellen DROP FOREIGN KEY FK_8CAC9842B8922D7');
        $this->addSql('DROP INDEX IDX_8CAC9842B8922D7 ON parzellen');
        $this->addSql('ALTER TABLE parzellen DROP gartennummer_id');
    }
}
