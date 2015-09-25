<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orders', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('payment_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('cart_id')->unsigned();
            $table->text('comments');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('Users')
                  ->onDelete('cascade');

            $table->foreign('payment_id')
                  ->references('id')
                  ->on('Payments')
                  ->onDelete('no action');

            $table->foreign('status_id')
                  ->references('id')
                  ->on('Statuses')
                  ->onDelete('no action');
            $table->foreign('cart_id')
                ->references('id')
                ->on('Carts')
                ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Orders');
    }
}
