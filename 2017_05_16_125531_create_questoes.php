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
        Schema::create('questoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idenunciado');
            $table->integer('idqalternativa1');
            $table->integer('idqalternativa2');
            $table->integer('idqalternativa3');
            $table->integer('idqalternativa4');
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
        Schema::dropIfExists('questoes');
    }
}
