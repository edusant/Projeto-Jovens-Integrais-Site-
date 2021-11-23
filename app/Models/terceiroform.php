<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class terceiroform extends Model
{
    use HasFactory;
    protected $fillable = ['cargo','status_trabalho', 'com_quem_mora', 'renda', 'quatidade_moradores_na_casa', 'ultimo_cargo', 'user_id'];
}
