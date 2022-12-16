<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class Reservation extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'user_name' => $this->user_name,
            'resturant_name' => $this->resturant_name,
            'person_count' => $this->person_count,
            'table_number' => $this->table_number,
            'reservation_start_time' => $this->reservation_start_time,
            'reservation_finish_time' => $this->reservation_finish_time
        ];
    }
}
