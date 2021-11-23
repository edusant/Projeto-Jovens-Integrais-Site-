<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class turmas extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'data_inicio_periodo', 'data_fim_periodo', 'data_inicio_aulas', 'data_fim_da_inscricao', 'horario_das_aulas', 'descricao', 'user_id'];
}
