<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190819143804 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE parc_amenities (parc_id INT NOT NULL, amenities_id INT NOT NULL, INDEX IDX_AC90BB17812D24CA (parc_id), INDEX IDX_AC90BB17B92D5262 (amenities_id), PRIMARY KEY(parc_id, amenities_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parc_equipments (parc_id INT NOT NULL, equipments_id INT NOT NULL, INDEX IDX_2299A4F3812D24CA (parc_id), INDEX IDX_2299A4F3BD251DD7 (equipments_id), PRIMARY KEY(parc_id, equipments_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parc_accessibilities (parc_id INT NOT NULL, accessibilities_id INT NOT NULL, INDEX IDX_41EF2EC4812D24CA (parc_id), INDEX IDX_41EF2EC4DC3B2782 (accessibilities_id), PRIMARY KEY(parc_id, accessibilities_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parc_age_suitability (parc_id INT NOT NULL, age_suitability_id INT NOT NULL, INDEX IDX_9E3672E5812D24CA (parc_id), INDEX IDX_9E3672E5CB573A2 (age_suitability_id), PRIMARY KEY(parc_id, age_suitability_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parc_user (parc_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_E9E89AE7812D24CA (parc_id), INDEX IDX_E9E89AE7A76ED395 (user_id), PRIMARY KEY(parc_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE parc_amenities ADD CONSTRAINT FK_AC90BB17812D24CA FOREIGN KEY (parc_id) REFERENCES parc (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parc_amenities ADD CONSTRAINT FK_AC90BB17B92D5262 FOREIGN KEY (amenities_id) REFERENCES amenities (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parc_equipments ADD CONSTRAINT FK_2299A4F3812D24CA FOREIGN KEY (parc_id) REFERENCES parc (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parc_equipments ADD CONSTRAINT FK_2299A4F3BD251DD7 FOREIGN KEY (equipments_id) REFERENCES equipments (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parc_accessibilities ADD CONSTRAINT FK_41EF2EC4812D24CA FOREIGN KEY (parc_id) REFERENCES parc (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parc_accessibilities ADD CONSTRAINT FK_41EF2EC4DC3B2782 FOREIGN KEY (accessibilities_id) REFERENCES accessibilities (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parc_age_suitability ADD CONSTRAINT FK_9E3672E5812D24CA FOREIGN KEY (parc_id) REFERENCES parc (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parc_age_suitability ADD CONSTRAINT FK_9E3672E5CB573A2 FOREIGN KEY (age_suitability_id) REFERENCES age_suitability (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parc_user ADD CONSTRAINT FK_E9E89AE7812D24CA FOREIGN KEY (parc_id) REFERENCES parc (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE parc_user ADD CONSTRAINT FK_E9E89AE7A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE parc_amenities');
        $this->addSql('DROP TABLE parc_equipments');
        $this->addSql('DROP TABLE parc_accessibilities');
        $this->addSql('DROP TABLE parc_age_suitability');
        $this->addSql('DROP TABLE parc_user');
    }
}
