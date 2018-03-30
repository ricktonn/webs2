<?php

use Illuminate\Database\Seeder;

class SubCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategory')->insert([

            'name' => '3mg',
            'category_id' => '1'
        ]);

        DB::table('subcategory')->insert([

            'name' => '6mg',
            'category_id' => '1'
        ]);
        DB::table('subcategory')->insert([

            'name' => '12mg',
            'category_id' => '1'
        ]);
        DB::table('subcategory')->insert([

            'name' => '18mg',
            'category_id' => '1'
        ]);
        DB::table('subcategory')->insert([

            'name' => 'vaporesso',
            'category_id' => '2'
        ]);
        DB::table('subcategory')->insert([

            'name' => 'aspire',
            'category_id' => '2'
        ]);
        DB::table('subcategory')->insert([

            'name' => 'smok',
            'category_id' => '2'
        ]);
    }
}
