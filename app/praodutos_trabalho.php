<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class praodutos_trabalho extends Model
{
    use HasFactory;
    protected $table= 'produtos_e_servicos';
    protected $guarded = ['id'];
    protected $fillable = [
        	'nome',	'descricao', 'status', 'preço',	'promocao',	'ficha_tecnica', 'user_id'
    ];
}
