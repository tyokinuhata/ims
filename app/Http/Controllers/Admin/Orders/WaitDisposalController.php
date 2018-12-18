<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Requests\Admin\Orders\WaitDisposal\DisposalRequest;

/**
 * 廃棄処分系コントローラ
 *
 * Class DisposalController
 * @package App\Http\Controllers\Admin\Orders
 */
class WaitDisposalController extends Controller
{
    /**
     * 廃棄処分待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = Product::where('product_status_id', 6)->oldest('created_at')->paginate(10);

        return view('admin.orders.waitDisposal', [
            'products' => $products,
        ]);
    }

    public function disposal(DisposalRequest $request)
    {
        Product::where('id', $request->product_id)->update([
            'product_status_id' => 7,
        ]);

        return redirect('/admin/orders/waitDisposal');
    }
}
