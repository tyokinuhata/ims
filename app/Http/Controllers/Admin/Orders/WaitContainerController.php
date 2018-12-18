<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Orders\WaitContainer\AddRequest;
use App\Http\Requests\Admin\Orders\WaitContainer\DisposalRequest;

/**
 * コンテナ待ち系コントローラ
 *
 * Class WaitContainerController
 * @package App\Http\Controllers\Admin\Orders
 */
class WaitContainerController extends Controller
{
    /**
     * コンテナ待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::where('product_status_id', 2)->oldest('created_at')->paginate(10);

        return view('admin.orders.waitContainer', [
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

        return redirect('/admin/orders/waitContainer');
    }

    /**
     * 廃棄処分待ち移動処理
     *
     * @param DisposalRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function waitDisposal(DisposalRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 6,
        ]);

        return redirect('/admin/orders/waitContainer');
    }
}
