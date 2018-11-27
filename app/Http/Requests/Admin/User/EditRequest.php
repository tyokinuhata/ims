<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'new_user_id' => [ 'required', 'string', 'min:1', 'max:13', 'regex:/^[a-zA-Z0-9_]+$/', 'unique:users', ],
            'username' => [ 'required', 'string', 'min:1', 'max:20', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'email' => [ 'required', 'string', 'email', 'min:1', 'max:255', ],
            'address' => [ 'required', 'string', 'min:1', 'max:50', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'sex' => [ 'required', 'in:man,woman,other', ],
            'age' => [ 'required', 'digits_between:0,150', 'max:3' ],
            'password' => [ 'required', 'string', 'min:6', 'regex:/^[a-zA-Z0-9_]+$/', 'password_check' ],
        ];
    }

    public function messages()
    {
        return [
            'required' => '必須項目です。',
            'string' => '文字列を入力してください.',
            'email' => 'メールアドレスの形式で入力してください。',
            'new_user_id.min' => '1文字以上を入力してください。',
            'new_user_id.max' => '13文字以下で入力してください。',
            'new_user_id.regex' => 'ユーザIDは英数字でに有力してください。',
            'username.min' => '1文字以上を入力してください。',
            'username.max' => '20文字以下で入力してください。',
            'email.min' => '1文字以上を入力してください。',
            'email.max' => '255文字以下で入力してください。',
            'address.min' => '1文字以上を入力してください。',
            'address.max' => '50文字以下で入力してください。',
            'sex.in' => '予期しない性別です。',
            'age.digits_between' => '0 ~ 150の間で入力してください。',
            'age.max' => '3桁以下で入力してください。',
            'password.min' => '6文字以下で入力してください。',
            'password.regex' => 'ユーザIDは英数字でに有力してください。',
        ];
    }
}
