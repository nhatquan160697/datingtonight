<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fAvatar' => 'mimes:jpeg,png,jpg',
            'txtFullname' => 'required',
            'txtEmail' => 'required|email',
            'txtPhone' => 'required|digits_between:9,15',
            'txtBirthday' => 'required|date|before:today',
            'txtFacebook' => 'required',
            'height' => 'required|digits_between:2,3|min:1',
            'weight' => 'required|digits_between:2,3|min:1',
        ];
    }

    public function messages()
    {
        return [
            'fAvatar.mimes' => 'Just input jpeg, jpg and png type in your avatar',
            'txtFullname.required' => 'Please input your fullname',
            'txtEmail.required' => 'Please input your email',
            'txtEmail.email' => 'Your email is invalid',
            'txtPhone.required' => 'Please input your phone number',
            'txtPhone.digits_between' => 'Phone number is invalid',
            'txtBirthday.required' => 'Please choose birthday',
            'txtBirthday.before' => 'Birthday is invalid',
            'txtFacebook.required' => 'Please input your Facebook',
            'height.required' => 'Please input your height',
            'height.digits_between' => 'Your height: Please input at least two numbers and maximum three numbers',
            'weight.required' => 'Please input your weight',
            'weight.digits_between' => 'Your weight: Please input at least two numbers and maximum three numbers',
        ];
    }

}
