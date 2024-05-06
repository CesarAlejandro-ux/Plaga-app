<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoEmpresa extends Model
{
    protected $connection = "empresas_mysql";
    protected $table = 'infoempresa';
    protected $fillable = ['nombre', 'precio', 'estado', 'ciudad', 'idempresa'];
    use HasFactory;
}
