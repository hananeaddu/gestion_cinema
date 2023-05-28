<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230528093024 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE film ADD image VARCHAR(255) NOT NULL, DROP annee, CHANGE nom_film nom_film VARCHAR(100) NOT NULL, CHANGE realisateur realisateur VARCHAR(255) NOT NULL, CHANGE categorie categorie VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE film ADD annee INT NOT NULL, DROP image, CHANGE nom_film nom_film VARCHAR(60) NOT NULL, CHANGE categorie categorie VARCHAR(80) NOT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE realisateur realisateur VARCHAR(60) NOT NULL');
    }
}
