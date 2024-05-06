<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $connection = "empresas_mysql";
    protected $table = 'clientes';
    protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'idempresa'];
    use HasFactory;
}
