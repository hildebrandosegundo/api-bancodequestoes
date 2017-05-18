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
            $table->integer('idqenunciado');
            $table->integer('idserie');
            $table->integer('idarea');
            $table->integer('idcategoria');
            $table->integer('idhabilidade');
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
