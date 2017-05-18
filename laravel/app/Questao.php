<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';
    protected $fillable = ['idenunciado', 'idqalternativa1', 'idqalternativa2', 'idqalternativa3', 'idqalternativa4', 'idserie', 'idnivel', 'idarea', 'idcategoria', 'idhabilidade'];

    public function enunciado()
    {
        return $this->belongsTo('App\Qenunciado');
    }

    public function alternativa1()
    {
        return $this->belongsTo('App\Qalternativa');
    }

    public function alternativa2()
    {
        return $this->belongsTo('App\Qalternativa');
    }

    public function alternativa3()
    {
        return $this->belongsTo('App\Qalternativa');
    }

    public function alternativa4()
    {
        return $this->belongsTo('App\Qalternativa');
    }

    public function serie()
    {
        return $this->belongsTo('App\Serie');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

    public function nivel()
    {
        return $this->belongsTo('App\Nivel');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function habilidade()
    {
        return $this->belongsTo('App\Habilidade');
    }
}
