<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Series extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    public function __construct(\App\Serie $model)
    {
        $this->model = $model;
    }
}
