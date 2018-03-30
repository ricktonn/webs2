<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProductTableSeeder::class);
        $this->call(LoginTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
//        $this->call(SubCategoryTableSeeder::class);
    }
}
