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
     * ダンボール送付待ち一覧画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function wait()
    {
        $cardboards = CardboardSendingWait::where('status', 'wait')->paginate(10);

        return view('admin.orders.cardboard.wait', [
            'cardboards' => $cardboards,
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

        return redirect('/admin/orders/cardboard/wait');
    }

    /**
     * ダンボール送付済み一覧
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function done()
    {
        $cardboards = CardboardSendingWait::where('status', 'done')->paginate(10);

        return view('admin.orders.cardboard.done', [
            'cardboards' => $cardboards,
        ]);
    }
}
