<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'd_name' => $this->faker->name,
        ];
    }
}