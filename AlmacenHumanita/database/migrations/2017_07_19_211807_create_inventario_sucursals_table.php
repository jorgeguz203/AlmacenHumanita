<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_sucursals', function (Blueprint $table) {
            $table->increments('id');

      $table->integer('materialclinica_id')->unsigned()->nullable();
      $table->foreign('materialclinica_id')->references('id')
            ->on('materialclinica')->onDelete('cascade');


      $table->integer('user_id')->unsigned()->nullable();
      $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');
            $table->string('nombre_user');
      $table->string('nombre_material');
      $table->string('area');
      $table->float('existencia');  
      $table->float('maximo')->nullable(); 
      $table->float('minimo')->nullable(); 
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
        Schema::dropIfExists('inventario_sucursals');
    }
}
