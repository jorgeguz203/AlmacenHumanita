<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialclinicaUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
  Schema::create('materialclinica_users', function(Blueprint $table)
  {
      $table->integer('materialclinica_id')->unsigned()->nullable();
      $table->foreign('materialclinica_id')->references('id')
            ->on('materialclinica')->onDelete('cascade');

      $table->integer('user_id')->unsigned()->nullable();
      $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');

    $table->float('cantidad');


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
        
    }
}


