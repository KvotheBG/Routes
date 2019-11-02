<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoadEditRequest extends FormRequest
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
            'city_x_id' => 'required',
            'city_y_id' => 'required|different:city_x_id',
            'road_type_id' => 'required',
            'speed_limit' => 'required|numeric|integer|gt:1|lte:360',
            'distance' => 'required|numeric|gt:1'
        ];
    }

    public function messages()
    {
        return [
            'city_x_id.required' => 'City X is required.',
            'city_y_id.required' => 'City Y is required.',
            'city_y_id.different' => 'City Y cannot be the same as City X.',
            'road_type_id.required' => 'The road type field is required!'
        ];
    }
}
