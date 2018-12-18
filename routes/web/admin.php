<?php

// 管理者画面

// ユーザ系
Route::prefix('user')->group(function () {
    // ユーザ情報
    Route::get('/', 'Admin\User\UserController@index');

    // ユーザ情報編集
    Route::get('edit', 'Admin\User\UserController@edit');
    Route::post('edit', 'Admin\User\UserController@postEdit');

    // パスワード変更
    Route::get('password', 'Admin\User\UserController@password');
    Route::post('password', 'Admin\User\UserController@postPassword');

    // ユーザ操作系
    Route::prefix('operate')->group(function () {
        // ユーザ操作
        Route::get('/', 'Admin\User\OperateController@index');

        // ユーザ操作(購入履歴)
        Route::get('history/{user_id}', 'Admin\User\OperateController@history');

        // ユーザ操作(ユーザ情報編集)
        Route::get('edit/{user_id}', 'Admin\User\OperateController@edit')->middleware([ 'guards.employees' ]);
        Route::post('edit/{user_id}', 'Admin\User\OperateController@postEdit')->middleware([ 'guards.employees' ]);

        // ユーザ操作(パスワード変更)
        Route::get('password/{user_id}', 'Admin\User\OperateController@password')->middleware([ 'guards.employees' ]);
        Route::post('password/{user_id}', 'Admin\User\OperateController@postPassword')->middleware([ 'guards.employees' ]);

        // ユーザ操作(凍結)
        Route::post('lock', 'Admin\User\OperateController@lock')->middleware([ 'guards.employees' ]);

        // ユーザ操作(凍結解除)
        Route::post('unlock', 'Admin\User\OperateController@unlock')->middleware([ 'guards.employees' ]);

        // ユーザ操作(ユーザ追加)
        Route::get('add', 'Admin\User\OperateController@add')->middleware([ 'guards.employees' ]);
        Route::post('add', 'Admin\User\OperateController@postAdd')->middleware([ 'guards.employees' ]);
    });
});

// 商品系
Route::prefix('products')->group(function () {
    // 商品一覧
    Route::get('/', 'Admin\Products\ProductsController@index');

    // 商品詳細
    Route::get('detail/{product_id}', 'Admin\Products\ProductsController@detail');

    // 商品編集
    Route::get('edit/{product_id}', 'Admin\Products\ProductsController@edit')->middleware([ 'guards.employees' ]);
    Route::post('edit/{product_id}', 'Admin\Products\ProductsController@postEdit')->middleware([ 'guards.employees' ]);

    // 売上詳細
    Route::get('sales/{product_id}', 'Admin\Products\ProductsController@sales');

    // 商品登録
    Route::get('add', 'Admin\Products\ProductsController@add')->middleware([ 'guards.employees' ]);
    Route::post('add', 'Admin\Products\ProductsController@postAdd')->middleware([ 'guards.employees' ]);
});

// 発注・入庫系
Route::prefix('orders')->group(function () {
    // ダンボール一覧
    Route::get('cardboard', 'Admin\Orders\CardboardController@index');
    Route::post('cardboard/send', 'Admin\Orders\CardboardController@send');

    // 未承認一覧
    Route::get('unapproved', 'Admin\Orders\UnapprovedController@index');
    Route::post('unapproved/approve', 'Admin\Orders\UnapprovedController@approve');
    Route::post('unapproved/noApprove', 'Admin\Orders\UnapprovedController@noApprove');

    // コンテナ待ち一覧
    Route::get('waitContainer', 'Admin\Orders\WaitContainerController@index');
    Route::post('waitContainer/add', 'Admin\Orders\WaitContainerController@add');
    Route::post('waitContainer/waitDisposal', 'Admin\Orders\WaitContainerController@waitDisposal');

    // 返送待ち一覧
    Route::get('waitBack', 'Admin\Orders\WaitBackController@index');
    Route::post('waitBack/back', 'Admin\Orders\WaitBackController@back');
    Route::post('waitBack/waitDisposal', 'Admin\Orders\WaitBackController@waitDisposal');

    // 廃棄処分待ち一覧
    Route::get('waitDisposal', 'Admin\Orders\WaitDisposalController@index');
    Route::post('waitDisposal/disposal', 'Admin\Orders\WaitDisposalController@disposal');

    // 在庫検索
    Route::get('stock', 'Admin\Orders\StockController@index');

    // 強制ステータス変更
    Route::get('status', 'Admin\Orders\StatusController@index')->middleware([ 'guards.employees' ]);
});

// 納品系
Route::prefix('delivery')->group(function () {
    // 未出庫一覧
    Route::get('yet', 'Admin\DeliveryController@yet');

    // 出庫済一覧
    Route::get('done', 'Admin\DeliveryController@done');
});