<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function(Blueprint $table)
        {
            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->ondelete('cascade');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->ondelete('set null');

            $table->string('name');
            $table->string('description_es');
            $table->string('description_en');
            $table->string('img_url');
            $table->string('price');
            $table->string('measure');
            $table->string('prep_time');
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
        Schema::drop('dishes');        
    }
}
