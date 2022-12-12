<?php

namespace Database\Factories;

use App\Models\Resturant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user=User::all()->random();
        $resturant=Resturant::all()->random();
        $dateTime=fake()->dateTime('2 weeks');
        return [
            'user_id' => $user->id,
            'resturant_id' => $resturant->id,
            'user_name' => $user->name,
            'resturant_name' => $resturant->name,
            'reservation_code' => fake()->numerify('#######'),
            'reservation_start_time' => $dateTime,
            'reservation_start_time' => $dateTime
        ];
    }
}
