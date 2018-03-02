<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Pquestao extends Model
{
    protected $table = 'user_pquestao';
    protected $fillable = ['user_id', 'pquestao_id'];


    public function user()
    {
        return $this->belongsTo('App\Useer');
    }
    public function pquestao()
    {
        return $this->belongsTo('App\Pquestao');
    }
}
