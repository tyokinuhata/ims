@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">パスワード変更</h1>
        <div class="mb-2">
            <form method="POST" action="{{ url('/admin/user/password') }}">
                @csrf
                <div>
                    <div class="row mb-2">
                        <label for="current_password" class="col-md-2">現在のパスワード</label>
                        <input type="password" class="form-control d-inline col-md-7" id="current_password" name="current_password" required autofocus>
                    </div>
                    @if ($errors->has('current_password'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('current_password') }}</div>
                        </div>
                    @endif
                </div>
                <div>
                    <div class="row mb-2">
                        <label for="new_password" class="col-md-2">新しいパスワード</label>
                        <input type="password" class="form-control d-inline col-md-7" id="new_password" name="new_password" required>
                    </div>
                </div>
                <div>
                    <div class="row mb-2">
                        <label for="new_password_confirm" class="col-md-2">新しいパスワード(確認)</label>
                        <input type="password" class="form-control d-inline col-md-7" id="new_password_confirm" name="new_password_confirmation" required>
                    </div>
                    @if ($errors->has('new_password'))
                        <div class="row mb-2">
                            <div class="col-md-2"></div>
                            <div class="text-danger">{{ $errors->first('new_password') }}</div>
                        </div>
                    @endif
                </div>
                <input type="hidden" name="user_id" value="{{ $user->user_id }}">
                <div>
                    <button type="submit" class="btn btn-danger">保存</button>
                </div>
            </form>
        </div>
        <div>
            <a href="{{ url('/admin/user') }}">< 戻る</a>
        </div>
    </div>
@endsection