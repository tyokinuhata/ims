<?php

// 管理者画面

// ユーザ系
Route::prefix('user')->group(function () {
    // ユーザ情報
    Route::get('/', 'Admin\UserController@index');

    // ユーザ情報編集
    Route::get('edit', 'Admin\UserController@edit');
    Route::post('update', 'Admin\UserController@update');

    // ユーザ操作
    Route::get('operate', 'Admin\UserController@operate');

    // ユーザ操作(編集)
    Route::get('operate/edit/{id}', 'Admin\UserController@operateEdit');

    // ユーザ操作(購入履歴)
    Route::get('operate/history/{id}', 'Admin\UserController@operateHistory');
});

// 商品系
Route::prefix('products')->group(function () {
    // 商品一覧
    Route::get('/', 'Admin\ProductsController@index');

    // 商品登録
    Route::get('add', 'Admin\ProductsController@add');

    // 商品編集
    Route::get('edit', 'Admin\ProductsController@edit');

    // 売上詳細
    Route::get('detail', 'Admin\ProductsController@detail');
});

// 発注・入庫系
Route::prefix('orders')->group(function () {
    // 未発注一覧
    Route::get('yet', 'Admin\OrdersController@yet');

    // 入庫待ち一覧
    Route::get('wait', 'Admin\OrdersController@wait');

    // 入庫済み一覧
    Route::get('done', 'Admin\OrdersController@done');
});

// 納品系
Route::prefix('delivery')->group(function () {
    // 未出庫一覧
    Route::get('yet', 'Admin\DeliveryController@yet');

    // 出庫済一覧
    Route::get('done', 'Admin\DeliveryController@done');
});