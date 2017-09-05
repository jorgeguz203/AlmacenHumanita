<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materialclinica_id')->unsigned()->nullable();
            $table->foreign('materialclinica_id')->references('id')
                    ->on('materialclinica')->onDelete('cascade');
            $table->integer('proveedor_id')->unsigned()->nullable();
            $table->foreign('proveedor_id')->references('id')
                    ->on('proveedors')->onDelete('cascade');
            $table->string('nombre_material');
            $table->string('nombre_proveedor1');
            $table->string('nombre_proveedor2');
            $table->string('nombre_proveedor3');
            $table->string('nombre_proveedor4');
            $table->string('nombre_proveedor5');
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
        Schema::dropIfExists('cotizacions');
    }
}
