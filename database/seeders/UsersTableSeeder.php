<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            User::create([
                'name' => "Usuario $i",
                'email' => "usuario$i@example.com",
                'password' => bcrypt('password'),
            ]);
        }
    }
}
