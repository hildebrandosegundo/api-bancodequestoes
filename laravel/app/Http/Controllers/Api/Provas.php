<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Provas extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $reletionships = ['area', 'serie', 'questao1', 'questao2','questao3','questao4','questao5','questao6','questao7','questao8','questao9', 'questao10',
        'questao11', 'questao12','questao13','questao14','questao15','questao16','questao17','questao18','questao19', 'questao20',
        'questao21', 'questao22','questao23','questao24','questao25','questao26','questao27','questao28','questao29', 'questao30',
        'questao31', 'questao32','questao33','questao34','questao35','questao36','questao37','questao38','questao39', 'questao40',
        'questao41', 'questao42','questao43','questao44','questao45','questao46','questao47','questao48','questao49', 'questao50'];
    public function __construct(\App\Prova $model)
    {
        $this->model = $model;
    }
}
