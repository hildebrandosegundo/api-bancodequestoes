<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Categorias extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $reletionships = ['area', 'serie'];
    public function __construct(\App\Categoria $model)
    {
        $this->model = $model;
    }
}
