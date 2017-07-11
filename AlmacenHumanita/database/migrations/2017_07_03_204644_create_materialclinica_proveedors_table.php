<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialclinicaProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
  Schema::create('materialclinica_proveedors', function(Blueprint $table)
  {
      $table->integer('materialclinica_id')->unsigned()->nullable();
      $table->foreign('materialclinica_id')->references('id')
            ->on('materialclinica')->onDelete('cascade');

      $table->integer('Proveedor_id')->unsigned()->nullable();
      $table->foreign('Proveedor_id')->references('id')
            ->on('proveedors')->onDelete('cascade');

    $table->float('cantidad');
    $table->datetime('fecha_caducidad');
    $table->float('presentacion');
    $table->float('observaciones');



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
        //
    }
}
