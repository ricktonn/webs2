<?php

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
        DB::table('products')->insert([
            'name' => 'vape1',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '120',
            'category' => '3',
            'img' => 'vape.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'vape2',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '100',
            'category' => '3',
            'img' => 'vape1.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'vape3',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '80',
            'category' => '3',
            'img' => 'vape2.png',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'vape4',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '80',
            'category' => '3',
            'img' => 'vaporesso1.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'vape5',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '200',
            'category' => '4',
            'img' => 'vape3.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'humble 1',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '5',
            'img' => 'humble1.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'humble 2',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '5',
            'img' => 'humble2.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'humble 3',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '5',
            'img' => 'humble3.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'humble 4',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '5',
            'img' => 'humble4.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'humble 5',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '5',
            'img' => 'humble5.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'humble 6',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '5',
            'img' => 'humble6.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'humble 7',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '7',
            'img' => 'humble2.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'candy king 1',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '6',
            'img' => 'big1.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'candy king 2',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '6',
            'img' => 'big2.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'candy king 3',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '6',
            'img' => 'big3.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'candy king 4',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '50',
            'category' => '6',
            'img' => 'big4.jpg',
            'seo' => str_random(10),
        ]);
    }
}
