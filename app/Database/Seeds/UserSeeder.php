<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

        $user_object->insertBatch([
            [
                "name" => "Admin",
                "email" => "admin@app.com",
                "phone_no" => "8801921577009",
                "role" => "admin",
                "password" => password_hash("12345678", PASSWORD_DEFAULT)
            ],
            [
                "name" => "Customer",
                "email" => "customer@app.com",
                "phone_no" => "8801921577009",
                "role" => "customer",
                "password" => password_hash("12345678", PASSWORD_DEFAULT)
            ]
        ]);
    }
}
