<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,20) as $index) {
            DB::table('products')->insert([
                'name' => $faker->sentence(5),
                'price' => $faker->randomDigit(4),
                'description' => $faker->paragraph()
            ]);
        }
    }
}
