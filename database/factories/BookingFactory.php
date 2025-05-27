<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Event;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    protected $model = Booking::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::inRandomOrder()->first()->id,
            'event_id' => Event::inRandomOrder()->first()->id,
            'organization_id' => Organization::inRandomOrder()->first()->id,
            'booking_number' => $this->generateBookingNumber(),
            'total_amount' => $this->faker->randomFloat(2, 10, 1000),
            'fee_amount' => $this->faker->randomFloat(2, 0, 100),
            'status' => 'confirmed',
            'payment_status' => 'pending',
        ];
    }

    private function generateBookingNumber()
    {
        $date = $this->faker->date('d_m');
        $prefix = 'BKNG';
        $rand = $this->faker->unique()->numberBetween(1000, 9999);

        return "{$date}-{$prefix}-{$rand}";
    }
}