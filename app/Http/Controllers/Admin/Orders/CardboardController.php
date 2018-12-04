<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * ダンボール送付待ち系コントローラ
 *
 * Class CardboardController
 * @package App\Http\Controllers\Admin\Orders
 */
class CardboardController extends Controller
{
    /**
     * ダンボール送付待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.orders.cardboard');
    }
}
