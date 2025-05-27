<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{

    protected $model = Categories::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $names = ['Concerts & Music','Conferences & Seminars','Workshops & Training','Festivals & Fairs','Sports & Fitness','Arts & Theatre','Networking & Meetups','Business & Tech','Parties & Nightlife','Charity & Causes','Religious & Spiritual','Food & Drink','Fashion & Beauty','Family & Kids','Health & Wellness','Film & Media','Government & Politics','Holiday & Seasonal','Virtual Events','Educational Events'];
        return [
            //
            'name'=>fake()->unique()->randomElement($names),
            'slug'=>fake()->unique()->word(),
            'description'=>fake()->sentence(5),
            'status'=>'active'
        ];
    }
}
