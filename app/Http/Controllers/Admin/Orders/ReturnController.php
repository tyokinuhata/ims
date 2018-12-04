<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 返送待ち系コントローラ
 *
 * Class ReturnController
 * @package App\Http\Controllers\Admin\Orders
 */
class ReturnController extends Controller
{
    /**
     * 返送待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.orders.return');
    }
}
