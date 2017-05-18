<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Provas extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $reletionships = ['area', 'serie', 'questao1', 'questao2','questao3','questao4','questao5','questao6','questao7','questao8','questao9', 'questao10'];
    public function __construct(\App\Prova $model)
    {
        $this->model = $model;
    }
}
