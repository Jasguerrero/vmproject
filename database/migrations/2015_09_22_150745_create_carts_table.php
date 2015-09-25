<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Carts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('no action');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')
                ->references('id')
                ->on('Statuses')
                ->onDelete('no action');

            $table->integer('dish_id')->unsigned();
            $table->foreign('dish_id')
                ->references('id')
                ->on('dishes')
                ->onDelete('no action');
            $table->integer('payment_id')->unsigned();
            $table->foreign('payment_id')
                ->references('id')
                ->on('Payments')
                ->onDelete('no action');
            $table->text('comments');
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
        Schema::drop('Carts');
    }
}
