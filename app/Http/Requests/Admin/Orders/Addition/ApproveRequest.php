<?php

namespace App\Http\Requests\Admin\Orders\Addition;

use Illuminate\Foundation\Http\FormRequest;

/**
 * 発注・入庫系 > 承認
 *
 * Class ApproveRequest
 * @package App\Http\Requests\Admin\Orders\Unapproved
 */
class ApproveRequest extends FormRequest
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
            'product_id' => [ 'numeric' ],
            'user_id' => [ 'numeric', ],
        ];
    }
}
