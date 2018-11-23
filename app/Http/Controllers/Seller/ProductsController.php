<?php

namespace App\Http\Controllers\Seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * 商品系コントローラ
 *
 * Class ProductsController
 * @package App\Http\Controllers\Seller
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
        return view('seller.products.index');
    }

    /**
     * 商品登録
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('seller.products.add');
    }

    /**
     * 商品編集
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        return view('seller.products.edit');
    }

    /**
     * 売上詳細
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail()
    {
        return view('seller.products.detail');
    }
}
