@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">承認待ち一覧</h1>
        <div>
            <table class="table table-striped">
                <tr>
                    <th>ユーザ名</th>
                    <th>ユーザID</th>
                    <th>商品ID</th>
                    <th>商品名</th>
                    <th>個数</th>
                    <th>安全在庫数</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <tr>
                    <td>ミジュマル</td>
                    <td>mijumaru</td>
                    <td>1</td>
                    <td>タウリン</td>
                    <td>2個</td>
                    <td>2個</td>
                    <td>
                        <button type="submit" class="btn btn-danger">承認</button>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger">非承認</button>
                    </td>
                </tr>
                <tr>
                    <td>ミジュマル</td>
                    <td>mijumaru</td>
                    <td>1</td>
                    <td>タウリン</td>
                    <td>2個</td>
                    <td>2個</td>
                    <td>
                        <button type="submit" class="btn btn-danger">承認</button>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger">非承認</button>
                    </td>
                </tr>
                <tr>
                    <td>ミジュマル</td>
                    <td>mijumaru</td>
                    <td>1</td>
                    <td>タウリン</td>
                    <td>2個</td>
                    <td>2個</td>
                    <td>
                        <button type="submit" class="btn btn-danger">承認</button>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-danger">非承認</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection