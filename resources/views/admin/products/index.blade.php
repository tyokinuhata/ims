@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品一覧</h1>
        <div>
            <form method="post" action="">
                @csrf
                <input type="text" placeholder="商品ID" class="form-control col-md-8 d-inline mb-4 mr-2" autofocus required>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
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
                <div>
                    <a href="{{ url('/admin/products/edit') }}" class="btn btn-success">編集</a>
                    <button type="submit" class="btn btn-danger">削除</button>
                    <a href="{{ url('/admin/products/detail') }}" class="btn btn-primary">売上詳細</a>
                </div>
            </div>
            <div>
                <a href="{{ url('/admin/products/add') }}" class="btn btn-primary">商品登録</a>
            </div>
        </div>
    </div>
@endsection