<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    use HasFactory;
    protected $fillable = [	'Rua', 'Bairro','Cidade', 'Estado','Pais','CEP', 'Numero', 'UF','user_id'];
}
