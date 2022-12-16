<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id', 'resturant_id', 'user_name', 'resturant_name','reservation_code',
        'table_number', 'person_count', 'reservation_start_time', 'reservation_finish_time'
    ];
}
