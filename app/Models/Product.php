<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 商品
 *
 * Class Product
 * @package App\Models
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = [ 'name', 'description', 'price', 'category', 'user_id', 'product_category_id', ];

    /**
     * 商品カテゴリとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }

    /**
     * 商品ステータスとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productStatus()
    {
        return $this->belongsTo('App\Models\ProductStatus');
    }

    /**
     * ユーザとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * 在庫とのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function stock()
    {
        return $this->hasOne('App\Models\Stock');
    }

    /**
     * created_atのアクセサー
     *
     * @param $value
     * @return array|mixed
     */
    public function getCreatedAtAttribute($value)
    {
        $value = explode(' ', $value);
        $value = str_replace('-', '/', $value[0]);
        return $value;
    }

    /**
     * updated_atのアクセサー
     *
     * @param $value
     * @return array|mixed
     */
    public function getUpdatedAtAttribute($value)
    {
        $value = explode(' ', $value);
        $value = str_replace('-', '/', $value[0]);
        return $value;
    }
}
