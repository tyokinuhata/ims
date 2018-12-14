<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Models\CardboardSendingWait;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Orders\SendRequest;

/**
 * ダンボール送付系コントローラ
 *
 * Class CardboardController
 * @package App\Http\Controllers\Admin\Orders
 */
class CardboardController extends Controller
{
    /**
     * ダンボール一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $waitCardboards = CardboardSendingWait::where('status', 'wait')->paginate(10);
        $doneCardboards = CardboardSendingWait::where('status', 'done')->paginate(10);

        return view('admin.orders.cardboard', [
            'waitCardboards' => $waitCardboards,
            'doneCardboards' => $doneCardboards,
        ]);
    }

    /**
     * ダンボール送付処理
     *
     * @param SendRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function send(SendRequest $request)
    {
        CardboardSendingWait::where('id', $request->cardboard_id)->update([
            'status' => 'done',
        ]);

        return redirect('/admin/orders/cardboard');
    }
}
