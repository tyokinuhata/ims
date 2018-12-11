@extends('layouts.base')
@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ユーザ情報編集</h1>
        <div class="mb-2">
            <form method="POST" action="{{ url('/seller/user/edit') }}">
                @csrf
                <div class="row mb-2">
                    <label for="new_user_id" class="col-md-2">ユーザID</label>
                    <input type="text" id="new_user_id" name="new_user_id" class="form-control d-inline col-md-7" required>
                </div>
                <div class="row mb-2">
                    <label for="username" class="col-md-2">ユーザ名</label>
                    <input type="text" id="username" name="username" class="form-control d-inline col-md-7" required>
                </div>
                <div class="row mb-2">
                    <label class="col-md-2">性別</label>
                    <div class="col-md-7">
                        <div class="d-inline">
                            <input type="radio" name="sex" id="man" value="man" checked required>
                            <label class="form-check-label" for="man">男</label>
                        </div>
                        <div class="d-inline">
                            <input type="radio" name="sex" id="woman" value="woman" required>
                            <label class="form-check-label" for="woman">女</label>
                        </div>
                        <div class="d-inline">
                            <input type="radio" name="sex" id="other" value="other" required>
                            <label class="form-check-label" for="other">その他</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="address" class="col-md-2">住所</label>
                    <input type="text" id="address" name="address" class="form-control d-inline col-md-7" required>
                </div>
                <div class="row mb-2">
                    <label for="age" class="col-md-2">年齢</label>
                    <input type="number" id="age" name="age" class="form-control d-inline col-md-7" required>
                </div>
                <div class="row mb-2">
                    <label for="email" class="col-md-2">メールアドレス</label>
                    <input type="email" id="email" name="email" class="form-control d-inline col-md-7" required>
                </div>
                <div class="row mb-2">
                    <label for="password" class="col-md-2">パスワード</label>
                    <input type="password" id="password" name="password" class="form-control d-inline col-md-7" required>
                </div>
            </form>
            <div class="mb-2">
                <button type="submit" class="btn btn-success">保存</button>
            </div>
        </div>
        <div>
            <a href="{{ url('/seller/user') }}">< 戻る</a>
        </div>
    </div>
@endsection


