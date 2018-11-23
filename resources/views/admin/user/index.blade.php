@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ユーザ情報</h1>
        <div>
            <div class="mb-2">
                <img src="http://placehold.it/200x200&text=icon" alt="">
            </div>
            <table class="table">
                <tr>
                    <th>ユーザID</th>
                    <td>{{ $user->user_id }}</td>
                </tr>
                <tr>
                    <th>ユーザ名</th>
                    <td>{{ $user->username }}</td>
                </tr>
                <tr>
                    <th>性別</th>
                    <td>{{ $user->sex }}</td>
                </tr>
                <tr>
                    <th>住所</th>
                    <td>{{ $user->address }}</td>
                </tr>
                <tr>
                    <th>年齢</th>
                    <td>{{ $user->age }}歳</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>チャージ残高</th>
                    <td>¥{{ $user->charge }}</td>
                </tr>
                <tr>
                    <th>登録日</th>
                    <td>{{ $user->created_at }}</td>
                </tr>
            </table>
            <div>
                <a href="{{ url('/admin/user/edit') }}">ユーザ情報編集</a>
            </div>
        </div>
    </div>
@endsection