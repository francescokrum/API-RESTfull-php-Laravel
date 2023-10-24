<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'titulo',
        'autor',
        'classificacao',
        'resenha',
        'created_at',
        'updated_at',
    ];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
