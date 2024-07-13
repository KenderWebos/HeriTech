<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // Listas de palabras
        $pre = ['charla', 'taller', 'celebracion'];
        $post = ['economia', 'ingenieria', 'desarrollo'];

        // Concatenación de las palabras seleccionadas
        $titulo = $this->faker->randomElement($pre) . ' de ' . $this->faker->randomElement($post);
        $estado_solicitud = $this->faker->boolean();
        $revisado = $this->faker->boolean();
        $duracion = $this->faker->numberBetween(30,120);
        $id_ubicacion = $this->faker->numberBetween(1,9);
        return [
            'fecha' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'titulo' => $titulo,
            'descripcion' => "a simple event for ".$titulo."",
            'duracion' => $duracion,
            'id_ubicacion' => $id_ubicacion,
            'estado_solicitud' => $estado_solicitud,
            'revisado' => $revisado,
            'id_generador'=> 1,
        ];
    }
}
