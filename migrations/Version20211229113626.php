<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211229113626 extends AbstractMigration
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
        $this->addSql('ALTER TABLE parzellen DROP FOREIGN KEY FK_8CAC984B52F825A');
        $this->addSql('DROP INDEX IDX_8CAC984B52F825A ON parzellen');
        $this->addSql('ALTER TABLE parzellen CHANGE mitglied_id gartennummer_id INT NOT NULL');
    }
}
