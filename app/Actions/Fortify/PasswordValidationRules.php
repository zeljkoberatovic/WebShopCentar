<?php

namespace App\Actions\Fortify;

use Illuminate\Validation\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    protected function passwordRules(): array
    {
        return [
            'required',
            'string',
            'min:8', // Minimum 8 karaktera
            'regex:/[a-z]/', // Bar jedno malo slovo
            'regex:/[A-Z]/', // Bar jedno veliko slovo
            'regex:/[0-9]/', // Bar jedan broj
            'regex:/[@$!%*?&]/', // Bar jedan specijalni karakter
            'confirmed',
        ];
    }
}
