<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Database\Factories\ReservationFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::factory()->count(5)->create();
    }
}
