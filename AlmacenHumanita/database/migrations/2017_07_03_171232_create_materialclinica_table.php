<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialclinicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materialclinica', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->float('maximo');
            $table->float('minimo');
            $table->float('existencia');
            $table->integer('proveedor_id');
            $table->string('area');
            $table->datetime('fecha_caducidad');
            $table->string('unidad_medida');
            $table->bigInteger('numero_referencia');
            $table->string('presentacion');
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
        Schema::dropIfExists('materialclinica');
    }
}
