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
            $table->string('descripcion')->nullable();
            $table->float('maximo');
            $table->float('minimo');
            $table->float('existencia');
            $table->string('area')->nullable();
            $table->enum('seccion', ['inmunologia', 'uroanalisis', 'hematologia', 'bacteriologia', 'bioquimica', 'hormonas'])->nullable();
            $table->string('unidad_medida')->nullable();
            $table->bigInteger('numero_referencia')->nullable();
            $table->string('presentacion')->nullable();
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
