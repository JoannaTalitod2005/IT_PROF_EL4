<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "title" => [
                "type" => "VARCHAR",
                "constraint" => 255,
            ],
            "slug" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "unique" => true,
            ],
            "description" => [
                "type" => "TEXT",
            ],
            "technologies" => [
                "type" => "TEXT",
                "null" => true,
            ],
            "image" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => true,
            ],
            "github_url" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => true,
            ],
            "demo_url" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => true,
            ],
            "is_featured" => [
                "type" => "BOOLEAN",
                "default" => false,
            ],
            "created_at" => [
                "type" => "DATETIME",
                "null" => true,
            ],
            "updated_at" => [
                "type" => "DATETIME",
                "null" => true,
            ],
        ]);
        $this->forge->addKey("id", true);
        $this->forge->createTable("projects");
    }

    public function down()
    {
        $this->forge->dropTable("projects");
    }
}
