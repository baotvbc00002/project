<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230622060902 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE san_pham ADD cate_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE san_pham ADD CONSTRAINT FK_809F457C7D3008E5 FOREIGN KEY (cate_id) REFERENCES category (id)');
        $this->addSql('CREATE INDEX IDX_809F457C7D3008E5 ON san_pham (cate_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE san_pham DROP FOREIGN KEY FK_809F457C7D3008E5');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP INDEX IDX_809F457C7D3008E5 ON san_pham');
        $this->addSql('ALTER TABLE san_pham DROP cate_id');
    }
}
