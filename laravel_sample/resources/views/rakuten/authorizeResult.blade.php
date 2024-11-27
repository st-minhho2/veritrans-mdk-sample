@extends('layouts.parents')
@section('title', 'VeriTrans 4G - 取引結果')
@section('content')
    <div class="px-3 py-3 pt-md-5 mx-auto text-center">
        <ul class="list-unstyled">
            <li>本画面はVeriTrans4G 楽天ID決済の取引サンプル画面です。</li>
            <li>お客様ECサイトのショッピングカートとVeriTrans4Gとを連動させるための参考、例としてご利用ください。</li>
        </ul>
    </div>
    <h5 class="mb-3 p-2 rounded bg-primary text-light">楽天ID決済：取引結果</h5>
    <hr>
    <table class="table table-striped">
        <tbody>
        <tr>
            <td>取引ID</td>
            <td>{{$orderId}}</td>
        </tr>
        <tr>
            <td>処理結果コード</td>
            <td>{{$mstatus}}</td>
        </tr>
        <tr>
            <td>結果コード</td>
            <td>{{$vResultCode}}</td>
        </tr>
        <tr>
            <td>結果メッセージ</td>
            <td>{{$mErrMsg}}</td>
        </tr>
        </tbody>
    </table>

    <div class="row">

        <div class="col-md-12">
            <hr class="mb-4">
            <a class="btn btn-primary btn-lg"
               href="{{ action([App\Http\Controllers\MenuController::class, 'index']) }}">戻る</a>
        </div>
    </div>

@endsection
