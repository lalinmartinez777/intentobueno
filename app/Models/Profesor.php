<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'profesores';

    // Definir los campos asignables en masa
    protected $fillable = [
        'nombre',
        'email',
        'especialidad',
    ];

    // Relación Uno a Muchos: Un profesor puede impartir muchas clases
    public function clases()
    {
        return $this->hasMany(Clase::class, 'profesor_id');
    }
}
