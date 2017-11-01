<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pquestoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('enunciado');
            $table->binary('imagem')->nullable();
            $table->string('alternativa1')->nullable();
            $table->binary('imagemAl1')->nullable();
            $table->string('alternativa2')->nullable();
            $table->binary('imagemAl2')->nullable();
            $table->string('alternativa3')->nullable();
            $table->binary('imagemAl3')->nullable();
            $table->string('alternativa4')->nullable();
            $table->binary('imagemAl4')->nullable();
            $table->string('alternativa5')->nullable();
            $table->binary('imagemAl5')->nulllable();
            $table->integer('serie_id');
            $table->integer('nivel_id');
            $table->integer('area_id');
            $table->integer('categoria_id');
            $table->integer('habilidade_id');
            $table->string('correta',1);
            $table->string('codigo', 20);
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
        Schema::dropIfExists('pquestoes');
    }
}
