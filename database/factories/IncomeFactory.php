<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class IncomeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'income_type_id' => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->sentence(),
            'amount' => $this->faker->numberBetween(2000, 10000)
        ];
    }
}
