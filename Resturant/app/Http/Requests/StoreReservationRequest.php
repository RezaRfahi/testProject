<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer|exists:users,id',
            'resturant_id' => 'required|integer|exists:resturants,id',
            'person_count' => 'required|integer|max:350',
            'reservation_start_time' => 'required|date_format:Y-m-d H:i:s|after_or_equal:' . date(DATE_ATOM),
            'reservation_finish_time' => 'required|date_format:Y-m-d H:i:s|after_or_equal:' . date(DATE_ATOM),
        ];
    }
}
