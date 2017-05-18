<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Habilidades extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $reletionships = ['area', 'categoria', 'serie'];
    public function __construct(\App\Habilidade $model)
    {
        $this->model = $model;
    }
}
