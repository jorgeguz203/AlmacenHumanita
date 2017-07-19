<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarioSucursalpapeleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_sucursalpapelerias', function (Blueprint $table) {
                       $table->increments('id');

      $table->integer('materialpapelera_id')->unsigned()->nullable();
      $table->foreign('materialpapelera_id')->references('id')
            ->on('materialpapeleras')->onDelete('cascade');

      $table->integer('User_id')->unsigned()->nullable();
      $table->foreign('User_id')->references('id')
            ->on('users')->onDelete('cascade');

      $table->float('existencia'); 
      $table->float('maximo')->nullable(); 
      $table->float('minimo')->nullable();  
      $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario_sucursalpapelerias');
    }
}
