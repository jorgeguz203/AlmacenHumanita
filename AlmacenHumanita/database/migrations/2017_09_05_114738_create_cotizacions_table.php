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
            $table->string('nombre_proveedor1')->nullable();
            $table->float('precio1')->nullable();
            $table->string('nombre_proveedor2')->nullable();
            $table->float('precio2')->nullable();
            $table->string('nombre_proveedor3')->nullable();
            $table->float('precio3')->nullable();
            $table->string('nombre_proveedor4')->nullable();
            $table->float('precio4')->nullable();
            $table->string('nombre_proveedor5')->nullable();
            $table->float('precio5')->nullable();
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
