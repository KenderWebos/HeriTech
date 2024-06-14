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
        
        $latitud = $this->faker->latitude(0,0);
        $longitud = $this->faker->longitude(0,0);

        return [
            'fecha' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'titulo' => $titulo,
            'descripcion' => "a simple event for ".$titulo."",
            'latitud' => $latitud,
            'longitud' => $longitud,
        ];
    }
}
