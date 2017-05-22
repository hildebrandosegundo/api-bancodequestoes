<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qalternativa extends Model
{
    protected $table = 'alternativas';
    protected $fillable = ['alternativa', 'descricao', 'imagem', 'enunciado_id', 'serie_id', 'area_id', 'categoria_id', 'habilidade_id', 'correta'];
    public function serie(){
        return $this->belongsTo('App\Serie');
    }
    public function area(){
        return $this->belongsTo('App\Area');
    }
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
    public function habilidade(){
        return $this->belongsTo('App\Habilidade');
    }
    public function enunciado(){
        return $this->belongsTo('App\Qenunciado');
    }
}
