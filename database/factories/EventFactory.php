<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Event;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{

    protected $model = Event::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(3),
            'slug'=>fake()->unique()->word(1),
            'description'=>fake()->sentence(10),
            'organization_id'=>Organization::inRandomOrder()->first()->id,
            'categories_id'=>Categories::inRandomOrder()->first()->id,
        ];
    }
}
