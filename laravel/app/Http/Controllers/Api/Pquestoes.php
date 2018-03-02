<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Pquestoes extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $reletionships = ['serie', 'nivel', 'area', 'categoria', 'habilidade', 'user'];
    public function __construct(\App\Pquestao $model)
    {
        $this->model = $model;
    }
}
