<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'customer_number' => 'CUST-' . $this->faker->unique()->numberBetween(1000, 9999),
            'company_name' => $this->faker->company(),
            'fiscal_data' => 'RFC: ' . strtoupper($this->faker->lexify('????')) . $this->faker->numerify('######'),
            'delivery_address' => $this->faker->address(),
        ];
    }
}