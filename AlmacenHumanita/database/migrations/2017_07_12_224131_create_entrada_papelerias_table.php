<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradaPapeleriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

                Schema::create('entrada_papelerias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('materialpapelera_id')->unsigned()->nullable();
            $table->foreign('materialpapelera_id')->references('id')
                    ->on('materialpapeleras')->onDelete('cascade');
            $table->integer('Proveedor_id')->unsigned()->nullable();
             $table->foreign('Proveedor_id')->references('id')
                    ->on('proveedors')->onDelete('cascade');
            $table->string('nombre_proveedor');
            $table->float('cantidad');
            $table->float('precio');
            $table->string('presentacion')->nullable();
            $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('entrada_papelerias');
    }
}
