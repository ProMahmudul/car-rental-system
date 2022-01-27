<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsers extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '120',
                'null' => false
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '120',
                'null' => false,
                'unique' => true
            ],
            'phone_no' => [
                'type' => 'VARCHAR',
                'constraint' => '120',
                'null' => false
            ],
            'profile_image' => [
                'type' => 'VARCHAR',
                'constraint' => '180',
                'null' => true
            ],
            'role' => [
                'type' => 'ENUM("admin","customer")',
                'default' => 'customer',
                'null' => FALSE,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '120',
                'null' => false
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
