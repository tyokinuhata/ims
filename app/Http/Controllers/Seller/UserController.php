<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * ユーザ系コントローラ
 *
 * Class UserController
 * @package App\Http\Controllers\Seller
 */
class UserController extends Controller
{
    /**
     * ユーザ情報
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('seller.user.index');
    }

    /**
     * ユーザ情報編集
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        return view('seller.user.edit');
    }
    /**
     * パスワード変更画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function password()
    {

        return view('seller.user.password');
    }
}
