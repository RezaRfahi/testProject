<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class Resturant extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return
        [
                'id' => $this->id,
                'name' => $this->name,
                'address' => $this->address,
                'manager_name' => $this->manager_name,
                'tel' => $this-> tel,
                'capacity' => $this->capacity,
                'free_capacity' => $this->free_capacity,
                'vote' => $this->vote
        ];
//            parent::toArray($request);
    }

    public function with($request)
    {
        return ['status' => JsonResponse::HTTP_OK];
    }
}
