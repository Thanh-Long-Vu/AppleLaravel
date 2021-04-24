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
        $fake = Faker::create();
        foreach (range(1,10) as $datafake)
        DB::table('users')->insert([
            'name' => $fake->name(3),
            'email'=> $fake->email,
            'phone'=> $fake->phoneNumber,
            'avatar'=> $fake->paragraph(1),
            'address'=> $fake->address,
            'role_id'=> $fake->randomDigit,
            'password'=> $fake->md5,
            'total_pay'=> $fake->buildingNumber,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
