<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    protected $table = 'provas';
    protected $fillable = ['idarea', 'idserie', 'idquestao1', 'idquestao2','idquestao3','idquestao4','idquestao5','idquestao6','idquestao7','idquestao8','idquestao9', 'idquestao10', 'ano', 'bimestre'];

    public function questao1()
    {
        return $this->belongsTo('App\Questao');
    }

    public function questao2()
    {
        return $this->belongsTo('App\Questao');
    }

    public function questao3()
    {
        return $this->belongsTo('App\Questao');
    }

    public function questao4()
    {
        return $this->belongsTo('App\Questao');
    }

    public function questao5()
    {
        return $this->belongsTo('App\Questao');
    }

    public function questao6()
    {
        return $this->belongsTo('App\Questao');
    }

    public function questao7()
    {
        return $this->belongsTo('App\Questao');
    }

    public function questao8()
    {
        return $this->belongsTo('App\Questao');
    }

    public function questao9()
    {
        return $this->belongsTo('App\Questao');
    }

    public function questao10()
    {
        return $this->belongsTo('App\Questao');
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
