<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'nivels';
    protected $fillable = ['idserie', 'idarea', 'nivel'];

    public function serie()
    {
        return $this->belongsTo('App\Serie');
    }

    public function area()
    {
        return $this->belongsTo('App\Area');
    }

}
