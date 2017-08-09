<?php

namespace App\Http\Controllers\Api;

use \App\Conta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContasController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = ['banco'];

    public function __construct(\App\Conta $model)
    {
        $this->model = $model;
    }
}
