<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220101111622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE rechnungen');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rechnungen (id INT AUTO_INCREMENT NOT NULL, empfaenger_id INT DEFAULT NULL, nummer VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, datum DATE DEFAULT NULL, INDEX IDX_C6D2D35F9C01DB87 (empfaenger_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE rechnungen ADD CONSTRAINT FK_C6D2D35F9C01DB87 FOREIGN KEY (empfaenger_id) REFERENCES mitglieder (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
