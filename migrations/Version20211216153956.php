<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211216153956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contract_type (id INT AUTO_INCREMENT NOT NULL, `label` VARCHAR(32) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cv (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, title VARCHAR(50) NOT NULL, INDEX IDX_B66FFE92A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cv_contract (id INT AUTO_INCREMENT NOT NULL, id_cv_id INT DEFAULT NULL, id_contract_id INT DEFAULT NULL, INDEX IDX_78A0CD9D216158D2 (id_cv_id), INDEX IDX_78A0CD9D3D642D0A (id_contract_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cv_hobby (id INT AUTO_INCREMENT NOT NULL, id_cv_id INT DEFAULT NULL, id_hobby_id INT DEFAULT NULL, INDEX IDX_B6602328216158D2 (id_cv_id), INDEX IDX_B660232862F0CDB6 (id_hobby_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cv_skills (id INT AUTO_INCREMENT NOT NULL, id_cv_id INT DEFAULT NULL, id_skills_id INT DEFAULT NULL, INDEX IDX_58B61F55216158D2 (id_cv_id), INDEX IDX_58B61F55FFC3A47F (id_skills_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE degree (id INT AUTO_INCREMENT NOT NULL, type_degrees_id INT DEFAULT NULL, obtained_year DATE NOT NULL, isvalid TINYINT(1) NOT NULL, INDEX IDX_A7A36D6378C9C396 (type_degrees_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE establishement_degree (id INT AUTO_INCREMENT NOT NULL, id_degree_id INT DEFAULT NULL, id_establishement_id INT DEFAULT NULL, INDEX IDX_FA6A25663369EB71 (id_degree_id), INDEX IDX_FA6A25663768F083 (id_establishement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE establishment (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, city VARCHAR(64) NOT NULL, isvalid TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experience (id INT AUTO_INCREMENT NOT NULL, cv_id_id INT DEFAULT NULL, title VARCHAR(50) NOT NULL, address VARCHAR(255) NOT NULL, postal INT NOT NULL, city VARCHAR(50) NOT NULL, company VARCHAR(50) NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, INDEX IDX_590C103F0404E48 (cv_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hobby (id INT AUTO_INCREMENT NOT NULL, `label` VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE language (id INT AUTO_INCREMENT NOT NULL, language VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE licence (id INT AUTO_INCREMENT NOT NULL, `label` VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medal (id INT AUTO_INCREMENT NOT NULL, `label` VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE other_info (id INT AUTO_INCREMENT NOT NULL, id_cv_id INT DEFAULT NULL, title VARCHAR(64) NOT NULL, content LONGTEXT NOT NULL, imgpath VARCHAR(255) DEFAULT NULL, INDEX IDX_A2CD6785216158D2 (id_cv_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skills (id INT AUTO_INCREMENT NOT NULL, `label` VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE speak (id INT AUTO_INCREMENT NOT NULL, id_cv_id INT DEFAULT NULL, id_language_id INT DEFAULT NULL, id_speak_level_id INT DEFAULT NULL, INDEX IDX_FBF52663216158D2 (id_cv_id), INDEX IDX_FBF526639AE37703 (id_language_id), INDEX IDX_FBF526635FF399D5 (id_speak_level_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE speak_level (id INT AUTO_INCREMENT NOT NULL, level VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE to_get (id INT AUTO_INCREMENT NOT NULL, id_cv_id INT DEFAULT NULL, id_degree_id INT DEFAULT NULL, INDEX IDX_AB07E67E216158D2 (id_cv_id), INDEX IDX_AB07E67E3369EB71 (id_degree_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_degrees (id INT AUTO_INCREMENT NOT NULL, `label` VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, fname VARCHAR(32) NOT NULL, name VARCHAR(32) NOT NULL, address VARCHAR(255) NOT NULL, postal INT NOT NULL, city VARCHAR(255) NOT NULL, birth DATE NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_hobby (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_hobby_id INT DEFAULT NULL, INDEX IDX_DBA6086F79F37AE5 (id_user_id), INDEX IDX_DBA6086F62F0CDB6 (id_hobby_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_licence (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_licence_id INT DEFAULT NULL, INDEX IDX_45A7F84279F37AE5 (id_user_id), INDEX IDX_45A7F8428365871E (id_licence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_medal (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_medal_id INT DEFAULT NULL, obtained_date DATE NOT NULL, INDEX IDX_3E86ACE179F37AE5 (id_user_id), INDEX IDX_3E86ACE1785EA2FC (id_medal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_skills (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, id_skills_id INT DEFAULT NULL, INDEX IDX_B0630D4D79F37AE5 (id_user_id), INDEX IDX_B0630D4DFFC3A47F (id_skills_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cv ADD CONSTRAINT FK_B66FFE92A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE cv_contract ADD CONSTRAINT FK_78A0CD9D216158D2 FOREIGN KEY (id_cv_id) REFERENCES cv (id)');
        $this->addSql('ALTER TABLE cv_contract ADD CONSTRAINT FK_78A0CD9D3D642D0A FOREIGN KEY (id_contract_id) REFERENCES contract_type (id)');
        $this->addSql('ALTER TABLE cv_hobby ADD CONSTRAINT FK_B6602328216158D2 FOREIGN KEY (id_cv_id) REFERENCES cv (id)');
        $this->addSql('ALTER TABLE cv_hobby ADD CONSTRAINT FK_B660232862F0CDB6 FOREIGN KEY (id_hobby_id) REFERENCES hobby (id)');
        $this->addSql('ALTER TABLE cv_skills ADD CONSTRAINT FK_58B61F55216158D2 FOREIGN KEY (id_cv_id) REFERENCES cv (id)');
        $this->addSql('ALTER TABLE cv_skills ADD CONSTRAINT FK_58B61F55FFC3A47F FOREIGN KEY (id_skills_id) REFERENCES skills (id)');
        $this->addSql('ALTER TABLE degree ADD CONSTRAINT FK_A7A36D6378C9C396 FOREIGN KEY (type_degrees_id) REFERENCES type_degrees (id)');
        $this->addSql('ALTER TABLE establishement_degree ADD CONSTRAINT FK_FA6A25663369EB71 FOREIGN KEY (id_degree_id) REFERENCES degree (id)');
        $this->addSql('ALTER TABLE establishement_degree ADD CONSTRAINT FK_FA6A25663768F083 FOREIGN KEY (id_establishement_id) REFERENCES establishment (id)');
        $this->addSql('ALTER TABLE experience ADD CONSTRAINT FK_590C103F0404E48 FOREIGN KEY (cv_id_id) REFERENCES cv (id)');
        $this->addSql('ALTER TABLE other_info ADD CONSTRAINT FK_A2CD6785216158D2 FOREIGN KEY (id_cv_id) REFERENCES cv (id)');
        $this->addSql('ALTER TABLE speak ADD CONSTRAINT FK_FBF52663216158D2 FOREIGN KEY (id_cv_id) REFERENCES cv (id)');
        $this->addSql('ALTER TABLE speak ADD CONSTRAINT FK_FBF526639AE37703 FOREIGN KEY (id_language_id) REFERENCES language (id)');
        $this->addSql('ALTER TABLE speak ADD CONSTRAINT FK_FBF526635FF399D5 FOREIGN KEY (id_speak_level_id) REFERENCES speak_level (id)');
        $this->addSql('ALTER TABLE to_get ADD CONSTRAINT FK_AB07E67E216158D2 FOREIGN KEY (id_cv_id) REFERENCES cv (id)');
        $this->addSql('ALTER TABLE to_get ADD CONSTRAINT FK_AB07E67E3369EB71 FOREIGN KEY (id_degree_id) REFERENCES degree (id)');
        $this->addSql('ALTER TABLE user_hobby ADD CONSTRAINT FK_DBA6086F79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_hobby ADD CONSTRAINT FK_DBA6086F62F0CDB6 FOREIGN KEY (id_hobby_id) REFERENCES hobby (id)');
        $this->addSql('ALTER TABLE user_licence ADD CONSTRAINT FK_45A7F84279F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_licence ADD CONSTRAINT FK_45A7F8428365871E FOREIGN KEY (id_licence_id) REFERENCES licence (id)');
        $this->addSql('ALTER TABLE user_medal ADD CONSTRAINT FK_3E86ACE179F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_medal ADD CONSTRAINT FK_3E86ACE1785EA2FC FOREIGN KEY (id_medal_id) REFERENCES medal (id)');
        $this->addSql('ALTER TABLE user_skills ADD CONSTRAINT FK_B0630D4D79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_skills ADD CONSTRAINT FK_B0630D4DFFC3A47F FOREIGN KEY (id_skills_id) REFERENCES skills (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cv_contract DROP FOREIGN KEY FK_78A0CD9D3D642D0A');
        $this->addSql('ALTER TABLE cv_contract DROP FOREIGN KEY FK_78A0CD9D216158D2');
        $this->addSql('ALTER TABLE cv_hobby DROP FOREIGN KEY FK_B6602328216158D2');
        $this->addSql('ALTER TABLE cv_skills DROP FOREIGN KEY FK_58B61F55216158D2');
        $this->addSql('ALTER TABLE experience DROP FOREIGN KEY FK_590C103F0404E48');
        $this->addSql('ALTER TABLE other_info DROP FOREIGN KEY FK_A2CD6785216158D2');
        $this->addSql('ALTER TABLE speak DROP FOREIGN KEY FK_FBF52663216158D2');
        $this->addSql('ALTER TABLE to_get DROP FOREIGN KEY FK_AB07E67E216158D2');
        $this->addSql('ALTER TABLE establishement_degree DROP FOREIGN KEY FK_FA6A25663369EB71');
        $this->addSql('ALTER TABLE to_get DROP FOREIGN KEY FK_AB07E67E3369EB71');
        $this->addSql('ALTER TABLE establishement_degree DROP FOREIGN KEY FK_FA6A25663768F083');
        $this->addSql('ALTER TABLE cv_hobby DROP FOREIGN KEY FK_B660232862F0CDB6');
        $this->addSql('ALTER TABLE user_hobby DROP FOREIGN KEY FK_DBA6086F62F0CDB6');
        $this->addSql('ALTER TABLE speak DROP FOREIGN KEY FK_FBF526639AE37703');
        $this->addSql('ALTER TABLE user_licence DROP FOREIGN KEY FK_45A7F8428365871E');
        $this->addSql('ALTER TABLE user_medal DROP FOREIGN KEY FK_3E86ACE1785EA2FC');
        $this->addSql('ALTER TABLE cv_skills DROP FOREIGN KEY FK_58B61F55FFC3A47F');
        $this->addSql('ALTER TABLE user_skills DROP FOREIGN KEY FK_B0630D4DFFC3A47F');
        $this->addSql('ALTER TABLE speak DROP FOREIGN KEY FK_FBF526635FF399D5');
        $this->addSql('ALTER TABLE degree DROP FOREIGN KEY FK_A7A36D6378C9C396');
        $this->addSql('ALTER TABLE cv DROP FOREIGN KEY FK_B66FFE92A76ED395');
        $this->addSql('ALTER TABLE user_hobby DROP FOREIGN KEY FK_DBA6086F79F37AE5');
        $this->addSql('ALTER TABLE user_licence DROP FOREIGN KEY FK_45A7F84279F37AE5');
        $this->addSql('ALTER TABLE user_medal DROP FOREIGN KEY FK_3E86ACE179F37AE5');
        $this->addSql('ALTER TABLE user_skills DROP FOREIGN KEY FK_B0630D4D79F37AE5');
        $this->addSql('DROP TABLE contract_type');
        $this->addSql('DROP TABLE cv');
        $this->addSql('DROP TABLE cv_contract');
        $this->addSql('DROP TABLE cv_hobby');
        $this->addSql('DROP TABLE cv_skills');
        $this->addSql('DROP TABLE degree');
        $this->addSql('DROP TABLE establishement_degree');
        $this->addSql('DROP TABLE establishment');
        $this->addSql('DROP TABLE experience');
        $this->addSql('DROP TABLE hobby');
        $this->addSql('DROP TABLE language');
        $this->addSql('DROP TABLE licence');
        $this->addSql('DROP TABLE medal');
        $this->addSql('DROP TABLE other_info');
        $this->addSql('DROP TABLE skills');
        $this->addSql('DROP TABLE speak');
        $this->addSql('DROP TABLE speak_level');
        $this->addSql('DROP TABLE to_get');
        $this->addSql('DROP TABLE type_degrees');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_hobby');
        $this->addSql('DROP TABLE user_licence');
        $this->addSql('DROP TABLE user_medal');
        $this->addSql('DROP TABLE user_skills');
    }
}
