<?php

namespace App\Http\Requests\Admin\Operate\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ユーザ操作系 > ユーザ追加
 *
 * Class AddRequest
 * @package App\Http\Requests\Admin\Operate
 */
class AddRequest extends FormRequest
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
            'user_id' => [ 'required', 'string', 'min:1', 'max:13', 'regex:/^[a-zA-Z0-9_]+$/', 'unique:users', ],
            'username' => [ 'required', 'string', 'min:1', 'max:20', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'password' => [ 'required', 'string', 'min:6', 'regex:/^[a-zA-Z0-9_]+$/', 'confirmed', ],
            'email' => [ 'required', 'string', 'email', 'min:1', 'max:255', ],
            'address' => [ 'required', 'string', 'min:1', 'max:50', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'sex' => [ 'required', 'in:man,woman,other', ],
            'age' => [ 'required', 'digits_between:0,150', 'min:1', 'max:3', ],
            'type' => [ 'required', 'in:admin,employee', ],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'required' => '必須項目です。',
            'string' => '文字列を入力してください。',
            'email' => 'メールアドレスの形式で入力してください。',
            'min' => '1文字以上を入力してください。',
            'user_id.max' => '13文字以下で入力してください。',
            'user_id.regex' => 'ユーザIDは英数字でに有力してください。',
            'username.max' => '20文字以下で入力してください。',
            'password.regex' => 'ユーザIDは英数字でに有力してください。',
            'email.max' => '255文字以下で入力してください。',
            'address.max' => '50文字以下で入力してください。',
            'sex.in' => '予期しない性別です。',
            'age.digits_between' => '0 ~ 150の間で入力してください。',
            'age.max' => '3桁以下で入力してください。',
            'type.in' => '予期しないアカウント種別です。',
        ];
    }
}
