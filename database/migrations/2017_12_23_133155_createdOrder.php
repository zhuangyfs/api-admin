<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orderId', 255);
            $table->integer('userId');
            $table->string('type', 20);
            $table->string('status', 10);
            $table->text('metas');
            $table->tinyInteger('mark');
            $table->string('comment', 255);
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
        Schema::dropIfExists('order');
    }
}
