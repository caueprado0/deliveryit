<?php

namespace CPrado\Models;

use Illuminate\Database\Eloquent\Model;

class CorredorProva extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'corredores_provas';
    protected $guarded = ['id'];
}
