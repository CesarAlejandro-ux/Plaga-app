<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plaga extends Model
{
    protected $connection = "plagas_mysql";
    protected $table = 'plaga';
    protected $fillable = ['nombre', 'descripcion', 'habitat', 'imagen', 'idtipoplaga'];
    use HasFactory;
}
