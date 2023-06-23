<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Respuestas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Respuestas>
 */
class RespuestasFactory extends Factory
{
    protected $model = Respuestas::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "descripcion" => $this -> faker -> name,
        ];
    }
}
