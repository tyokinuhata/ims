<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;
use App\Models\User;
use Hash;

class ExtensionValidator extends Validator
{
    public function validatePasswordCheck($attribute, $value, $parameters)
    {
        $user_id = $this->getValue('user_id');
        $password = User::where('user_id', $user_id)->first()->password;
        return Hash::check($value, $password);
    }
}