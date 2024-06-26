<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $table = 'alumnos';
    protected $fillable = [
        'nombre',
        'direccion',
        'correo',
        'telefono'
    ];
    use HasFactory;
}
