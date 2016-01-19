<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('badmin', function($table)
          {
               $table->increments('id');
               $table->string('nickname', 100)->unique();
               $table->string('username', 100)->unique();
               $table->string('email', 100)->unique();
               $table->string('password', 64);
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
        //
	Schema::drop('badmin');
    }
}
