<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pquestao extends Model
{
    protected $table = 'pquestoes';
    protected $fillable = ['enunciado', 'imagem', 'alternativa1', 'imagemAl1', 'alternativa2', 'imagemAl2', 'alternativa3', 'imagemAl3', 'alternativa4', 'imagemAl4', 'alternativa5', 'imagemAl5', 'idserie', 'idnivel', 'idarea', 'idcategoria', 'idhabilidade'];

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
