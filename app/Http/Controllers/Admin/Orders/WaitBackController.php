<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Orders\WaitBack\DisposalRequest;
use App\Http\Requests\Admin\Orders\WaitBack\SendRequest;

/**
 * 返送待ち系コントローラ
 *
 * Class WaitBackController
 * @package App\Http\Controllers\Admin\Orders
 */
class WaitBackController extends Controller
{
    /**
     * 返送待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::where('product_status_id', 4)->oldest('created_at')->paginate(10);

        return view('admin.orders.waitBack', [
            'products' => $products,
        ]);
    }

    /**
     * 返送待ち移動処理
     *
     * @param SendRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function back(SendRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 5,
        ]);

        return redirect('admin/orders/waitBack');
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

        return redirect('admin/orders/waitBack');
    }
}
