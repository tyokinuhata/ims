<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getCreatedAtAttribute($value)
    {
        $value = explode(' ', $value);
        $value = str_replace('-', '/', $value[0]);
        return $value;
    }

    public function productCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function stock()
    {
        return $this->hasOne('App\Models\Stock');
    }
}
