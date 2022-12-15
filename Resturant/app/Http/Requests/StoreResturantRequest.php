<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResturantRequest extends FormRequest
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
            'name' => 'required|min:3|max:25',
            'address' => 'required|max:255',
            'manager_name' => 'required|max:25',
            'tel' => 'required|numeric|digits:8',
            'capacity' => 'required|integer|between:50,350',
            'free_capacity' => 'required|integer|between:0,350',
        ];
    }
}
