<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\TicketType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TicketType>
 */
class TicketTypeFactory extends Factory
{

    protected $model = TicketType::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $types = ['VIP','Regular','Early Bird', 'Group', 'Student', 'Family','Reserved','Multi-Day Pass'];
        return [
            'event_id'=>Event::inRandomOrder()->first()->id,
            'name'=>fake()->unique()->randomElement($types),
            'description'=>fake()->sentence(10),
            'price'=>fake()->randomFloat(2,10,1000),
            'quantity'=>fake()->randomNumber(5,false),
            'available_quantity'=>fake()->randomNumber(5,false),
            'max_per_booking'=>fake()->randomNumber(2,false),
            'sale_start_date'=>fake()->dateTimeBetween('now', '+1 month'),
            'sale_end_date'=>fake()->dateTimeBetween('+1 month', '+2 months'),
            'currency'=>fake()->randomElement(['GHC','USD','EUR','NGN','BTC']),
            'status'=>'active'
        ];
    }
}
