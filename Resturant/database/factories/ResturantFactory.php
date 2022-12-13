<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resturant>
 */
class ResturantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->colorName(),
            'address' => fake()->streetName(),
            'manager_name' => fake()->name(),
            'tel' => fake()->numerify('###-#########'),
            'table_count' => rand(20,100),
            'unoccupied_table' => rand(0,80),
            'vote' => rand(0,150)
        ];
    }
}
