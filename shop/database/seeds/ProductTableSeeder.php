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
            'name' => str_random(10),
            'desc' => str_random(10),
            'price' => '200',
            'category' => 'startersets',
            'img' => str_random(10),
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'desc' => str_random(10),
            'price' => '200',
            'category' => 'startersets',
            'img' => str_random(10),
            'seo' => str_random(10),
        ]);
        DB::table('products')->insert([
            'name' => str_random(10),
            'desc' => str_random(10),
            'price' => '200',
            'category' => 'startersets',
            'img' => str_random(10),
            'seo' => str_random(10),
        ]);
    }
}
