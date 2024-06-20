<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    protected $table = 'clases';
    protected $fillable = [
        'materia',
        'horario',
        'idMaestro'
    ];
    use HasFactory;
}
