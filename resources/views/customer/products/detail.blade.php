@extends('layouts.base')

@section('content')

    <div class="container">
        <h1 class="h1 mb-3">商品詳細</h1>
        <div>
            <div class="mb-2">
                <img src="http://placehold.it/200x200&text=icon" alt="">
            </div>
            <div class="mb-4">
                <table class="table">
                    <tr>
                        <th>商品ID</th>
                        <td>1</td>
                    </tr>
                    <tr>
                        <th>商品名</th>
                        <td>タウリン</td>
                    </tr>
                    <tr>
                        <th>説明</th>
                        <td>ほげほげほげ</td>
                    </tr>
                    <tr>
                        <th>価格</th>
                        <td>100</td>
                    </tr>
                    <tr>
                        <th>カテゴリー</th>
                        <td>錠剤</td>
                    </tr>
                    <tr>
                        <th>在庫数</th>
                        <td>100個</td>
                    </tr>
                    <tr>
                        <th>登録者</th>
                        <td>ミジュマル</td>
                    </tr>
                    <tr>
                        <th>登録日</th>
                        <td>YYYY/MM/DD</td>
                    </tr>
                </table>
            </div>
            <div>
                <a href="{{ url('/customer/products/') }}" class="btn btn-primary">戻る</a>
            </div>
        </div>
    </div>
@endsection