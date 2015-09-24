<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dish_Order', function (Blueprint $table)
        {
            $table->integer('dish_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->timestamps();

            $table->foreign('dish_id')
                  ->references('id')
                  ->on('Dishes')
                  ->onDelete('cascade');

            $table->foreign('order_id')
                  ->references('id')
                  ->on('Orders')
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
        Schema::drop('Dish_Order');
    }
}
