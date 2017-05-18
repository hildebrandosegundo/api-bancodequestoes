<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bimestre');
            $table->integer('ano');
            $table->integer('idquestao1');
            $table->integer('idquestao2');
            $table->integer('idquestao3');
            $table->integer('idquestao4');
            $table->integer('idquestao5');
            $table->integer('idquestao6');
            $table->integer('idquestao7');
            $table->integer('idquestao8');
            $table->integer('idquestao9');
            $table->integer('idquestao10');
            $table->integer('idserie');
            $table->integer('idarea');
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
        Schema::dropIfExists('provas');
    }
}
