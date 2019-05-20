<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

  /**
   * Reverse the migrations.
   *
   * @return void
   */

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        if(!Schema::hasTable('users')){
    Schema::create('users', function (Blueprint $table) {
        $table->integer('id');
        $table->foreign('id')->references('id')->on('estudiantes');
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
        });
  }
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }


}
