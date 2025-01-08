<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTblPosts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'content' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'default' => 'Noimage.jpg',
            ],
            'hits' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'aktif' => [
                'type' => 'ENUM',
                'constraint' => ['Y', 'N'],
                'default' => 'Y',
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['publish', 'draft'],
                'default' => 'publish',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tbl_posts');
    }

    public function down()
    {
        $this->forge->dropTable('tbl_posts');
    }
}
