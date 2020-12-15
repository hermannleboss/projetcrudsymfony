<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201215164336 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE medecin (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL, specilisalite VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE patient (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, telephone VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE rendez_vous (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, medecin_id INTEGER DEFAULT NULL, patient_id INTEGER DEFAULT NULL, date_rv DATETIME DEFAULT NULL, details_rv CLOB DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_65E8AA0A4F31A84 ON rendez_vous (medecin_id)');
        $this->addSql('CREATE INDEX IDX_65E8AA0A6B899279 ON rendez_vous (patient_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE medecin');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE rendez_vous');
    }
}
