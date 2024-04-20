<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The field is required',
            'name.string' => 'String is required',
            'email.required' => 'The field is required',
            'email.email' => 'Email is required: user@mail.com',
            'email.unique' => 'This email user already exist',
            'password.required' => 'The field is required',
            'password.string' => 'String is required',
        ];
    }
}
