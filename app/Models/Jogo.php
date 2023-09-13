<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $table = 'table_jogos';

    protected $fillable = ['name', 'category', 'description', 'image', 'favorite'];
}
