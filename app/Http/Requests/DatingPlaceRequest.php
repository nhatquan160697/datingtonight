<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatingPlaceRequest extends FormRequest
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
            'name_place' => 'required|unique:datingplaces',
            'txtPreview' => 'required',
            'txtDetail' => 'required',
            'fImages' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name_place.required' => 'Please enter name of place',
            'name_place.unique' => 'Name of place must unique',
            'txtPreview.required' => 'Please enter preview text',
            'txtDetail.required' => 'Please enter detail place',
            'fImages.required' => 'Please insert an image',
        ];
    }
}
