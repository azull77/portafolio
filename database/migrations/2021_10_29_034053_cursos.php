<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cursos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');

            $table->bigInteger('docentes_id')->unsigned();
            
            $table->string('nombrecurso');
            $table->string('año');
            $table->string('ciclo');
            
            $table->timestamps();

            $table->foreign('docentes_id')->references('id')->on('docentes')->ondelete("cascade");      
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
