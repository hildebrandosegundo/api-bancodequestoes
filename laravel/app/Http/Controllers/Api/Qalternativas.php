<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Qalternativas extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $reletionships = ['area', 'categoria', 'serie', 'habilidade', 'enunciado'];
    public function __construct(\App\Qalternativa $model)
    {
        $this->model = $model;
    }
}
