@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">カート</h1>
        <div>
            <table class="table table-striped">
                <tr>
                    <th>&nbsp;</th>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>個数</th>
                    <th>金額</th>
                    <th>追加日</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>タウリン</td>
                    <td>¥100</td>
                    <td>100個</td>
                    <td>¥10000</td>
                    <td>YYYY/MM/DD</td>
                    <td>
                        <a href="" class="btn btn-primary">詳細</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger">削除</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>タウリン</td>
                    <td>¥100</td>
                    <td>100個</td>
                    <td>¥10000</td>
                    <td>YYYY/MM/DD</td>
                    <td>
                        <a href="" class="btn btn-primary">詳細</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger">削除</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>タウリン</td>
                    <td>¥100</td>
                    <td>100個</td>
                    <td>¥10000</td>
                    <td>YYYY/MM/DD</td>
                    <td>
                        <a href="" class="btn btn-primary">詳細</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger">削除</button>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <th>合計金額</th>
                    <td>¥10000</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
            <button type="submit" class="btn btn-success">購入</button>
        </div>
    </div>
@endsection