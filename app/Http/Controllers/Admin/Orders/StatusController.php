<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 強制ステータス変更系コントローラ
 *
 * Class StatusController
 * @package App\Http\Controllers\Admin\Orders
 */
class StatusController extends Controller
{
    /**
     * 強制ステータス変更画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.orders.status');
    }
}
