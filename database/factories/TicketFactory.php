<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{

    protected $model = Ticket::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id'=> Booking::inRandomOrder()->first()->id,
            'ticket_number'=>fake()->unique()->numerify('Tkt####'),
            'qr_code'=>fake()->unique()->isbn10(),
            'status'=>'valid',
            'is_checked_in'=>false
        ];
    }
}
