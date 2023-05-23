<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDatabaseTables extends Migration
{
    /**
     * Run the migration.
     *
     * @return void
     */
    public function up()
    {
        $this->createCategoriesTable();
        $this->createMigrationsTable();
        $this->createProductsTable();
        $this->createPromosTable();
        $this->createUsersTable();
    }

    /**
     * Reverse the migration.
     *
     * @return void
     */
    public function down()
    {
        $this->dropTableIfExists('users');
        $this->dropTableIfExists('promos');
        $this->dropTableIfExists('products');
        $this->dropTableIfExists('migrations');
        $this->dropTableIfExists('categories');
    }

    /**
     * Create the categories table.
     *
     * @return void
     */
    private function createCategoriesTable()
    {
        DB::statement('
            CREATE TABLE IF NOT EXISTS categories (
              id bigserial PRIMARY KEY,
              category varchar(255) NOT NULL,
              created_at timestamp NULL DEFAULT NULL,
              updated_at timestamp NULL DEFAULT NULL
            );

            INSERT INTO categories (id, category, created_at, updated_at) VALUES
            (2, \'Multimédia\', \'2023-05-12 06:25:19\', \'2023-05-12 06:25:19\'),
            (3, \'Équipement\', \'2023-05-12 06:25:33\', \'2023-05-12 06:25:33\');
        ');
    }

    /**
     * Create the migrations table.
     *
     * @return void
     */
    private function createMigrationsTable()
    {
        DB::statement('
            CREATE TABLE IF NOT EXISTS migrations (
              id bigserial PRIMARY KEY,
              migration varchar(255) NOT NULL,
              batch int NOT NULL
            );

            INSERT INTO migrations (id, migration, batch) VALUES
            (1, \'2014_10_12_000000_create_users_table\', 1),
            (2, \'2014_10_12_100000_create_password_resets_table\', 1),
            (3, \'2019_08_19_000000_create_failed_jobs_table\', 1),
            (4, \'2019_12_14_000001_create_personal_access_tokens_table\', 1),
            (6, \'2023_05_12_081353_create_categories_table\', 2),
            (8, \'2023_05_12_103523_create_promos_table\', 4),
            (10, \'2023_05_12_074831_create_products_table\', 5);
        ');
    }

    /**
     * Create the products table.
     *
     * @return void
     */
    private function createProductsTable()
    {
        DB::statement('
            CREATE TABLE IF NOT EXISTS products (
              id bigserial PRIMARY KEY,
              code varchar(255) NOT NULL,
              author varchar(255) NOT NULL,
              libelle varchar(255) NOT NULL,
              description text NOT NULL,
              prix int NOT NULL,
              prix_promo decimal(5,2) NOT NULL DEFAULT \'0.00\',
              date_debut date DEFAULT NULL,
              date_fin date DEFAULT NULL,
              category varchar(255) NOT NULL,
              image varchar(255) NOT NULL,
              created_at timestamp NULL DEFAULT NULL,
              updated_at timestamp NULL DEFAULT NULL
            );

            INSERT INTO products (id, code, author, libelle, description, prix, prix_promo, date_debut, date_fin, category, image, created_at, updated_at) VALUES
            (5, \'6928\', \'Administrateur\', \'Casque bluetooth\', \'<p>Que vous soyez un professionnel en déplacement, un étudiant ou un passionné de technologie, Casque bluetooth vous offre la performance, la portabilité et la sécurité dont vous avez besoin pour rester productif et connecté où que vous soyez.</p>\', 700, \'350.00\', \'2023-05-20\', \'2023-08-26\', \'Multimédia\', \'1683910007.png\', \'2023-05-12 14:46:47\', \'2023-05-20 11:18:47\'),
            (6, \'8559\', \'Administrateur\', \'Montre Connecté\', \'<p>La Montre Connecté est le compagnon idéal pour les professionnels en déplacement. Avec son processeur puissant et sa mémoire vive généreuse, celle-ci vous offre des performances exceptionnelles pour toutes vos tâches professionnelles. Son écran HD vous permet de visualiser vos contenus avec une netteté et une clarté remarquables.</p>\', 432, \'0.00\', NULL, NULL, \'Multimédia\', \'1683910076.png\', \'2023-05-12 14:47:56\', \'2023-05-20 14:54:41\');
        ');
    }

    /**
     * Create the promos table.
     *
     * @return void
     */
    private function createPromosTable()
    {
        DB::statement('
            CREATE TABLE IF NOT EXISTS promos (
              id bigserial PRIMARY KEY,
              code varchar(255) NOT NULL,
              date_debut date NOT NULL,
              date_fin date NOT NULL,
              reduction decimal(5,2) NOT NULL,
              created_at timestamp NULL DEFAULT NULL,
              updated_at timestamp NULL DEFAULT NULL
            );

            INSERT INTO promos (id, code, date_debut, date_fin, reduction, created_at, updated_at) VALUES
            (2, \'1786\', \'2023-05-27\', \'2023-05-31\', \'10.00\', \'2023-05-12 08:48:24\', \'2023-05-12 08:48:24\'),
            (3, \'2574\', \'2023-05-12\', \'2023-05-27\', \'20.00\', \'2023-05-12 09:37:37\', \'2023-05-12 09:37:37\'),
            (4, \'1794\', \'2023-05-20\', \'2023-08-26\', \'50.00\', \'2023-05-20 06:28:20\', \'2023-05-20 06:28:20\'),
            (5, \'5111\', \'2023-05-20\', \'2023-08-26\', \'50.00\', \'2023-05-20 06:28:20\', \'2023-05-20 06:28:20\');
        ');
    }

    /**
     * Create the users table.
     *
     * @return void
     */
    private function createUsersTable()
    {
        DB::statement('
            CREATE TABLE IF NOT EXISTS users (
              id bigserial PRIMARY KEY,
              name varchar(255) NOT NULL,
              email varchar(255) NOT NULL,
              password varchar(255) NOT NULL,
              remember_token varchar(100) NULL DEFAULT NULL,
              created_at timestamp NULL DEFAULT NULL,
              updated_at timestamp NULL DEFAULT NULL
            );

            INSERT INTO users (id, name, email, password, remember_token, created_at, updated_at) VALUES
            (1, \'Administrateur\', \'admin@example.com\', \'$2y$10$SK1N/7.qF0P/JzJXr0VgkO16dx6Yh7jGVHm50u2ImlSLpVEG1JHZu\', NULL, \'2023-05-12 06:25:19\', \'2023-05-12 06:25:19\');
        ');
    }

    /**
     * Drop a table if it exists.
     *
     * @param  string  $table
     * @return void
     */
    private function dropTableIfExists(string $table)
    {
        DB::statement("DROP TABLE IF EXISTS $table CASCADE;");
    }
}
