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
            $table->integer('p_price')->unsigned();
            $table->string('p_type');
            $table->integer('s_id')->unsigned();
            $table->timestamps();

            $table->foreign('s_id')
                ->references('id')->on('sellers')
                ->onDelete('cascade');
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
