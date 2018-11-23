@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">商品一覧</h1>
        <div>
            <form method="post" action="">
                @csrf
                <input type="text" placeholder="商品ID" class="form-control col-md-8 d-inline mb-4 mr-2" autofocus>
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
                    <form method="POST" action="">
                        <input type="number" class="form-control d-inline col-md-1 mr-2" value="0">
                        <button type="submit" class="btn btn-primary">カートに追加</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection