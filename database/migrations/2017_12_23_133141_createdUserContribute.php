<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedUserContribute extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_contribute', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userId');
            $table->double('amount',10 , 2);
            $table->integer('createdTime');
            $table->integer('updateTime');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_contribute');
    }
}
