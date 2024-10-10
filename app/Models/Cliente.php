<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'cliente';  // El nombre de la tabla en la base de datos

    protected $fillable = ['nombre', 'email', 'puntos'];  // Campos que se pueden llenar

    public $timestamps = false;  // Si no tienes timestamps en tu tabla
}
