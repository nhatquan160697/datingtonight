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
            'username' => 'required|unique:administrator|min:3|max:6',
            'txtPassword' => 'required|min:6|max:20',
            'txtFullname' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Please enter username',
            'username.unique' => 'Username must unique',
            'username.max' => 'Can not input username more than 50 characters',
            'username.min' => 'Can not input username less than 3 characters',
            'txtPassword.required' => 'Please enter password',
            'txtPassword.max' => 'Can not input pasword more than 50 characters',
            'txtPassword.min' => 'Can not input pasword less than 3 characters',
            'txtFullname.required' => 'Please enter fullname',
        ];
    }
}
