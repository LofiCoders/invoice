<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'invoice_number' => $this->faker->word(),
            'invoice_date' => Carbon::now(),
            'due_date' => Carbon::now(),
            'subtotal' => $this->faker->randomNumber(),
            'tax' => $this->faker->randomNumber(),
            'total' => $this->faker->randomNumber(),
            'notes' => $this->faker->word(),
            'status' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'customer_id' => Customer::factory(),
        ];
    }
}
