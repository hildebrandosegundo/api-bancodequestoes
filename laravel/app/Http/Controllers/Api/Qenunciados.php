<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Qenunciados extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $reletionships = ['area', 'categoria', 'serie', 'habilidade'];
    public function __construct(\App\Qenunciado $model)
    {
        $this->model = $model;
    }
}
