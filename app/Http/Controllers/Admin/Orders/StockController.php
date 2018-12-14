<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 入庫履歴系コントローラ
 *
 * Class historyController
 * @package App\Http\Controllers\Admin\Orders
 */
class StockController extends Controller
{
    /**
     * 入庫履歴一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.orders.stock');
    }
}
