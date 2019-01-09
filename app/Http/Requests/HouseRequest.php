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
            'description' => 'required|min:5',
            'content' => 'required|min:5',
            'price' => 'required|numeric',
            'address' => 'required|min:5',
            'status' => 'required|min:5',
            'image' => 'required|min:2',

        ];
    }
}
