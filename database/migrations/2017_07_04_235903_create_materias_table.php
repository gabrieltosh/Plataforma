<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre')->unique();
            $table->string('descripcion',500);
            $table->integer('semestre_id')->unsigned();
            $table->integer('carrera_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('semestre_id')->references('id')->on('semestres')->onDelete('cascade');
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias');
    }
}
