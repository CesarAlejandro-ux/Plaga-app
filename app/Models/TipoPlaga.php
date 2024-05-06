<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPlaga extends Model
{
    protected $connection = "plagas_mysql";
    protected $table = 'tipoplaga';
    protected $fillable = ['nombre', 'descripcion'];
    use HasFactory;
}
