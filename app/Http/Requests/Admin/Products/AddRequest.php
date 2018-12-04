<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 商品系 > 商品登録
 *
 * Class AddRequest
 * @package App\Http\Requests\Admin\Products
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
            'name' => [ 'required', 'string', 'min:1', 'max:30', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'description' => [ 'required', 'string', 'min:1', 'max:500', 'regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/', ],
            'price' => [ 'required', 'digits_between:0,9999999', 'max:7', ],
            'category' => [ 'required', 'in:1,2,3,4,5,6,7,8,9,10,11', ],
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
            'min' => '1文字以上を入力してください。',
            'name.max' => '30文字以下で入力してください。',
            'description.max' => '500文字以下で入力してください。',
            'digits_between' => '0 ~ 9999999の間で入力してください。。',
            'digits.max' => '7桁以下で入力してください',
            'category.in' => '予期しない商品カテゴリです。',
        ];
    }
}
