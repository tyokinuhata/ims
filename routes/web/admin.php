<?php

// 管理者画面

// ユーザ系
Route::prefix('user')->group(function () {
    // ユーザ情報
    Route::get('/', 'Admin\UserController@index');

    // ユーザ情報編集
    Route::get('edit', 'Admin\UserController@edit');
    Route::post('edit', 'Admin\UserController@postEdit');

    // パスワード変更
    Route::get('password', 'Admin\UserController@password');
    Route::post('password', 'Admin\UserController@postPassword');

    // ユーザ操作系
    Route::prefix('operate')->group(function () {
        // ユーザ操作
        Route::get('/', 'Admin\OperateController@index');

        // ユーザ操作(購入履歴)
        Route::get('history/{user_id}', 'Admin\OperateController@history');

        // ユーザ操作(ユーザ情報編集)
        Route::get('edit/{user_id}', 'Admin\OperateController@edit')->middleware([ 'guards.employees' ]);
        Route::post('edit/{user_id}', 'Admin\OperateController@postEdit')->middleware([ 'guards.employees' ]);

        // ユーザ操作(パスワード変更)
        Route::get('password/{user_id}', 'Admin\OperateController@password')->middleware([ 'guards.employees' ]);
        Route::post('password/{user_id}', 'Admin\OperateController@postPassword')->middleware([ 'guards.employees' ]);

        // ユーザ操作(凍結)
        Route::post('lock', 'Admin\OperateController@lock')->middleware([ 'guards.employees' ]);

        // ユーザ操作(凍結解除)
        Route::post('unlock', 'Admin\OperateController@unlock')->middleware([ 'guards.employees' ]);

        // ユーザ操作(ユーザ追加)
        Route::get('add', 'Admin\OperateController@add')->middleware([ 'guards.employees' ]);
        Route::post('add', 'Admin\OperateController@postAdd')->middleware([ 'guards.employees' ]);
    });
});

// 商品系
Route::prefix('products')->group(function () {
    // 商品一覧
    Route::get('/', 'Admin\ProductsController@index');

    // 商品詳細
    Route::get('detail/{product_id}', 'Admin\ProductsController@detail');

    // 商品編集
    Route::get('edit/{product_id}', 'Admin\ProductsController@edit');

    // 売上詳細
    Route::get('sales/{product_id}', 'Admin\ProductsController@sales');

    // 商品登録
    Route::get('add', 'Admin\ProductsController@add');
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