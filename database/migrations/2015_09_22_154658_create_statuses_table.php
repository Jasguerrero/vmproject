<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function(Blueprint $table)
        {
            $table->increments('id');
<<<<<<< HEAD
=======
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->ondelete('cascade');
>>>>>>> bf212313df6e96b72ba8a78b4b9688cf7a68e0aa
            $table->string('description_es');
            $table->string('description_en');
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
<<<<<<< HEAD
        Schema::drop('statuses');
=======

        Schema::table('statuses',function(Blueprint $table){
            $table->dropforeign('statuses_user_id_foreign');
            $table->dropColumn('user_id');
        });
>>>>>>> bf212313df6e96b72ba8a78b4b9688cf7a68e0aa
    }
}
