<?php

namespace App\Http\Requests\Admin\Products;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 商品系 > 商品検索
 *
 * Class IndexRequest
 * @package App\Http\Requests\Admin\Products
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
            'status' => [ 'sometimes', 'required', 'in:none,unapproved,wait_container,stock,wait_return,return,wait_disposal,disposal', ],
            'category' => [ 'sometimes', 'required', 'in:none,tablet,capsule,powder,liquid,inhalant,spray,lozenge,medical_supplies,medical_device,commodity,other', ],
            'keywords' => [ 'sometimes', 'required', 'min:1', 'max:500', 'string', ],
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
            'max' => '500文字以下で入力してください。',
        ];
    }
}
