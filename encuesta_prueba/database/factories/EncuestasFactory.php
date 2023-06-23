<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Encuestas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Encuestas>
 */
class EncuestasFactory extends Factory
{
    protected $model = Encuestas::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nombre_institucion" => $this -> faker -> name,
            "actividad_realizada" => $this -> faker -> name,
            "docente_tutor"=> $this -> faker -> name,
            "tutor_entidad_financiera" => $this -> faker -> name,
            "proyecto" => $this -> faker -> name,
            "codigo_proyecto" => $this -> faker -> name,
            "genero" => $this -> faker -> name,
            "rango_edad" => $this -> faker -> name,
            "fecha" => $this -> faker -> date($format = 'Y-m-d', $max = 'now'),
            "objetivo" => $this -> faker -> name,
            "instructivo" => $this -> faker -> name,
            "informacion_general" => $this -> faker -> name,
            "tipo" => $this -> faker -> name,
        ];
    }
}
