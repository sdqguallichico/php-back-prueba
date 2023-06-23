<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Preguntas;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Preguntas>
 */
class PreguntasFactory extends Factory
{
    protected $model = Preguntas::class;
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
