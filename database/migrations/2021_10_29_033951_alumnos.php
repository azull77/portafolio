<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('alumnos', function (Blueprint $table) {

            $table->engine="InnoDB";

            $table->bigIncrements('id');

            $table->string('nombre');
            $table->string('apellido');
            $table->string('fechanacimiento');
            $table->string('direccion');
            $table->string('genero');
            $table->string('telefono');
            $table->string('correo');
            $table->string('clave');

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
