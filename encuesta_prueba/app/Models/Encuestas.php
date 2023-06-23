<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model
{
    use HasFactory;
    protected $table = "encuestas";
    protected $fillable= [
        "nombre_institucion",
        "actividad_realizada",
        "docente_tutor",
        "tutor_entidad_financiera",
        "proyecto",
        "codigo_proyecto",
        "genero",
        "rango_edad",
        "fecha",
        "objetivo",
        "instructivo",
        "informacion_general",
        "tipo"

    ];

    //relaciones
    
}
