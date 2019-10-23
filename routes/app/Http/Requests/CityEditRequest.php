<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CityEditRequest extends FormRequest
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
       $city_id = request()->route('city');

        return [
            'name' => 'required|unique:cities,name,'.$city_id.',id',
            'speed_limit' => 'required',
            'distance' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'city name required',
            'name.unique' => 'this name already exist',
            'speed_limit.required' => 'speed limit required',
            'distance.required' => 'distance required',
        ];
    }
}
