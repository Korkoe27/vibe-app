<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{

    protected $model = Media::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id'=>Event::inRandomOrder()->first()->id,
            'file_path'=>fake()->imageUrl(640, 480, 'business', true),
            'file_type'=>fake()->randomElement(['image', 'video', 'audio']),
            'is_featured'=>false
        ];
    }
}
