<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：bankpay、コマンド名：決済申込の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class BankpayAuthorizeRequestDto extends AbstractPaymentRequestDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_TYPE = "bankpay";

    /**
     * 決済サービスコマンド<br>
     * 半角英数字<br>
     * 必須項目、固定値<br>
     */
    private $SERVICE_COMMAND = "Authorize";

    /**
     * サービスオプションタイプ<br>
     * 半角英数<br/>
     * - "online":オンライン決済<br/>
     */
    private $serviceOptionType;

    /**
     * 取引ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     * - マーチャント側で取引を一意に表す注文管理IDを指定します。<br/>
     * - 申込処理ごとに一意である必要があります。<br/>
     * - 半角英数、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $orderId;

    /**
     * 決済金額<br>
     * 数値<br/>
     * 最大桁数：7<br/>
     * 決済金額を指定します。<br/>
     * - 1 以上かつ 9999999(7桁) 以下<br/>
     */
    private $amount;

    /**
     * 会員ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     * 決済申込対象の会員IDを指定します。<br/>
     */
    private $memberId;

    /**
     * 口座ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     * 決済申込対象の口座IDを指定します。<br/>
     */
    private $accountId;

    /**
     * 課金種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * "0"：都度決済<br/>
     * "1"：継続課金<br/>
     * "2"：チャージ（オープン）<br/>
     * "3"：チャージ（ハウス）<br/>
     * "4"：チャージ（資金移動）<br/>
     */
    private $accountingType;

    /**
     * 端末機識別番号<br>
     * 半角英数記号<br/>
     * 最大桁数：13<br/>
     * 端末機識別番号を入力します。<br/>
     * 店舗POSなどの決済端末を識別する値を指定<br/>
     * チャージのみの利用の場合は、一意な値を設定。<br/>
     * 流通決済事業者コードを設定可能な場合は先頭5桁の設定を推奨。<br/>
     */
    private $terminalId;

    /**
     * 店舗ID<br>
     * 半角英数<br/>
     * 最大桁数：5<br/>
     * 店舗IDを指定します。<br/>
     */
    private $storeId;

    /**
     * 店舗名<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 店舗名を指定します。<br/>
     */
    private $storeName;


    /**
     * ログ用文字列(マスク済み)<br>
     * 半角英数字<br>
     */
    private $maskedLog;


    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->SERVICE_TYPE;
    }

    /**
     * 決済サービスコマンドを取得する<br>
     * @return string 決済サービスコマンド<br>
     */
    public function getServiceCommand()
    {
        return $this->SERVICE_COMMAND;
    }

    /**
     * サービスオプションタイプを取得する<br>
     * @return string サービスオプションタイプ<br>
     */
    public function getServiceOptionType()
    {
        return $this->serviceOptionType;
    }

    /**
     * サービスオプションタイプを設定する<br>
     * @param string $serviceOptionType サービスオプションタイプ<br>
     */
    public function setServiceOptionType($serviceOptionType)
    {
        $this->serviceOptionType = $serviceOptionType;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * 決済金額を取得する<br>
     * @return string 決済金額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 決済金額を設定する<br>
     * @param string $amount 決済金額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * 会員IDを取得する<br>
     * @return string 会員ID<br>
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 会員IDを設定する<br>
     * @param string $memberId 会員ID<br>
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }

    /**
     * 口座IDを取得する<br>
     * @return string 口座ID<br>
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * 口座IDを設定する<br>
     * @param string $accountId 口座ID<br>
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * 課金種別を取得する<br>
     * @return string 課金種別<br>
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * 課金種別を設定する<br>
     * @param string $accountingType 課金種別<br>
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
    }

    /**
     * 端末機識別番号を取得する<br>
     * @return string 端末機識別番号<br>
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * 端末機識別番号を設定する<br>
     * @param string $terminalId 端末機識別番号<br>
     */
    public function setTerminalId($terminalId)
    {
        $this->terminalId = $terminalId;
    }

    /**
     * 店舗IDを取得する<br>
     * @return string 店舗ID<br>
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * 店舗IDを設定する<br>
     * @param string $storeId 店舗ID<br>
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    /**
     * 店舗名を取得する<br>
     * @return string 店舗名<br>
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * 店舗名を設定する<br>
     * @param string $storeName 店舗名<br>
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;
    }


    /**
     * ログ用文字列(マスク済み)を設定する<br>
     * @param string $maskedLog ログ用文字列(マスク済み)<br>
     */
    public function _setMaskedLog($maskedLog)
    {
        $this->maskedLog = $maskedLog;
    }

    /**
     * ログ用文字列(マスク済み)を取得する<br>
     * @return string ログ用文字列(マスク済み)<br>
     */
    public function __toString() {
        return (string)$this->maskedLog;
    }

}
