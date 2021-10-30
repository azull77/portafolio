<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Notas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('notas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            
            $table->bigInteger('alumnos_id')->unsigned();
            $table->bigInteger('cursos_id')->unsigned();
            $table->bigInteger('docentes_id')->unsigned();

            $table->string('nota1');
            $table->string('nota2');
            $table->string('nota3');
            $table->string('nota4');
            $table->string('promedio');
            $table->string('parcial');

            $table->foreign('alumnos_id')->references('id')->on('alumnos')->ondelete("cascade");
            $table->foreign('cursos_id')->references('id')->on('cursos')->ondelete("cascade");
            $table->foreign('docentes_id')->references('id')->on('docentes')->ondelete("cascade");   

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
