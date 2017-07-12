<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradaMatrizsTable extends Migration
{
 
    public function up()
    {
        Schema::create('entrada_matrizs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materialclinica_id')->unsigned()->nullable();
            $table->foreign('materialclinica_id')->references('id')
                    ->on('materialclinica')->onDelete('cascade');
            $table->integer('Proveedor_id')->unsigned()->nullable();
             $table->foreign('Proveedor_id')->references('id')
                    ->on('proveedors')->onDelete('cascade');
            $table->string('nombre_proveedor');
            $table->float('cantidad');
            $table->float('precio');
            $table->string('fecha_caducidad')->nullable();
            $table->string('presentacion')->nullable();
            $table->string('observaciones')->nullable();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('entrada_matrizs');
    }
}
