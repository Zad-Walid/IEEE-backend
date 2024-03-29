<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'status' => $this->faker->boolean(),
            'amount' => $this->faker->randomNumber() ,
            'billedDate' => $this->faker->date('Y-m-d'),
            'paidDate' => $this->faker->date('Y-m-d')
        ];
    }
}
