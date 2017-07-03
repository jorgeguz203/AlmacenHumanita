<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialpapeleraUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
{
  Schema::create('materialpapelera_users', function(Blueprint $table)
  {
      $table->integer('materialpapelera_id')->unsigned()->nullable();
      $table->foreign('materialpapelera_id')->references('id')
            ->on('materialpapeleras')->onDelete('cascade');

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
        //
    }
}
