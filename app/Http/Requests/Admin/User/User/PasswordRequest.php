<?php

namespace App\Http\Requests\Admin\User\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ユーザ系 > パスワード変更
 *
 * Class PasswordRequest
 * @package App\Http\Requests\Admin\User
 */
class PasswordRequest extends FormRequest
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
            'user_id' => [ 'required', 'string', 'min:1', 'max:13', 'regex:/^[a-zA-Z0-9_]+$/', ],
            'current_password' => [ 'required', 'string', 'min:6', 'regex:/^[a-zA-Z0-9_]+$/', 'password_check' ],
            'new_password' => [ 'required', 'string', 'min:6', 'regex:/^[a-zA-Z0-9_]+$/', 'confirmed', ],
        ];
    }

    public function messages()
    {
        return [
            'required' => '必須項目です。',
            'string' => '文字列を入力してください。',
            'user_id.min' => '1文字以上を入力してください。',
            'user_id.max' => '13文字以下で入力してください。',
            'user_id.regex' => 'ユーザIDは英数字でに有力してください。',
            'current_password.min' => '6文字以下で入力してください。',
            'current_password.regex' => 'ユーザIDは英数字でに有力してください。',
            'new_password.min' => '6文字以上で入力してください。',
            'new_password.regex' => 'ユーザIDは英数字でに入力してください。',
            'new_password.confirmed' => '新しいパスワードと新しいパスワード(確認)が一致しません。',
        ];
    }
}
