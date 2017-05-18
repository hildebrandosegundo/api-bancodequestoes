<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['categoria','idserie', 'idarea'];
    public function serie(){
        return $this->belongsTo('App\Serie');
    }
    public function area(){
        return $this->belongsTo('App\Area');
    }

}
