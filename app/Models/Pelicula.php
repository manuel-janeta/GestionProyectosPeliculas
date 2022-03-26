<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'actores',
        'sinopsis',
        'imagen',
        'duracion',
        'categoria_id',
    ];

    //Relación: Obtener la información de la categoría mediante la clave foránea
    public function categoriaPelicula()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
     //Relación: Obtener la información del usuario que creó la pelicula mediante la clave foránea
     public function autorPelicula(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
