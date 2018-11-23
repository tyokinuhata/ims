<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 商品系
 *
 * Class ProductsController
 * @package App\Http\Controllers\Customer
 */
class ProductsController extends Controller
{
    /**
     * 商品一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('customer.products.index');
    }

    /**
     * 商品詳細
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail()
    {
        return view('customer.products.detail');
    }

    /**
     * 購入履歴
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function history()
    {
        return view('customer.products.history');
    }

    /**
     * カート
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cart()
    {
        return view('customer.products.cart');
    }
}
