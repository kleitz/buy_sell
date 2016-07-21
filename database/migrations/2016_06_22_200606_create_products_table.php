<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_name');
            $table->string('p_category');
            $table->integer('p_qty')->nullable();
            $table->integer('p_buying_price')->unsigned();
            $table->integer('p_selling_price')->unsigned();
            $table->integer('stock')->unsigned();
            $table->string('image')->nullable();
            $table->string('p_active')->nullable();;
            $table->integer('s_id')->unsigned();
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
        Schema::drop('products');
    }
}
