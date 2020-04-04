<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth', function (Blueprint $table) {
            $table-> increments('id');//prime key id
            $table-> string('auth_name',20) -> notNull();//permission name
            $table-> string('controller',40) -> nullable();//permission controller
            $table-> string('action',30) -> nullable();//permission method
            $table-> tinyInteger('pid');//unlimited classification id
            $table-> enum('is_nav',[1,2]) -> notNull() ->default('1');//if show as menu
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auth');
    }
}
