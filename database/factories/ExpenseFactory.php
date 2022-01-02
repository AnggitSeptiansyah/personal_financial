<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'expense_type_id' => $this->faker->numberBetween(1, 3),
            'description' => $this->faker->sentence(),
            'amount' => $this->faker->numberBetween(2000, 10000)
        ];
    }
}
