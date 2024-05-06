<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $connection = "empresas_mysql";
    protected $table = 'empresa';
    protected $fillable = ['telefono', 'direccion', 'codigopostal', 'ciudad', 'estado'];
    use HasFactory;
}
