@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">未納品一覧</h1>
        <table class="table table-striped">
            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th>納品先顧客名</th>
                <th>価格</th>
                <th>納品数</th>
                <th>合計金額</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>ミジュマル</td>
                <td>¥100</td>
                <td>10</td>
                <td>¥1000</td>
                <td>
                    <form method="POST" action="">
                        <button type="submit" class="btn btn-danger">納品</button>
                    </form>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>タウリン</td>
                <td>ミジュマル</td>
                <td>¥100</td>
                <td>10</td>
                <td>¥1000</td>
                <td>
                    <form method="POST" action="">
                        <button type="submit" class="btn btn-danger">納品</button>
                    </form>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>タウリン</td>
                <td>ミジュマル</td>
                <td>¥100</td>
                <td>10</td>
                <td>¥1000</td>
                <td>
                    <form method="POST" action="">
                        <button type="submit" class="btn btn-danger">納品</button>
                    </form>
                </td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
        </table>
    </div>
@endsection