<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) { 
            DB::table("categories")->insert(
                [
                    "id" => $i + 1,
                    "name" => $faker->words(1, true),
                    "created_at" => $faker->dateTimeBetween("-1 month", "now")->format('Y-m-d'),
                    "updated_at" => $faker->dateTimeBetween("now", "+1 month")->format('Y-m-d'),
                ]
            );
        }
    }
}
