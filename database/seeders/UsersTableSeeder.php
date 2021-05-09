<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id_user' => 1,'name' => "Admin", 'email' => 'admin@gmail.com', 'password' => '$2y$10$YIR.NhsNa01IJEnhZn7i6O6BJNLUL61jwqVFq51dJu4aYkLyQSvJW', 'role_id' => 1]
        ]);
    }
}
