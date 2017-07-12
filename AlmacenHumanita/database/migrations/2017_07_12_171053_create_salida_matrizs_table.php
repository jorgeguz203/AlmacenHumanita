<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalidaMatrizsTable extends Migration
{
   public function up()
    {
        Schema::create('salida_matrizs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materialclinica_id')->unsigned()->nullable();
            $table->foreign('materialclinica_id')->references('id')
                    ->on('materialclinica')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->nullable();
             $table->foreign('user_id')->references('id')
                    ->on('users')->onDelete('cascade');
            $table->float('cantidad');
            $table->text('descripcion')->nullable();
            $table->string('nombre_user');
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