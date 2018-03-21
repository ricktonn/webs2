<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: Rick
 * Date: 21/03/2018
 * Time: 18:51
 */

class LoginTableSeeder extends seeder
{
    public function run(){
        DB::table('login')->insert([
            'id' => '15',
            'desc' => str_random(10),
            'price' => '200',
            'category' => 'startersets',
            'img' => str_random(10),
            'seo' => bcrypt('secret'),
        ]);
    }
}