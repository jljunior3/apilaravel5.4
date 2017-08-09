<?php

namespace App\Http\Controllers\Api;

use App\Banco;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BancosController extends Controller
{
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;
    protected $relationships = [];

    public function __construct(\App\Banco $model)
    {
        $this->model = $model;
    }
}
