<?php

namespace Database\Seeders;

use App\Models\TicketType;
use Database\Factories\TicketTypeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketType::factory(7)->create();
    }
}
