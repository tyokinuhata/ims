<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * ユーザ
 *
 * Class User
 * @package App\Models
 */
class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'user_id', 'username', 'password', 'email', 'address', 'sex', 'age', 'password', 'type', ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ 'password', 'remember_token', ];

    /**
     * ソフトデリート(論理削除)にする
     *
     * @var array
     */
    protected $dates = [ 'deleted_at' ];

    /**
     * 性別のアクセサー
     *
     * @param $value
     * @return string
     */
    public function getSexAttribute($value)
    {
        if ($value === 'man')   return '男';
        if ($value === 'woman') return '女';
        if ($value === 'other') return 'その他';
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
}
