<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidade extends Model
{
    protected $table = 'habilidades';
    protected $fillable = ['habilidade','categoria_id', 'codigo','serie_id', 'area_id'];
    public function serie(){
        return $this->belongsTo('App\Serie');
    }
    public function area(){
        return $this->belongsTo('App\Area');
    }
    public function categoria(){
        return $this->belongsTo('App\Categoria');
    }
}
