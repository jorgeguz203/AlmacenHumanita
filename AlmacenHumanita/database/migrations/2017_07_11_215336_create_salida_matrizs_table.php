<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalidaMatrizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salida_matrizs', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('materialclinica_id')->references('id')->on('materialclinica')->onDelete('cascade');
            $table->integer('Usuario_id')->unsigned()->nullable();
            $table->foreign('Usuario_id')->references('id')->on('proveedors')->onDelete('cascade');
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
        Schema::dropIfExists('salida_matrizs');
    }
}
