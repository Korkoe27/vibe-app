<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{

    protected $model = Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'=>fake()->firstName(),
            'last_name'=>fake()->lastName(),
            'email'=>fake()->unique()->safeEmail(),
            'phone'=>fake()->unique()->phoneNumber(),
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'state'=>fake()->state(),
            'country'=>fake()->country(),
            'status'=>'active',
            'password'=>Hash::make('password')
        ];
    }
}
