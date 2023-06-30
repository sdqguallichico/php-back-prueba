<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    use HasFactory;
    protected $table = "respuestas";
    protected $fillable= [
        "descripcion",
        "preguntas_id",
        "encuestas_id"
     ];

    //relaciones
    public function preguntas(){
        return $this->belongsTo(Preguntas::class);
    }
    public function encuestas(){
        return $this->belongsTo(Encuestas::class);
    }
}
