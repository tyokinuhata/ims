<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Orders\Back\DisposalRequest;
use App\Http\Requests\Admin\Orders\Back\SendRequest;

/**
 * 返送待ち系コントローラ
 *
 * Class BackController
 * @package App\Http\Controllers\Admin\Orders
 */
class BackController extends Controller
{
    /**
     * 返送待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::where('product_status_id', 4)->paginate(10);

        return view('admin.orders.back', [
            'products' => $products,
        ]);
    }

    /**
     * 返送待ち移動処理
     *
     * @param SendRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function send(SendRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 5,
        ]);

        return redirect('admin/orders/back');
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

        return redirect('admin/orders/back');
    }
}
