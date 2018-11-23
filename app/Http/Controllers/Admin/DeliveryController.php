<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 出庫系コントローラ
 *
 * Class DeliveryController
 * @package App\Http\Controllers\Admin
 */
class DeliveryController extends Controller
{
    /**
     * 未納品一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function yet()
    {
        return view('admin.delivery.yet');
    }

    /**
     * 納品済み一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function done()
    {
        return view('admin.delivery.done');
    }
}
