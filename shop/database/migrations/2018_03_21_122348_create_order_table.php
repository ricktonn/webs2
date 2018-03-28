<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // create_products_table

    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->integer('bestelling_id');
            $table->integer('adres_id');
            $table->integer('totaalprijs');

            $table->timestamps();

            $table->primary(['bestelling_id', 'adres_id']);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
