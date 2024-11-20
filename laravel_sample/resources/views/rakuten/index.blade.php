@extends('layouts.parents')
@section('title', 'VeriTrans 4G - 楽天ID決済')
@section('content')
    <script language="JavaScript" type="text/javascript">
    /**
     * 課金種別によって金額の表示を制御する
     */
    function controlAmount() {
        if (document.getElementById("accountingType")) {
            accountingTypeValue = document.getElementById("accountingType").value;
        }

        if (accountingTypeValue == "1") {
            document.getElementById("amount").value = null;
        } else {
            if (!(document.getElementById("amount").value)) {
                document.getElementById("amount").value = "100";
            }
        }
    }

    /**
     * 課金種別が随時なら申込ボタン、都度なら支払ボタンを表示する
     */
    function changePurchaseButton() {
        if (document.getElementById("accountingType")) {
            accountingTypeValue = document.getElementById("accountingType").value;
        }

        if (accountingTypeValue == "1") {
            document.getElementById("purchase1").style.display = "";
            document.getElementById("purchase2").style.display = "none";
        } else {
            document.getElementById("purchase1").style.display = "none";
            document.getElementById("purchase2").style.display = "";
        }
        
        controlAmount();
    }

    // onLoadイベント
    window.onload = function() {
        changePurchaseButton();
        controlAmount();
    }
    </script>

    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">買い物かご</span>
                <span class="badge badge-secondary badge-pill">1</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <h6 class="my-0">サンプル商品</h6>
                        <small class="text-muted">4G-S-001</small>
                    </div>
                    <span class="text-muted">&yen;{{ $amount }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <div>
                        <h6 class="my-0">送料</h6>
                        <small class="text-muted">配送先:東京</small>
                    </div>
                    <span class="text-muted">&yen;0</span>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <span>合計金額</span>
                    <strong>&yen;{{ $amount }}</strong>
                </li>
            </ul>

        </div>

        <div class="col-md-8 order-md-1">
            <div class="alert alert-danger">
                本画面はVeriTrans4G 楽天ID決済の取引サンプル画面です。<br>
                お客様ECサイトのショッピングカートとVeriTrans4Gとを連動させるための参考、例としてご利用ください。<br>
                また、本画面では基本的なパラメータのみを表示させていますので、開発ガイドも合わせてご参照ください。<br>
            </div>
            <h5 class="mb-3 p-2 rounded bg-primary text-light">楽天ID決済：決済請求</h5>
            <div class="row">
                <div class="col-4 col-sm-4"><img src="{{asset("images/rakuten.png")}}"
                                                 alt="http://checkout.rakuten.co.jp/"></div>
            </div>
            <hr class="mb-4">
            <form method="post" action="{{ url('/rakuten') }}" class="needs-validation" id="proceed_payment_rakuten" novalidate>
            @csrf

                <div class="mb-3">
                    <label for="orderId">取引ID</label>
                    <div class="row">
                        <div class="col-12 col-sm-8">
                            <input type="text" class="form-control" id="orderId" name="orderId" value="{{ $orderId }}"
                                   maxlength="100"
                                   required>
                        </div>
                        <div class="col-3 col-sm-4">
                            <button class="btn btn-primary set-order-id" data-bind="orderId" onclick="return false;">取引ID更新</button>
                        </div>
                    </div>

                </div>

                <div class="mb-3">
                    <label for="amount">金額</label>
                    <input type="number" class="form-control" id="amount" name="amount" value="{{ $amount }}"
                           maxlength="8" required>
                </div>

                <div class="mb-3">
                    <label for="paymentMode">決済種別</label>
                    <select class="form-select" id="payType" name="payType">
                        <option value=""></option>
                        <option value="0">オンライン決済</option>
                        <option value="2">オンライン決済（V2）</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="withCapture">与信方法</label>
                    <select class="form-select" id="withCapture" name="withCapture">
                        <option value=""></option>
                        <option value="false">与信のみ(与信成功後に売上処理を行う必要があります)</option>
                        <option value="true">与信売上(与信と同時に売上処理も行います)</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="paymentMode">課金種別</label>
                    <select class="form-select" id="accountingType" name="accountingType" onchange="changePurchaseButton()">
                        <option value=""></option>
                        <option value="0">都度</option>
                        <option value="1">随時</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="itemId">商品番号</label>
                    <input type="text" class="form-control" id="itemId" name="itemId" maxlength="64" required>
                </div>

                <div class="mb-3">
                    <label for="itemName">商品名</label>
                    <input type="text" class="form-control" id="itemName" name="itemName" maxlength="300" required>
                </div>

                <div class="mb-3">
                    <label for="successUrl">決済完了時URL</label>
                    <input type="text" inputmode="url" class="form-control" id="successUrl" name="successUrl" maxlength="1024" value="{{ $successUrl }}">
                </div>

                <div class="mb-3">
                    <label for="errorUrl">決済エラー時URL</label>
                    <input type="text" inputmode="url" class="form-control" id="errorUrl" name="errorUrl" maxlength="1024" value="{{ $errorUrl }}">
                </div>

                <div class="mb-3">
                    <label for="pushUrl">プッシュURL</label>
                    <input type="text" inputmode="url" class="form-control" id="pushUrl" name="pushUrl" maxlength="1024" value="{{ $pushUrl }}">
                </div>

                <hr class="mb-4">
                <button id="purchase1" style="border: none; background:transparent; display: none">
                <script src='https://contents.online.checkout.rakuten.co.jp/live/button/v1/rakuten-pay.js'
                        class='rakuten-subscription-button' data-button-type='default' data-buttonwidth='200'></script>
                <noscript>Rakuten Pay で申込</noscript>
                </button>
                <button id="purchase2" style="border: none; background:transparent">
                <script src='https://contents.online.checkout.rakuten.co.jp/live/button/v1/rakuten-pay.js'
                        class='rakuten-checkout-button' data-button-type='default' data-buttonwidth='200'></script>
                <noscript>Rakuten Pay で購入</noscript>
                </button>
            </form>
        </div>

    </div>

@endsection
