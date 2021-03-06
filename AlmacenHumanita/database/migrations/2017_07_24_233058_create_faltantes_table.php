<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaltantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faltantes', function (Blueprint $table) {
            $table->increments('id');
                        $table->integer('materialclinica_id')->unsigned()->nullable();
            $table->foreign('materialclinica_id')->references('id')
                ->on('materialclinica')->onDelete('cascade');


            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')
                ->on('users')->onDelete('cascade');

            $table->string('nombre_user');
            $table->string('nombre_material');
            $table->string('area');
            $table->string('seccion')->nullable();
            $table->string('inmunologia')->nullable();
            $table->string('uroanalisis')->nullable();
            $table->string('hematologia')->nullable();
            $table->string('bacteriologia')->nullable();
            $table->string('bioquimica')->nullable();
            $table->string('hormonas')->nullable();
            $table->float('cantidad');
            $table->float('faltante');
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
        Schema::dropIfExists('faltantes');
    }
}
