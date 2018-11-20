@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">カート</h1>
        <div>
            <p class="font-weight-bold">ユーザID: mijumaru</p>
            <table class="table table-striped">
                <tr>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>個数</th>
                    <th>購入日</th>
                    <th></th>
                </tr>
                <tr>
                    <th>タウリン</th>
                    <th>¥100</th>
                    <th>100個</th>
                    <th>YYYY/MM/DD</th>
                    <th><a href="" class="btn btn-primary">詳細</a></th>
                </tr>
                <tr>
                    <th>タウリン</th>
                    <th>¥100</th>
                    <th>100個</th>
                    <th>YYYY/MM/DD</th>
                    <th><a href="" class="btn btn-primary">詳細</a></th>
                </tr>
                <tr>
                    <th>タウリン</th>
                    <th>¥100</th>
                    <th>100個</th>
                    <th>YYYY/MM/DD</th>
                    <th><a href="" class="btn btn-primary">詳細</a></th>
                </tr>
            </table>
        </div>
    </div>
@endsection