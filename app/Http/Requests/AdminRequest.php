<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'username' => 'required|unique:administrator',
            'txtPassword' => 'required',
            'txtFullname' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Please enter username',
            'username.unique' => 'Username must unique',
            'txtPassword.required' => 'Please enter password',
            'txtFullname.required' => 'Please enter fullname',
        ];
    }
}
