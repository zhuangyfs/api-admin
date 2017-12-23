<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedUserAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('openId');
            $table->string('unionid')->unique();
            $table->integer('phone');
            $table->string('nickname', 255);
            $table->text('metas');
            $table->string('InviteCode', 255);
            $table->integer('createdTime');
            $table->integer('updateTime');
            $table->rememberToken();
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
        Schema::dropIfExists('user_account');
    }
}
