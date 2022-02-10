<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCars extends Migration
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
                'constraint' => '255',
                'null' => false
            ],
            'brand' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'price_per_day' => [
                'type' => 'FLOAT',
                'null' => false
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('cars');
    }

    public function down()
    {
        $this->forge->dropTable('cars');
    }
}
