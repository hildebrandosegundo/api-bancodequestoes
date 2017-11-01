<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Nivels extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $reletionships = ['area', 'serie'];
    public function __construct(\App\Nivel $model)
    {
        $this->model = $model;
    }
}
