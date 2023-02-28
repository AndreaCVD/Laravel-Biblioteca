<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $lastIdInsertedBooks = DB::table("books")->max("id");

        $lastIdInsertedCategories = DB::table("categories")->max("id");

        for ($i = 0; $i < $lastIdInsertedBooks; $i++) {
            for ($j=0; $j < 3; $j++) { 
                DB::table("book_category")->insert(
                    [
                        "book_id" => $i + 1,
                        "category_id" => rand(1, $lastIdInsertedCategories)
                    ]
                );
            }
        }
    }
}
