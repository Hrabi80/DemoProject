<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190123104139 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE seller (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(100) NOT NULL, name VARCHAR(100) NOT NULL, lname VARCHAR(100) NOT NULL, tel INT NOT NULL, mail VARCHAR(100) NOT NULL, pass VARCHAR(100) NOT NULL, numid INT NOT NULL, city VARCHAR(100) NOT NULL, postal INT NOT NULL, addr VARCHAR(100) NOT NULL, `desc` LONGTEXT NOT NULL, comm INT NOT NULL, groupid INT NOT NULL, active TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_FB1AD3FC5126AC48 (mail), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(100) NOT NULL, name VARCHAR(100) NOT NULL, lname VARCHAR(100) NOT NULL, tel INT NOT NULL, mail VARCHAR(100) NOT NULL, pass VARCHAR(100) NOT NULL, numid INT NOT NULL, addr VARCHAR(100) NOT NULL, sex VARCHAR(100) NOT NULL, age INT NOT NULL, active TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_81398E095126AC48 (mail), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, seller_id INT NOT NULL, category_id INT NOT NULL, id_sel INT NOT NULL, unit_inorder INT NOT NULL, quent_perunit INT NOT NULL, unit_price INT NOT NULL, descr LONGTEXT NOT NULL, INDEX IDX_D34A04AD8DE820D9 (seller_id), INDEX IDX_D34A04AD12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD8DE820D9 FOREIGN KEY (seller_id) REFERENCES seller (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD12469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD8DE820D9');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD12469DE2');
        $this->addSql('DROP TABLE seller');
        $this->addSql('DROP TABLE customer');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE category');
    }
}
