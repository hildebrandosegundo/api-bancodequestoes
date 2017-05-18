<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Questoes extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $reletionships = ['enunciado', 'alternativa1', 'alternativa2', 'alternativa3', 'alternativa4', 'serie', 'nivel', 'area', 'categoria', 'habilidade'];
    public function __construct(\App\Questao $model)
    {
        $this->model = $model;
    }
}
