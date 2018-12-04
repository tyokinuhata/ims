<?php

namespace App\Http\Validators;

use Illuminate\Validation\Validator;
use App\Models\User;
use Hash;

/**
 * バリデーションの拡張を行う
 *
 * Class ExtensionValidator
 * @package App\Http\Validators
 */
class ExtensionValidator extends Validator
{
    /**
     * フォームから送信された現在のパスワードとDBに格納されているパスワードが等しいかどうかの検証を行う
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return mixed
     */
    public function validatePasswordCheck($attribute, $value, $parameters)
    {
        $user_id = $this->getValue('user_id');
        $password = User::where('user_id', $user_id)->first()->password;
        return Hash::check($value, $password);
    }
}