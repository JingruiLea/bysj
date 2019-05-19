<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfos',function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->string('username');
            $table->string('name');
            $table->string('sex');
            $table->string('nation');
            $table->string('address');
            $table->string('birthday');
            $table->string('phone');
            $table->string('qq');
            $table->string('photo');
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
        Schema::drop('userinfos');
    }
}
