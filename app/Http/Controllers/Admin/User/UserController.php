<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Requests\Admin\User\User\EditRequest;
use App\Http\Requests\Admin\User\User\PasswordRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;

/**
 * ユーザ情報系コントローラ
 *
 * Class UserController
 * @package App\Http\Controllers\Admin\User
 */
class UserController extends Controller
{
    /**
     * ユーザ情報画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = User::where('user_id', Auth::user()->user_id)->first();

        return view('admin.user.user.index', [
            'user' => $user,
        ]);
    }

    /**
     * ユーザ情報編集画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit()
    {
        $user = User::where('user_id', Auth::user()->user_id)->first();

        return view('admin.user.user.edit', [
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

        return redirect('/admin/user/edit');
    }

    /**
     * パスワード変更画面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function password()
    {
        $user = User::where('user_id', Auth::user()->user_id)->first();

        return view('admin.user.user.password', [
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

        return redirect('/admin/user/password');
    }
}