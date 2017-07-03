<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialpapeleraProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
{
  Schema::create('materialpapelera_proveedors', function(Blueprint $table)
  {
      $table->integer('materialpapelera_id')->unsigned()->nullable();
      $table->foreign('materialpapelera_id')->references('id')
            ->on('materialpapeleras')->onDelete('cascade');

      $table->integer('proveedor_id')->unsigned()->nullable();
      $table->foreign('proveedor_id')->references('id')
            ->on('proveedors')->onDelete('cascade');

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
        //
    }
}
