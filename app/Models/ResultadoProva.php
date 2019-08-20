<?php

namespace CPrado\Models;

use Illuminate\Database\Eloquent\Model;

class ResultadoProva extends Model
{
    protected $primaryKey = 'corredor_prova_id';
    protected $table = 'resultados_provas';
    protected $guarded = [];
    protected $dates = ['hora_conclusao_prova'];
}
