<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePostsTable extends Migration
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
            "excerpt" => [
                "type" => "TEXT",
                "null" => true,
            ],
            "author" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "null" => true,
            ],
            "content" => [
                "type" => "TEXT",
            ],
            "featured_image" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => true,
            ],
            "is_published" => [
                "type" => "BOOLEAN",
                "default" => false,
            ],
            "published_at" => [
                "type" => "DATETIME",
                "null" => true,
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
        $this->forge->createTable("posts");
    }

    public function down()
    {
        $this->forge->dropTable("posts");
    }
}
