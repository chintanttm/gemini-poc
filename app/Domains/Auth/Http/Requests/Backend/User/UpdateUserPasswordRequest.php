<?php

namespace App\Domains\Auth\Http\Requests\Backend\User;

use App\Domains\Auth\Rules\UnusedPassword;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;


/**
 * Class UpdateUserPasswordRequest.
 */
class UpdateUserPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return ! ($this->user->isMasterAdmin() && ! $this->user()->isMasterAdmin());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => [
                'required',
                'string',
                'max:100',
                new UnusedPassword((int) $this->segment(4)),
                Password::min(8)  // Define minimum length
                    ->mixedCase() // Require upper and lower case letters
                    ->letters()   // Require at least one letter
                    ->numbers()   // Require at least one number
                    ->symbols()   // Require at least one symbol
                    ->uncompromised(), // Check if the password has been exposed in a data breach
            ],
        ];
    }

    /**
     * Handle a failed authorization attempt.
     *
     * @return void
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    protected function failedAuthorization()
    {
        throw new AuthorizationException(__('Only the administrator can change their password.'));
    }
}
