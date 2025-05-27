<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{

    protected $model = Organization::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->company(),
            'email'=>fake()->unique()->safeEmail(),
            'phone'=>fake()->unique()->phoneNumber(),
            'logo'=>fake()->imageUrl(640, 480, 'business', true),
            'website'=>fake()->url(),
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'state'=>fake()->state(),
            'country'=>fake()->country(),
            'status'=>'active'
        ];
    }
}
