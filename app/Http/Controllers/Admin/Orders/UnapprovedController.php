<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 未承認系コントローラ
 *
 * Class UnapprovedController
 * @package App\Http\Controllers\Admin\Orders
 */
class UnapprovedController extends Controller
{
    /**
     * 未承認一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.orders.unapproved');
    }
}
