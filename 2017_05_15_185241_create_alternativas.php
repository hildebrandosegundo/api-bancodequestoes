<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternativas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alternativa',2);
            $table->string('descricao');
            $table->binary('imagem');
            $table->boolean('correta');
            $table->integer('enunciado_id');
            $table->integer('serie_id');
            $table->integer('area_id');
            $table->integer('categoria_id');
            $table->integer('habilidade_id');
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
        Schema::dropIfExists('alternativas');
    }
}
