<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $data = [
            [
                "name" => "admin",
                "email" => "admin@gmail.com",
                "password" => bcrypt(12345678),
                "role" => "admin"
            ],
            [
                "name" => "verifier1",
                "email" => "verifier1@gmail.com",
                "password" => bcrypt(12345678),
                "role" => "verifier"
            ],
            [
                "name" => "verifier2",
                "email" => "verifier2@gmail.com",
                "password" => bcrypt(12345678),
                "role" => "verifier"
            ],
        ];

        foreach ($data as $item) {

            User::create($item);
        }
    }
}
