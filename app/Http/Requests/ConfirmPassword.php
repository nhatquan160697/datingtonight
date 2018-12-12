<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfirmPassword extends FormRequest
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
            'txtOldPassword' => 'required',
            'txtNewPassword' => 'required|min:8|max:16',
            'txtConfirmPassword' => 'required|same:txtNewPassword',
        ];
    }

    public function messages()
    {
        return [
            'txtOldPassword.required' => 'Please input old password',
            'txtNewPassword.required' => 'Please input new password',
            'txtNewPassword.min' => 'You should input your password maximum 16 characters and minimum 8 characters',
            'txtNewPassword.max' => 'You should input your password maximum 16 characters and minimum 8 characters',
            'txtConfirmPassword.required' => 'Please input confirming password',
            'txtConfirmPassword.same' => 'Confirm password is invalid',
        ];
    }
}
