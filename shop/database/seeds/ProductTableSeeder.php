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
            'price' => '200',
            'category' => '3',
            'img' => 'vape.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'vape2',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '200',
            'category' => '3',
            'img' => 'vape1.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'vape3',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '200',
            'category' => '3',
            'img' => 'vape2.png',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'vape4',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '200',
            'category' => '4',
            'img' => 'vape3.jpg',
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => 'vape4',
            'desc' => 'Dit is een stuk tekst Dit is een stuk tekst Dit is een stuk tekst',
            'price' => '200',
            'category' => '5',
            'img' => 'liquid1.jpg',
            'seo' => str_random(10),
        ]);
    }
}
