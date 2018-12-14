@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="h1 mb-3">在庫検索</h1>
        <div>
            <form method="POST" action="">
                @csrf
                <input type="text" placeholder="企業のユーザID" class="form-control col-md-4 d-inline mb-4 mr-2" autofocus required>
                <input type="date" class="form-control col-md-2 d-inline" name="begin" required>
                <span> ~ </span>
                <input type="date" class="form-control col-md-2 d-inline mr-2" name="end" required>
                <button type="submit" class="btn btn-primary">検索</button>
            </form>
        </div>
        <table class="table table-striped">
            <tr>
                <th>商品ID</th>
                <th>商品名</th>
                <th>発注先企業名</th>
                <th>単価</th>
                <th>個数</th>
                <th>金額</th>
                <th>発注日</th>
                <th>入庫日</th>
                <th>&nbsp;</th>
            </tr>
            <tr>
                <td>1</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>100</td>
                <td>10</td>
                <td>1000</td>
                <td>YYYY/MM/DD</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>100</td>
                <td>10</td>
                <td>1000</td>
                <td>YYYY/MM/DD</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>タウリン</td>
                <td>ポケモンセンター</td>
                <td>100</td>
                <td>10</td>
                <td>1000</td>
                <td>YYYY/MM/DD</td>
                <td>YYYY/MM/DD</td>
                <td>
                    <a href="" class="btn btn-primary">詳細</a>
                </td>
            </tr>
        </table>
    </div>
@endsection