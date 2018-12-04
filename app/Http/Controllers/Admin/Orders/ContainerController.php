<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * コンテナ待ち系コントローラ
 *
 * Class ContainerController
 * @package App\Http\Controllers\Admin\Orders
 */
class ContainerController extends Controller
{
    /**
     * コンテナ待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.orders.container');
    }
}
