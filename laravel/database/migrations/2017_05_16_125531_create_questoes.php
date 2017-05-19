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
            $table->integer('alternativa1')->nullable();
            $table->binary('imagemAl1')->nullable();
            $table->integer('alternativa2')->nullable();
            $table->binary('imagemAl2')->nullable();
            $table->integer('alternativa3')->nullable();
            $table->binary('imagemAl3')->nullable();
            $table->integer('alternativa4')->nullable();
            $table->binary('imagemAl4')->nullable();
            $table->integer('alternativa5')->nullable();
            $table->binary('imagemAl5')->nulllable();
            $table->integer('idserie');
            $table->integer('idnivel');
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
        Schema::dropIfExists('pquestoes');
    }
}
