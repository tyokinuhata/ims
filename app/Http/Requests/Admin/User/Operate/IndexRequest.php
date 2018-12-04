<?php

namespace App\Http\Requests\Admin\Operate\User;

use Illuminate\Foundation\Http\FormRequest;

/**
 * ユーザ操作系 > ユーザ検索
 *
 * Class IndexRequest
 * @package App\Http\Requests\Admin\Operate
 */
class IndexRequest extends FormRequest
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
            'user_id' => [ 'sometimes', 'required', 'string', 'min:1', 'max:13', 'regex:/^[a-zA-Z0-9_]+$/', ],
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'min' => '1文字以上を入力してください。',
            'max' => '13文字以下で入力してください。',
            'regex' => 'ユーザIDは英数字でに有力してください。',
        ];
    }
}
