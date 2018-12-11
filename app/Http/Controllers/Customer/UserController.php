<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * ユーザ系
 *
 * Class UserController
 * @package App\Http\Controllers\Customer
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
        return view('customer.user.index');
    }

    /**
     * ユーザ情報編集
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        return view('customer.user.edit');
    }

    /**
     * チャージ
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function charge()
    {
        return view('customer.user.charge');
    }

    /**
     * パスワード変更画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function password()
    {

        return view('customer.user.password');
    }
}
