<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Customer;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'invoice_number' => 'INV-' . $this->faker->unique()->numberBetween(10000, 99999),
            'customer_number' => Customer::factory(),
            'order_date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'delivery_address' => $this->faker->address(),
            'status' => $this->faker->randomElement(['Ordered', 'In process', 'In route', 'Delivered']),
            'notes' => $this->faker->optional()->sentence(),
            'is_deleted' => false,
        ];
    }
}