<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qenunciado extends Model
{
    protected $table = 'enunciados';
    protected $fillable = ['enunciado', 'imagem', 'idserie', 'idarea', 'idcategoria', 'idhabilidade', 'idnivel'];
    public function serie(){
        return $this->belongsTo('App\Serie');
    }
    public function area(){
        return $this->belongsTo('App\Area');
    }
    public function nivel(){
        return $this->belongsTo('App\Nivel');
    }
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
    public function habilidade(){
        return $this->belongsTo('App\Habilidade');
    }
}
