<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalidaPapeleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

                Schema::create('salida_papelerias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materialpapelera_id')->unsigned()->nullable();
            $table->foreign('materialpapelera_id')->references('id')
                    ->on('materialpapeleras')->onDelete('cascade');
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
        Schema::dropIfExists('salida_papelerias');
    }
}
