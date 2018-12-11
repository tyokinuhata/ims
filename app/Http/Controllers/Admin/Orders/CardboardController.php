<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Models\CardboardSendingWait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Orders\SendRequest;

/**
 * ダンボール送付待ち系コントローラ
 *
 * Class CardboardController
 * @package App\Http\Controllers\Admin\Orders
 */
class CardboardController extends Controller
{
    /**
     * ダンボール送付待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $cardboards = CardboardSendingWait::where('status', 'wait')->get();

        return view('admin.orders.cardboard', [
            'cardboards' => $cardboards,
        ]);
    }

    public function send(SendRequest $request)
    {
        CardboardSendingWait::where('id', $request->cardboard_id)->update([
            'status' => 'done',
        ]);

        return redirect('/admin/orders/cardboard');
    }
}
