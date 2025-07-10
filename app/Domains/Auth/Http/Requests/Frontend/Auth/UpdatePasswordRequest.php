<?php

namespace App\Domains\Auth\Http\Requests\Frontend\Auth;

use App\Domains\Auth\Rules\UnusedPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;


/**
 * Class UpdatePasswordRequest.
 */
class UpdatePasswordRequest extends FormRequest
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
            'current_password' => ['required', 'max:100'],
            'password' => [
                'required',
                'string',
                'max:100',
                Password::min(8)  // Define minimum length
                    ->mixedCase() // Require upper and lower case letters
                    ->letters()   // Require at least one letter
                    ->numbers()   // Require at least one number
                    ->symbols()   // Require at least one symbol
                    ->uncompromised(), // Check if the password has been exposed in a data breach
            ],
        ];
    }
}
