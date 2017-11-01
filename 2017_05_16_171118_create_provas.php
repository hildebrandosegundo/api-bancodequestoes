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
            $table->string('titulo');
            $table->string('codigo', 20);
            $table->integer('ano');
            $table->integer('questao1_id');
            $table->integer('questao2_id');
            $table->integer('questao3_id');
            $table->integer('questao4_id');
            $table->integer('questao5_id');
            $table->integer('questao6_id');
            $table->integer('questao7_id');
            $table->integer('questao8_id');
            $table->integer('questao9_id');
            $table->integer('questao10_id');
            $table->integer('questao11_id');
            $table->integer('questao12_id');
            $table->integer('questao13_id');
            $table->integer('questao14_id');
            $table->integer('questao15_id');
            $table->integer('questao16_id');
            $table->integer('questao17_id');
            $table->integer('questao18_id');
            $table->integer('questao19_id');
            $table->integer('questao20_id');
            $table->integer('questao21_id');
            $table->integer('questao22_id');
            $table->integer('questao23_id');
            $table->integer('questao24_id');
            $table->integer('questao25_id');
            $table->integer('questao26_id');
            $table->integer('questao27_id');
            $table->integer('questao28_id');
            $table->integer('questao29_id');
            $table->integer('questao30_id');
            $table->integer('questao31_id');
            $table->integer('questao32_id');
            $table->integer('questao33_id');
            $table->integer('questao34_id');
            $table->integer('questao35_id');
            $table->integer('questao36_id');
            $table->integer('questao37_id');
            $table->integer('questao38_id');
            $table->integer('questao39_id');
            $table->integer('questao40_id');
            $table->integer('questao41_id');
            $table->integer('questao42_id');
            $table->integer('questao43_id');
            $table->integer('questao44_id');
            $table->integer('questao45_id');
            $table->integer('questao46_id');
            $table->integer('questao47_id');
            $table->integer('questao48_id');
            $table->integer('questao49_id');
            $table->integer('questao50_id');
            $table->integer('serie_id');
            $table->integer('area_id');
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
