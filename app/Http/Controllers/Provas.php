<?php

namespace CPrado\Http\Controllers;

use CPrado\Models\ProvaCorrida;

class Provas extends Controller
{
    use \CPrado\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(ProvaCorrida $model)
    {
        $this->model = $model;
    }
}
