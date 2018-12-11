<?php

// 購入者画面

// ユーザ系
Route::prefix('user')->group(function () {
    // ユーザ情報
    Route::get('/', 'Customer\UserController@index');

    // ユーザ情報変更
    Route::get('edit', 'Customer\UserController@edit');

    // チャージ
    Route::get('charge', 'Customer\UserController@charge');

    // パスワード変更
    Route::get('password', 'Customer\UserController@password');
});

// 商品系
Route::prefix('products')->group(function () {
    // 商品一覧
    Route::get('/', 'Customer\ProductsController@index');

    // 商品詳細
    Route::get('detail', 'Customer\ProductsController@detail');

    // 購入履歴
    Route::get('history', 'Customer\ProductsController@history');

    // カート
    Route::get('cart', 'Customer\ProductsController@cart');
});