<?php

namespace App\Enum;

enum ReservationStatusEnum : string
{
    case expect = 'expect';
    case on_time = 'on_time';
    case finished = 'finished';
}
