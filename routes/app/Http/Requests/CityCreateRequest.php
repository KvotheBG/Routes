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
            'name' => 'required|unique:cities,name',
            'speed_limit' => 'required',
            'distance' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'city name required',
            'name.unique' => 'this name alread exists',
            'speed_limit.required' => 'speed limit required',
            'distance.required' => 'distance required',
        ];
    }
}
