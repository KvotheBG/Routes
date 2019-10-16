<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'city_name' => 'required|unique:cities,name',
            'speed_limit' => 'required',
            'distance_km' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'city_name.required' => 'city name required',
            'city_name.unique' => 'this name alread exists',
            'speed_limit.required' => 'speed limit required',
            'distance_km.required' => 'distance required',
        ];
    }
}
