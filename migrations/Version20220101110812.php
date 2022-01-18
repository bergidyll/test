<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220101110812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mitglieder DROP FOREIGN KEY FK_5FEB0C6AC369895F');
        $this->addSql('DROP INDEX IDX_5FEB0C6AC369895F ON mitglieder');
        $this->addSql('ALTER TABLE mitglieder DROP rechnungen_id');
        $this->addSql('ALTER TABLE rechnungen ADD empfaenger_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rechnungen ADD CONSTRAINT FK_C6D2D35F9C01DB87 FOREIGN KEY (empfaenger_id) REFERENCES mitglieder (id)');
        $this->addSql('CREATE INDEX IDX_C6D2D35F9C01DB87 ON rechnungen (empfaenger_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mitglieder ADD rechnungen_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE mitglieder ADD CONSTRAINT FK_5FEB0C6AC369895F FOREIGN KEY (rechnungen_id) REFERENCES rechnungen (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_5FEB0C6AC369895F ON mitglieder (rechnungen_id)');
        $this->addSql('ALTER TABLE rechnungen DROP FOREIGN KEY FK_C6D2D35F9C01DB87');
        $this->addSql('DROP INDEX IDX_C6D2D35F9C01DB87 ON rechnungen');
        $this->addSql('ALTER TABLE rechnungen DROP empfaenger_id');
    }
}
