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
    @if( isset($message) &&  $message != null)
        <p class="alert alert-danger">{{$message}}</p>
    @endif
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
            <td>楽天取引ID</td>
            <td>{{$rakutenOrderId}}</td>
        </tr>
        <tr>
            <td>決済取引ID</td>
            <td>{{$gatewayOrderId}}</td>
        </tr>
        <tr>
            <td>利用ポイント</td>
            <td>{{$usedPoint}}</td>
        </tr>
        <tr>
            <td>クレジットカードのブランド</td>
            <td>{{$cardBrand}}</td>
        </tr>
        <tr>
            <td>クレジットカード番号の下４桁</td>
            <td>{{$cardLast4}}</td>
        </tr>
        <tr>
            <td>分割払いの回数</td>
            <td>{{$cardInstallments}}</td>
        </tr>
        <tr>
            <td>セキュリティコード認証利用有無</td>
            <td>{{$cardCvc}}</td>
        </tr>
        <tr>
            <td>3D セキュア認証利用有無</td>
            <td>{{$card3ds}}</td>
        </tr>
        <tr>
            <td>取引成立日時</td>
            <td>{{$transactionDatetime}}</td>
        </tr>
        <tr>
            <td>取消受付期限</td>
            <td>{{$cancelExpirationTime}}</td>
        </tr>
        <tr>
            <td>売上受付期限</td>
            <td>{{$captureExpirationTime}}</td>
        </tr>
        <tr>
            <td>金額変更受付期限</td>
            <td>{{$updateExpirationTime}}</td>
        </tr>
        <tr>
            <td>与信延長受付期限</td>
            <td>{{$extendAuthExpirationTime}}</td>
        </tr>
        <tr>
            <td>楽天承諾時取引ID</td>
            <td>{{$rakutenConsentOrderId}}</td>
        </tr>
        <tr>
            <td>顧客ID</td>
            <td>{{$customerId}}</td>
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
