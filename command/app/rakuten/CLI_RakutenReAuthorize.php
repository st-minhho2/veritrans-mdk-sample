<?php

namespace App\rakuten;

use tgMdk\dto\RakutenReAuthorizeRequestDto;
use tgMdk\TGMDK_Transaction;

/*
 * 楽天ID決済 再与信要求サンプル
 * Created on 2023/03/28
 *
 */

/**
 * ステータスコード
 */
define('TXN_FAILURE_CODE', 'failure');
define('TXN_PENDING_CODE', 'pending');
define('TXN_SUCCESS_CODE', 'success');

require_once("../../vendor/autoload.php");
require_once("../LoggerDefine.php");

/**
 * 取引ID
 */
$order_id = "dummy" . time();

/**
 * 元取引ID
 */
$original_order_id = "";

/**
 * 金額
 */
$amount = "100";

/**
 * 与信同時売上フラグ
 */
$is_with_capture = "false";

/**
 * 商品ID
 */
$item_id = "123456";

/**
 * 商品名
 */
$item_name = "sample商品";

/**
 * 要求電文パラメータ値の指定
 */
$request_data = new RakutenReAuthorizeRequestDto();

$request_data->setOrderId($order_id);
$request_data->setOriginalOrderId($original_order_id);
$request_data->setAmount($amount);
$request_data->setWithCapture($is_with_capture);
$request_data->setItemId($item_id);
$request_data->setItemName($item_name);

/**
 * 実施
 */
$transaction = new TGMDK_Transaction();
$response_data = $transaction->execute($request_data);

/**
 * 結果コード取得
 */
$txn_status = $response_data->getMStatus();
/**
 * 詳細コード取得
 */
$txn_result_code = $response_data->getVResultCode();
/**
 * エラーメッセージ取得
 */
$error_message = $response_data->getMerrMsg();

/**
 * 結果表示
 */
// 成功
if (TXN_SUCCESS_CODE === $txn_status) {
    echo $txn_status . "\n";
    echo "Transaction Successfully Complete\n";
    echo "[Result Code]: " . $txn_result_code . "\n";
    echo "[Order ID]: " . $response_data->getOrderId() . "\n";
    echo "[Original Order ID]: " . $response_data->getOriginalOrderId() . "\n";
    echo "[Rakuten Order Id]: ".$response_data->getRakutenOrderId()."\n";
    echo "[Gateway Order Id]: ".$response_data->getGatewayOrderId()."\n";
    echo "[Rakuten Consent Order Id]: ".$response_data->getRakutenConsentOrderId()."\n";
    echo "[Customer Id]: ".$response_data->getCustomerId()."\n";
    echo "[Used Point]: ".$response_data->getUsedPoint()."\n";
    echo "[Card Brand]: " . $response_data->getCardBrand() . "\n";
    echo "[Card Last4]: ".$response_data->getCardLast4()."\n";
    echo "[Card Installments]: ".$response_data->getCardInstallments()."\n";
    echo "[Card Cvc]: ".$response_data->getCardCvc()."\n";
    echo "[Card 3ds]: ".$response_data->getCard3ds()."\n";
    echo "[Transaction Datetime]: ".$response_data->getTransactionDatetime()."\n";
    echo "[Cancel Expiration Time]: ".$response_data->getCancelExpirationTime()."\n";
    echo "[Capture Expiration Time]: ".$response_data->getCaptureExpirationTime()."\n";
    echo "[Update Expiration Time]: ".$response_data->getUpdateExpirationTime()."\n";
    echo "[Extend Auth Expiration Time]: ".$response_data->getExtendAuthExpirationTime()."\n";
    //ペンディング
} else if (TXN_PENDING_CODE === $txn_status) {
    echo $txn_status . "\n";
    echo "Transaction Pending\n";
    echo "[Message]: " . $error_message . "\n";
    echo "[Result Code]: " . $txn_result_code . "\n";
    echo "[Order ID]: " . $response_data->getOrderId() . "\n";
    echo "Check log file for more information\n";
    // 失敗
} else if (TXN_FAILURE_CODE === $txn_status) {
    echo $txn_status . "\n";
    echo "Transaction Failure\n";
    echo "[Message]: " . $error_message . "\n";
    echo "[Result Code]: " . $txn_result_code . "\n";
    echo "[Order ID]: " . $response_data->getOrderId() . "\n";
    echo "Check log file for more information\n";
}

