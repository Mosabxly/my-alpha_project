<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rio>
 */
class RioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name,
            'description'=>$this->faker->sentence,
            'price'=>$this->faker->randomFloat(2,1,1000),
            'quantity'=>$this->faker->numberBetween(1,1000),
        ];
    }
}
