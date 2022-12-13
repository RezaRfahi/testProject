<?php

namespace Database\Factories;

use App\Enum\ReservationStatusEnum as Status;
use App\Models\Reservation;
use App\Models\Resturant;
use App\Models\User;
use Carbon\Carbon;
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

    protected $model= Reservation::class;

    public function definition()
    {
        $user=User::all()->random();

        $resturant=Resturant::all()->random();

        $starts_at = Carbon::createFromTimestamp(fake()
            ->dateTimeBetween($startDate = '+2 days', $endDate = '+1 week')->getTimeStamp()) ;

        $ends_at= Carbon::createFromFormat('Y-m-d H:i:s', $starts_at)->
        addHours( fake()->numberBetween( 1, 4 ) );

        return [
            'user_id' => $user->id,
            'resturant_id' => $resturant->id,
            'user_name' => $user->name,
            'resturant_name' => $resturant->name,
            'reservation_code' => fake()->numerify('#######'),
            'table_number' => rand(0,80),
            'reservation_start_time' => $starts_at,
            'reservation_finish_time' => $ends_at,
            'status' => fake()->randomElement(['expect', 'finished', 'on_time'])
        ];
    }
}
