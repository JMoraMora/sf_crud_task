<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231124220122 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'add_description_to_task';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE task ADD description VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE task DROP description');
    }
}
