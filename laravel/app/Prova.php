<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    protected $table = 'provas';
    protected $fillable = ['area_id', 'serie_id', 'questao1_id', 'questao2_id','questao3_id','questao4_id','questao5_id','questao6_id','questao7_id','questa8_id','questao9_id', 'questao10_id',
                                                  'questao11_id', 'questao12_id','questao13_id','questao14_id','questao15_id','questao16_id','questao17_id','questa18_id','questao19_id', 'questao20_id',
                                                  'questao21_id', 'questao22_id','questao23_id','questao24_id','questao25_id','questao26_id','questao27_id','questa28_id','questao29_id', 'questao30_id',
                                                  'questao31_id', 'questao32_id','questao33_id','questao34_id','questao35_id','questao36_id','questao37_id','questa38_id','questao39_id', 'questao40_id',
                                                  'questao41_id', 'questao42_id','questao43_id','questao44_id','questao45_id','questao46_id','questao47_id','questa48_id','questao49_id', 'questao50_id','ano', 'bimestre'];

    public function questao1()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao2()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao3()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao4()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao5()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao6()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao7()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao8()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao9()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao10()
    {
        return $this->belongsTo('App\Pquestao');
    }
    public function questao11()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao12()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao13()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao14()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao15()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao16()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao17()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao18()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao19()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao20()
    {
        return $this->belongsTo('App\Pquestao');
    }
    public function questao21()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao22()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao23()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao24()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao25()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao26()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao27()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao28()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao29()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao30()
    {
        return $this->belongsTo('App\Pquestao');
    }
    public function questao31()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao32()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao33()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao34()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao35()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao36()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao37()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao38()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao39()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao40()
    {
        return $this->belongsTo('App\Pquestao');
    }
    public function questao41()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao42()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao43()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao44()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao45()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao46()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao47()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao48()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao49()
    {
        return $this->belongsTo('App\Pquestao');
    }

    public function questao50()
    {
        return $this->belongsTo('App\Pquestao');
    }
    public function serie()
    {
        return $this->belongsTo('App\Serie');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }




}
