<?php

namespace App\Http\Requests;

use App\Rules\PasswordConfirmationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8|max:255',
            'password_confirmation' => [
                'required',
                'max:255',
                'min:8',
                new PasswordConfirmationRule($this->password),
            ],
        ];
    }
}
