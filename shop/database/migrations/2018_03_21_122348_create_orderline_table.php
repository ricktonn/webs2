<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // create_products_table

    public function up()
    {
        Schema::create('orderline', function (Blueprint $table) {
            $table->string('orderline_id');
            $table->integer('product_id');
            $table->integer('amount');

            $table->timestamps();

            $table->primary(['orderline_id', 'product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderline');
    }
}
