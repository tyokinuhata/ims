<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\Operate\User\IndexRequest;
use App\Http\Requests\Admin\Operate\User\EditRequest;
use App\Http\Requests\Admin\Operate\User\PasswordRequest;
use App\Http\Requests\Admin\Operate\User\LockRequest;
use App\Http\Requests\Admin\Operate\User\UnlockRequest;
use App\Http\Requests\Admin\Operate\User\AddRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Hash;

/**
 * ユーザ操作系コントローラ
 *
 * Class OperateController
 * @package App\Http\Controllers\Admin\User
 */
class OperateController extends Controller
{
    /**
     * ユーザ操作画面/検索処理
     *
     * @param IndexRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(IndexRequest $request)
    {
        // user_idがリクエストで渡された場合は検索処理
        if (isset($request->user_id)) {
            $user = User::where('user_id', $request->user_id)->withTrashed()->first();

            return view('admin.user.operate.index', [
                'user' => $user,
            ]);
        }

        return view('admin.user.operate.index');
    }

    /**
     * 購入履歴画面
     *
     * @param $user_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function history($user_id)
    {
        $user = User::where('user_id', $user_id)->withTrashed()->first();

        return view('admin.user.operate.history', [
            'user' => $user
        ]);
    }

    /**
     * ユーザ情報編集画面
     *
     * @param $user_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($user_id)
    {
        $user = User::where('user_id', $user_id)->withTrashed()->first();

        return view('admin.user.operate.edit', [
            'user' => $user,
        ]);
    }

    /**
     * ユーザ情報編集処理
     *
     * @param EditRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postEdit(EditRequest $request)
    {
        User::where('user_id', $request->user_id)->update([
            'user_id' => $request->new_user_id,
            'username' => $request->username,
            'sex' => $request->sex,
            'address' => $request->address,
            'age' => $request->age,
            'email' => $request->email,
        ]);

        return redirect("/admin/user/operate/edit/{$request->new_user_id}");
    }

    /**
     * パスワード変更画面
     *
     * @param $user_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function password($user_id)
    {
        $user = User::where('user_id', $user_id)->withTrashed()->first();

        return view('admin.user.operate.password', [
            'user' => $user,
        ]);
    }

    /**
     * パスワード変更処理
     *
     * @param PasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postPassword(PasswordRequest $request)
    {
        User::where('user_id', $request->user_id)->update([
            'password' => Hash::make($request->new_password),
        ]);

        return redirect("/admin/user/operate/password/{$request->user_id}");
    }

    /**
     * ユーザ凍結処理
     *
     * @param LockRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function lock(LockRequest $request)
    {
        User::where('user_id', $request->user_id)->delete();

        return redirect("/admin/user/operate/edit/{$request->user_id}");
    }

    /**
     * ユーザ凍結解除処理
     *
     * @param UnlockRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function unlock(UnlockRequest $request)
    {
        User::where('user_id', $request->user_id)->restore();

        return redirect("/admin/user/operate/edit/{$request->user_id}");
    }

    /**
     * ユーザ追加画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add()
    {
        return view('admin.user.operate.add');
    }

    /**
     * ユーザ追加処理
     *
     * @param AddRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAdd(AddRequest $request)
    {
        User::create([
            'user_id' => $request->user_id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'address' => $request->address,
            'sex' => $request->sex,
            'age' => $request->age,
            'type' => $request->type,
        ]);

        return redirect('/admin/user/operate/add');
    }
}
