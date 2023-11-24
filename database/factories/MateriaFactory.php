<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\materia>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

       
        $nombre= $this->faker->name();
        $semestre= $this->faker->boolean();
        $especialidad= $this->faker->numberBetween(18,90);
        return [

            'nombre'=> $nombre,
            'edad'=> $edad,
            'nc' => $nc,
            'sexo' => $sexo
        ];
    }
}
