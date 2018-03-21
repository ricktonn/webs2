<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'desc' => str_random(10),
            'price' => '200',
            'category' => 'startersets',
            'img' => str_random(10),
            'seo' => bcrypt('secret'),
        ]);
    }
}
