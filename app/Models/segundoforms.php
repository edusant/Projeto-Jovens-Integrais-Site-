<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class segundoforms extends Model
{
    use HasFactory;
    protected $fillable = ['nome_responsavel', 'telefone_responsavel', 'nascimento_responsavel', 'grau_de_parentesco', 'user_id'];
}
