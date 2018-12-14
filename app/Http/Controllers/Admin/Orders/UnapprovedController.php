<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Orders\Unapproved\ApproveRequest;
use App\Http\Requests\Admin\Orders\Unapproved\NoApproveRequest;

/**
 * 承認待ち系コントローラ
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
        $products = Product::where('product_status_id', 1)->paginate(10);

        return view('admin.orders.unapproved', [
            'products' => $products,
        ]);
    }

    /**
     * 承認処理
     *
     * @param ApproveRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function approve(ApproveRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 2,
        ]);

        return redirect('/admin/orders/unapproved');
    }

    /**
     * 否承認処理(返送待ち移動処理)
     *
     * @param NoApproveRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function noApprove(NoApproveRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 4,
        ]);

        return redirect('/admin/orders/unapproved');
    }
}
