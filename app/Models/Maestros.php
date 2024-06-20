<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maestros extends Model
{

    protected $table = 'maestros';
    protected $fillable = [
        'nombre',
        'direccion',
        'correo',
        'telefono',
        'materia'
    ];
    use HasFactory;
}
