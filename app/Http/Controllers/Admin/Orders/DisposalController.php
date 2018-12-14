<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 廃棄処分系コントローラ
 *
 * Class DisposalController
 * @package App\Http\Controllers\Admin\Orders
 */
class DisposalController extends Controller
{
    /**
     * 廃棄処分待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.orders.disposal');
    }
}
