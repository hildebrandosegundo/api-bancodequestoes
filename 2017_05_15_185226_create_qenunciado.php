<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQenunciado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enunciados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enunciado');
            $table->binary('imagem')->nullable();
            $table->integer('serie_id');
            $table->integer('area_id');
            $table->integer('nivel_id');
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
        Schema::dropIfExists('enunciados');
    }
}
