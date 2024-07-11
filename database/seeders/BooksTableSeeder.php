<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder {
    public function run(): void {
        $categories = DB::table('categories')->pluck('id')->toArray();

        for ($i = 1; $i <= 100; $i++) {
            DB::table('books')->insert([
                'title' => 'Book ' . $i,
                'thumbnail' => 'thumbnail_' . $i . '.jpg',
                'author' => 'Author ' . $i,
                'publisher' => 'Publisher ' . $i,
                'publication' => now(),
                'price' => rand(1000, 10000),
                'quantity' => rand(1, 100),
                'category_id' => $categories[array_rand($categories)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}