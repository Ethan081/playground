<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190819142633 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE parc ADD surface_id INT NOT NULL');
        $this->addSql('ALTER TABLE parc ADD CONSTRAINT FK_CADCF501CA11F534 FOREIGN KEY (surface_id) REFERENCES surfaces (id)');
        $this->addSql('CREATE INDEX IDX_CADCF501CA11F534 ON parc (surface_id)');
        $this->addSql('ALTER TABLE surfaces ADD relation VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE parc DROP FOREIGN KEY FK_CADCF501CA11F534');
        $this->addSql('DROP INDEX IDX_CADCF501CA11F534 ON parc');
        $this->addSql('ALTER TABLE parc DROP surface_id');
        $this->addSql('ALTER TABLE surfaces DROP relation');
    }
}
