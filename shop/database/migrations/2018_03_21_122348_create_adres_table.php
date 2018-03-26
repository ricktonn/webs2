<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // create_products_table

    public function up()
    {
        Schema::create('adres', function (Blueprint $table) {
            $table->increments('adres_id');
            $table->integer('login_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phonenumber');
            $table->string('street');
            $table->integer('housenumber');
            $table->string('zipcode');
            $table->string('statecity');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adres');
    }
}
