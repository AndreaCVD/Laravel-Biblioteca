<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table("books")->insert(
                [
                    "id" => $i + 1,
                    "isbn" => $faker->isbn10(),
                    "title" => $faker->words(4, true),
                    "author" => $faker->name(),
                    "publised_date" => $faker->date('Y-m-d','now'),
                    "description" => $faker->paragraph(1),
                    "price" => $faker->randomFloat(2, 5, 100),
                    "created_at" => $faker->dateTimeBetween("-1 month", "now")->format('Y-m-d'),
                    "updated_at" => $faker->dateTimeBetween("now", "+1 month")->format('Y-m-d'),
                ]
            );
        }

    }
}
