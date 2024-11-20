<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：bankpay、コマンド名：返金の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class BankpayRefundResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * "bankpay"：BankPay<br/>
     */
    private $serviceType;

    /**
     * 処理結果コード<br>
     * 半角英数<br/>
     * 最大桁数：32<br/>
     * 決済請求処理後、応答電文に含まれる値を返却します。<br/>
     * 以下の処理結果のいずれかが格納される<br/>
     * - success：正常終了<br/>
     * - failure：異常終了<br/>
     */
    private $mstatus;

    /**
     * 詳細結果コード<br>
     * 半角英数<br/>
     * 最大桁数：16<br/>
     * 処理結果を詳細に表すコードを返却します。<br/>
     * <br/>
     * 4桁ずつ4つのブロックで構成され、各ブロックでサービス毎の処理結果を表します。<br/>
     */
    private $vResultCode;

    /**
     * エラーメッセージ<br>
     * 文字列<br/>
     * 処理結果に対するメッセージを返却します。<br/>
     */
    private $merrMsg;

    /**
     * 電文ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     */
    private $marchTxn;

    /**
     * 取引ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     */
    private $orderId;

    /**
     * 取引毎に付くID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     */
    private $custTxn;

    /**
     * MDKバージョン<br>
     * 半角英数<br/>
     * 最大桁数：5<br/>
     * 電文のバージョン番号を返却します。<br/>
     */
    private $txnVersion;

    /**
     * 会員ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     * 返金処理対象の会員IDを返却します。<br/>
     */
    private $memberId;

    /**
     * 口座ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     * 返金処理対象の口座IDを返却します。<br/>
     */
    private $accountId;

    /**
     * 課金種別<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 課金種別を返却します。<br/>
     */
    private $accountingType;

    /**
     * 端末機識別番号<br>
     * 半角数字<br/>
     * 最大桁数：13<br/>
     * 端末機識別番号を返却します。<br/>
     */
    private $terminalId;

    /**
     * 店舗ID<br>
     * 半角英数<br/>
     * 最大桁数：5<br/>
     * 店舗IDを返却します。<br/>
     */
    private $storeId;

    /**
     * 店舗名<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 店舗名を返却します。<br/>
     */
    private $storeName;

    /**
     * 加盟店処理通番<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     * 加盟店処理通番を返却します。<br/>
     * BankPayで取引を一意に識別するID<br/>
     */
    private $merchantTransactionId;

    /**
     * 決済センター側の処理通番<br>
     * 半角英数<br/>
     * 最大桁数：36<br/>
     * BankPayにて採番する処理通番を返却します。<br/>
     */
    private $centerTransactionId;

    /**
     * 承認番号<br>
     * 半角英数記号<br/>
     * 最大桁数：7<br/>
     * 金融機関にて発行した承認番号を返却します。<br/>
     */
    private $bankApprovalNum;

    /**
     * 決済処理通番<br>
     * 半角英数記号<br/>
     * 最大桁数：7<br/>
     * 金融機関にて発行した決済処理通番を返却します。<br/>
     */
    private $bankProcessingId;

    /**
     * 決済センター処理日時<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * BankPay側で処理された日時を返却します。（YYYYMMDDhhmmss形式）<br/>
     */
    private $centerProcessingDatetime;


    /**
     * 結果XML(マスク済み)<br>
     * 半角英数字<br>
     */
    private $resultXml;

    /**
     * PayNowIDオブジェクト<br>
     * オブジェクト<br>
     * PayNowID用項目を格納するオブジェクト<br>
     */
    private $payNowIdResponse;


    /**
     * 決済サービスタイプを取得する<br>
     * @return string 決済サービスタイプ<br>
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * 決済サービスタイプを設定する<br>
     * @param string $serviceType 決済サービスタイプ<br>
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * 処理結果コードを取得する<br>
     * @return string 処理結果コード<br>
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * 処理結果コードを設定する<br>
     * @param string $mstatus 処理結果コード<br>
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;
    }

    /**
     * 詳細結果コードを取得する<br>
     * @return string 詳細結果コード<br>
     */
    public function getVResultCode()
    {
        return $this->vResultCode;
    }

    /**
     * 詳細結果コードを設定する<br>
     * @param string $vResultCode 詳細結果コード<br>
     */
    public function setVResultCode($vResultCode)
    {
        $this->vResultCode = $vResultCode;
    }

    /**
     * エラーメッセージを取得する<br>
     * @return string エラーメッセージ<br>
     */
    public function getMerrMsg()
    {
        return $this->merrMsg;
    }

    /**
     * エラーメッセージを設定する<br>
     * @param string $merrMsg エラーメッセージ<br>
     */
    public function setMerrMsg($merrMsg)
    {
        $this->merrMsg = $merrMsg;
    }

    /**
     * 電文IDを取得する<br>
     * @return string 電文ID<br>
     */
    public function getMarchTxn()
    {
        return $this->marchTxn;
    }

    /**
     * 電文IDを設定する<br>
     * @param string $marchTxn 電文ID<br>
     */
    public function setMarchTxn($marchTxn)
    {
        $this->marchTxn = $marchTxn;
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
     * 取引毎に付くIDを取得する<br>
     * @return string 取引毎に付くID<br>
     */
    public function getCustTxn()
    {
        return $this->custTxn;
    }

    /**
     * 取引毎に付くIDを設定する<br>
     * @param string $custTxn 取引毎に付くID<br>
     */
    public function setCustTxn($custTxn)
    {
        $this->custTxn = $custTxn;
    }

    /**
     * MDKバージョンを取得する<br>
     * @return string MDKバージョン<br>
     */
    public function getTxnVersion()
    {
        return $this->txnVersion;
    }

    /**
     * MDKバージョンを設定する<br>
     * @param string $txnVersion MDKバージョン<br>
     */
    public function setTxnVersion($txnVersion)
    {
        $this->txnVersion = $txnVersion;
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
     * 加盟店処理通番を取得する<br>
     * @return string 加盟店処理通番<br>
     */
    public function getMerchantTransactionId()
    {
        return $this->merchantTransactionId;
    }

    /**
     * 加盟店処理通番を設定する<br>
     * @param string $merchantTransactionId 加盟店処理通番<br>
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        $this->merchantTransactionId = $merchantTransactionId;
    }

    /**
     * 決済センター側の処理通番を取得する<br>
     * @return string 決済センター側の処理通番<br>
     */
    public function getCenterTransactionId()
    {
        return $this->centerTransactionId;
    }

    /**
     * 決済センター側の処理通番を設定する<br>
     * @param string $centerTransactionId 決済センター側の処理通番<br>
     */
    public function setCenterTransactionId($centerTransactionId)
    {
        $this->centerTransactionId = $centerTransactionId;
    }

    /**
     * 承認番号を取得する<br>
     * @return string 承認番号<br>
     */
    public function getBankApprovalNum()
    {
        return $this->bankApprovalNum;
    }

    /**
     * 承認番号を設定する<br>
     * @param string $bankApprovalNum 承認番号<br>
     */
    public function setBankApprovalNum($bankApprovalNum)
    {
        $this->bankApprovalNum = $bankApprovalNum;
    }

    /**
     * 決済処理通番を取得する<br>
     * @return string 決済処理通番<br>
     */
    public function getBankProcessingId()
    {
        return $this->bankProcessingId;
    }

    /**
     * 決済処理通番を設定する<br>
     * @param string $bankProcessingId 決済処理通番<br>
     */
    public function setBankProcessingId($bankProcessingId)
    {
        $this->bankProcessingId = $bankProcessingId;
    }

    /**
     * 決済センター処理日時を取得する<br>
     * @return string 決済センター処理日時<br>
     */
    public function getCenterProcessingDatetime()
    {
        return $this->centerProcessingDatetime;
    }

    /**
     * 決済センター処理日時を設定する<br>
     * @param string $centerProcessingDatetime 決済センター処理日時<br>
     */
    public function setCenterProcessingDatetime($centerProcessingDatetime)
    {
        $this->centerProcessingDatetime = $centerProcessingDatetime;
    }


    /**
     * 結果XML(マスク済み)を設定する<br>
     * @param string $resultXml 結果XML(マスク済み)<br>
     */
    public function _setResultXml($resultXml)
    {
        $this->resultXml = $resultXml;
    }

    /**
     * 結果XML(マスク済み)を取得する<br>
     * @return string 結果XML(マスク済み)<br>
     */
    public function __toString()
    {
        return (string)$this->resultXml;
    }

    /**
     * PayNowIDオブジェクトを設定する<br>
     * @param PayNowIdResponse $payNowIdResponse PayNowIDオブジェクト<br>
     */
    public function setPayNowIdResponse($payNowIdResponse)
    {
        $this->payNowIdResponse = $payNowIdResponse;
    }

    /**
     * PayNowIDオブジェクトを取得する<br>
     * @return PayNowIdResponse PayNowIDオブジェクト<br>
     */
    public function getPayNowIdResponse()
    {
        return $this->payNowIdResponse;
    }



}
