<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sextoform extends Model
{
    use HasFactory;
    protected $fillable = ['historia_superacao', 'historia_motivacao', 'user_id'];
}
