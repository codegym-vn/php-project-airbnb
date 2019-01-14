<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HouseRequest extends FormRequest
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
            'title' => 'required|min:5',
            'quantityOfBedroom' => 'required',
            'quantityOfBathroom' => 'required',
            'price' => 'required|numeric',
            'address' => 'required|min:5',
            'status' => 'required',
            'description' => 'required|min:5',
            'image' => 'required',
            'image1' => 'required',
            'image2' => 'required',

        ];
    }
}
