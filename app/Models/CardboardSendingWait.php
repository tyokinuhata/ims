<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardboardSendingWait extends Model
{
    /**
     * ダンボールとのリレーション
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cardboard()
    {
        return $this->belongsTo('App\Models\Cardboard');
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
}
