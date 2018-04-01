<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([

            'name' => 'liquids',
            'p_id' => '0'
        ]);

        DB::table('category')->insert([

            'name' => 'Startersets',
            'p_id' => '0'
        ]);
        DB::table('category')->insert([

            'name' => 'vaporesso',
            'p_id' => '2'
        ]);
        DB::table('category')->insert([

            'name' => 'smok',
            'p_id' => '2'
        ]);
        DB::table('category')->insert([

            'name' => 'Humble',
            'p_id' => '1'
        ]);
        DB::table('category')->insert([

            'name' => 'CandyKing',
            'p_id' => '1'
        ]);

    }
}
