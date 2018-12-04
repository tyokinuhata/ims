@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">ダンボール送付待ち一覧</h1>
        <div>
            <table class="table table-striped">
                <tr>
                    <th>ユーザ名</th>
                    <th>ユーザID</th>
                    <th>サイズ</th>
                    <th>箱数</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>ミジュマル</td>
                    <td>mijumaru</td>
                    <td>L</td>
                    <td>2個</td>
                    <td>
                        <button type="submit" class="btn btn-danger">送付</button>
                    </td>
                </tr>
                <tr>
                    <td>ミジュマル</td>
                    <td>mijumaru</td>
                    <td>L</td>
                    <td>2個</td>
                    <td>
                        <button type="submit" class="btn btn-danger">送付</button>
                    </td>
                </tr>
                <tr>
                    <td>ミジュマル</td>
                    <td>mijumaru</td>
                    <td>L</td>
                    <td>2個</td>
                    <td>
                        <button type="submit" class="btn btn-danger">送付</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection