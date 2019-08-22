<?php

namespace CPrado\Http\Controllers;

use Illuminate\Http\Request;
use CPrado\Models\CorredorProva;

class CorredoresProvas extends Controller
{
    use \CPrado\Http\Controllers\ApiControllerTrait;

    protected $model;
      protected $relationships = ['corredores', 'provas'];

    public function __construct(CorredorProva $model)
    {
        $this->model = $model;
    }
}
