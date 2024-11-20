<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'profesor_id',
    ];

    // Relación Muchos a Uno: Una clase tiene un único profesor
    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'profesor_id');
    }

    // Relación Muchos a Muchos: Una clase tiene muchos estudiantes
    public function estudiantes()
    {
        return $this->belongsToMany(User::class, 'clase_estudiante', 'clase_id', 'user_id');
    }

    // Relación Muchos a Muchos: Una clase puede ser asignada a varios profesores
    public function profesores()
    {
        return $this->belongsToMany(Profesor::class, 'clase_profe', 'clase_id', 'profesor_id');
    }
}
