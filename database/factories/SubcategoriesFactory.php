<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Subcategories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subcategories>
 */
class SubcategoriesFactory extends Factory
{

    protected $model = Subcategories::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categories_id'=>Categories::inRandomOrder()->first()->id,
            'name'=>fake()->unique()->word(),
            'slug'=>fake()->slug(),
            'description'=>fake()->sentence(),
            'thumbnail'=>fake()->imageUrl(640, 480, 'business', true),
            'status'=>'active',
        ];
    }
}
