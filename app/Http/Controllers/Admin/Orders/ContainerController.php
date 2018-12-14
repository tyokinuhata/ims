<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Orders\Container\AddRequest;
use App\Http\Requests\Admin\Orders\Container\ReturnRequest;
use App\Http\Requests\Admin\Orders\Container\DisposalRequest;

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
        $products = Product::where('product_status_id', 2)->paginate(10);

        return view('admin.orders.container', [
            'products' => $products,
        ]);
    }

    /**
     * コンテナ追加処理
     *
     * @param AddRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function add(AddRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 3,
        ]);

        return redirect('/admin/orders/container');
    }

    /**
     * 廃棄処分待ち移動処理
     *
     * @param DisposalRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function disposal(DisposalRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 6,
        ]);

        return redirect('/admin/orders/container');
    }
}
