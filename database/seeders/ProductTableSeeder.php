<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i=0;$i<=50;$i++) {
            DB::table('products')->insert([
                [
                    'name' => $faker->name,
                    'price' => rand(1000,5000),
                    'discount' => rand(100,500),
                    'is_hot' => rand(0,1),
                    'active' => rand(0,1),
                    'active_quantity' => rand(0,1),
                    'category_id' => Category::all()->random(1)->first()->id_category,
                    'thumbnail' => "assets/img/246X176/img2.jpg",
                    'product_type_id' => rand(0,1),
                    'warehouse_id' => rand(1,50),
                ]
            ]);
        }
    }
}
