<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quintoform extends Model
{
    use HasFactory;
    protected $fillable = ['grau', 'periodo', 'user_id'];

}
