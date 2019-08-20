<?php

namespace CPrado\Http\Controllers;

use CPrado\Models\Corredor;

class Corredores extends Controller
{
    use \CPrado\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(Corredor $model)
    {
        $this->model = $model;
    }
}
