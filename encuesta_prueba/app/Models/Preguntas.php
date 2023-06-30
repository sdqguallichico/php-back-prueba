<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    protected $table = "preguntas";
    protected $fillable= [
        "descripcion",
        "encuestas_id"
    ];


    //relaciones
    public function encuestas(){
        return $this->belongsTo(Encuestas::class);
    }


    public function respuestas(){
        return $this->hasMany(Respuestas::class);
     }


}
