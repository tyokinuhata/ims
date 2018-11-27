@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">購入履歴</h1>
        <div>
            <p class="font-weight-bold">ユーザID: mijumaru</p>
            <table class="table table-striped">
                <tr>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>個数</th>
                    <th>購入日</th>
                </tr>
                <tr>
                    <th>タウリン</th>
                    <th>¥100</th>
                    <th>100個</th>
                    <th>YYYY/MM/DD</th>
                </tr>
                <tr>
                    <th>タウリン</th>
                    <th>¥100</th>
                    <th>100個</th>
                    <th>YYYY/MM/DD</th>
                </tr>
                <tr>
                    <th>タウリン</th>
                    <th>¥100</th>
                    <th>100個</th>
                    <th>YYYY/MM/DD</th>
                </tr>
            </table>
        </div>
        <div>
            <a href="{{ url('/admin/user/operate') }}">< 戻る</a>
        </div>
    </div>
@endsection