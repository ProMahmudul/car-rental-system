<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBookings extends Migration
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
            'booking_no' => [
                'type' => 'INT',
                'constraint' => 11,
                'null' => false
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false
            ],
            'car_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => false
            ],
            'from_date' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'to_date' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'from_area' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'to_area' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ],
            'message' => [
                'type' => 'TEXT',
                'null' => true
            ],
            'status' => [
                'type' => 'ENUM("pending","accept", "reject")',
                'default' => 'pending',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('car_id', 'cars', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('bookings');
    }

    public function down()
    {
        $this->forge->dropTable('bookings');
    }
}
