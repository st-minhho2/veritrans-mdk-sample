<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：bankpay、コマンド名：口座入力情報取得の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class BankpayPrepareAccountAddResponseDto extends MdkBaseDto
{

    /**
     * 決済サービスタイプ<br>
     * 半角英数<br/>
     * 最大桁数：10<br/>
     * 決済サービスの区分を返却します。<br/>
     * "bankpay"： BankPay<br/>
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
     * 処理通番<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     * 決済サーバにて採番する処理通番<br/>
     */
    private $processId;

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
     */
    private $memberId;

    /**
     * 口座ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     */
    private $accountId;

    /**
     * 支店コード入力要否<br>
     * 英字（boolean）<br/>
     * 口座の支店コード入力要否を返却します。<br/>
     * - "true":入力要<br/>
     * - "false":入力不要<br/>
     */
    private $branchCodeFlag;

    /**
     * 預金種目入力要否<br>
     * 英字（boolean）<br/>
     * 口座の預金種目入力要否を返却します。<br/>
     * - "true":入力要<br/>
     * - "false":入力不要<br/>
     */
    private $depositTypeFlag;

    /**
     * 口座番号入力要否<br>
     * 英字（boolean）<br/>
     * 口座の口座番号入力要否を返却します。<br/>
     * - "true":入力要<br/>
     * - "false":入力不要<br/>
     */
    private $accountNumFlag;

    /**
     * 口座名義人名入力要否<br>
     * 英字（boolean）<br/>
     * 口座の口座名義人名入力要否を返却します。<br/>
     * - "true":入力要<br/>
     * - "false":入力不要<br/>
     */
    private $accountNameFlag;

    /**
     * 口座入力情報取得の処理通番<br>
     * 半角英数<br/>
     * 最大桁数：36<br/>
     * BankPayにて採番する処理通番を返却します。<br/>
     */
    private $centerTransactionId;

    /**
     * 決済センター処理日時<br>
     * 半角数字<br/>
     * 最大桁数：14<br/>
     * 口座入力情報取得日時を返却します。（YYYYMMDDhhmmss形式）<br/>
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
     * 処理通番を取得する<br>
     * @return string 処理通番<br>
     */
    public function getProcessId()
    {
        return $this->processId;
    }

    /**
     * 処理通番を設定する<br>
     * @param string $processId 処理通番<br>
     */
    public function setProcessId($processId)
    {
        $this->processId = $processId;
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
     * 支店コード入力要否を取得する<br>
     * @return string 支店コード入力要否<br>
     */
    public function getBranchCodeFlag()
    {
        return $this->branchCodeFlag;
    }

    /**
     * 支店コード入力要否を設定する<br>
     * @param string $branchCodeFlag 支店コード入力要否<br>
     */
    public function setBranchCodeFlag($branchCodeFlag)
    {
        $this->branchCodeFlag = $branchCodeFlag;
    }

    /**
     * 預金種目入力要否を取得する<br>
     * @return string 預金種目入力要否<br>
     */
    public function getDepositTypeFlag()
    {
        return $this->depositTypeFlag;
    }

    /**
     * 預金種目入力要否を設定する<br>
     * @param string $depositTypeFlag 預金種目入力要否<br>
     */
    public function setDepositTypeFlag($depositTypeFlag)
    {
        $this->depositTypeFlag = $depositTypeFlag;
    }

    /**
     * 口座番号入力要否を取得する<br>
     * @return string 口座番号入力要否<br>
     */
    public function getAccountNumFlag()
    {
        return $this->accountNumFlag;
    }

    /**
     * 口座番号入力要否を設定する<br>
     * @param string $accountNumFlag 口座番号入力要否<br>
     */
    public function setAccountNumFlag($accountNumFlag)
    {
        $this->accountNumFlag = $accountNumFlag;
    }

    /**
     * 口座名義人名入力要否を取得する<br>
     * @return string 口座名義人名入力要否<br>
     */
    public function getAccountNameFlag()
    {
        return $this->accountNameFlag;
    }

    /**
     * 口座名義人名入力要否を設定する<br>
     * @param string $accountNameFlag 口座名義人名入力要否<br>
     */
    public function setAccountNameFlag($accountNameFlag)
    {
        $this->accountNameFlag = $accountNameFlag;
    }

    /**
     * 口座入力情報取得の処理通番を取得する<br>
     * @return string 口座入力情報取得の処理通番<br>
     */
    public function getCenterTransactionId()
    {
        return $this->centerTransactionId;
    }

    /**
     * 口座入力情報取得の処理通番を設定する<br>
     * @param string $centerTransactionId 口座入力情報取得の処理通番<br>
     */
    public function setCenterTransactionId($centerTransactionId)
    {
        $this->centerTransactionId = $centerTransactionId;
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
