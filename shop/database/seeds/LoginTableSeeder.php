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
            'username' => 'admin',
            'password' => '$2y$10$KFIS7LF0O7TP5kGjuPinKO3o6X.JLeJHtEovs.hi5qCPOcCRGSa82',
            'user_type' => '0',
            'updated_at' => '2018-03-19',
            'created_at' => '2018-03-19',
        ]);
    }
}