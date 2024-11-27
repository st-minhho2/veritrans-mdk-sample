<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：bankpay、コマンド名：口座登録の応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class BankpayAccountAddResponseDto extends MdkBaseDto
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
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 決済サーバにて採番する処理通番<br/>
     */
    private $processId;

    /**
     * 口座入力情報取得の処理通番<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 口座入力情報取得時に決済サーバーにて付与されるprocessId。<br/>
     */
    private $preparedProcessId;

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
     * BankPay口座登録URL<br>
     * 文字列<br/>
     * 最大桁数：256<br/>
     * BankPay への遷移に必要な項目。<br/>
     * BankPayに遷移するために使用してください。<br/>
     */
    private $bankpayAccountsRegisterUrl;

    /**
     * 口座ラベル<br>
     * 文字列<br/>
     * 最大桁数：50<br/>
     * 登録対象の口座の別名を返却します。<br/>
     * - BankPayへの遷移に必要な項目になります。<br/>
     */
    private $accountLabel;

    /**
     * 戻り先URL<br>
     * 文字列<br/>
     * 最大桁数：256<br/>
     * 戻り先URLを返却します。<br/>
     * - BankPayへの遷移に必要な項目になります。<br/>
     */
    private $backUrl;

    /**
     * 会員用アクセストークン<br>
     * 半角英数<br/>
     * 最大桁数：32<br/>
     * 会員用アクセストークンを返却します。<br/>
     * - BankPayへの遷移に必要な項目になります。<br/>
     */
    private $customerAccessToken;

    /**
     * Pay事業者認証鍵世代番号<br>
     * 半角英数<br/>
     * 最大桁数：2<br/>
     * 認証鍵の世代番号を返却します。<br/>
     * - BankPayへの遷移に必要な項目になります。<br/>
     */
    private $processorAuthenticationKeyIndex;

    /**
     * メッセージ認証コード<br>
     * 半角英数英数記号<br/>
     * 最大桁数：44<br/>
     * メッセージ認証コードを返却します。<br/>
     * - BankPayへの遷移に必要な項目になります。<br/>
     */
    private $mac;


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
     * 口座入力情報取得の処理通番を取得する<br>
     * @return string 口座入力情報取得の処理通番<br>
     */
    public function getPreparedProcessId()
    {
        return $this->preparedProcessId;
    }

    /**
     * 口座入力情報取得の処理通番を設定する<br>
     * @param string $preparedProcessId 口座入力情報取得の処理通番<br>
     */
    public function setPreparedProcessId($preparedProcessId)
    {
        $this->preparedProcessId = $preparedProcessId;
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
     * BankPay口座登録URLを取得する<br>
     * @return string BankPay口座登録URL<br>
     */
    public function getBankpayAccountsRegisterUrl()
    {
        return $this->bankpayAccountsRegisterUrl;
    }

    /**
     * BankPay口座登録URLを設定する<br>
     * @param string $bankpayAccountsRegisterUrl BankPay口座登録URL<br>
     */
    public function setBankpayAccountsRegisterUrl($bankpayAccountsRegisterUrl)
    {
        $this->bankpayAccountsRegisterUrl = $bankpayAccountsRegisterUrl;
    }

    /**
     * 口座ラベルを取得する<br>
     * @return string 口座ラベル<br>
     */
    public function getAccountLabel()
    {
        return $this->accountLabel;
    }

    /**
     * 口座ラベルを設定する<br>
     * @param string $accountLabel 口座ラベル<br>
     */
    public function setAccountLabel($accountLabel)
    {
        $this->accountLabel = $accountLabel;
    }

    /**
     * 戻り先URLを取得する<br>
     * @return string 戻り先URL<br>
     */
    public function getBackUrl()
    {
        return $this->backUrl;
    }

    /**
     * 戻り先URLを設定する<br>
     * @param string $backUrl 戻り先URL<br>
     */
    public function setBackUrl($backUrl)
    {
        $this->backUrl = $backUrl;
    }

    /**
     * 会員用アクセストークンを取得する<br>
     * @return string 会員用アクセストークン<br>
     */
    public function getCustomerAccessToken()
    {
        return $this->customerAccessToken;
    }

    /**
     * 会員用アクセストークンを設定する<br>
     * @param string $customerAccessToken 会員用アクセストークン<br>
     */
    public function setCustomerAccessToken($customerAccessToken)
    {
        $this->customerAccessToken = $customerAccessToken;
    }

    /**
     * Pay事業者認証鍵世代番号を取得する<br>
     * @return string Pay事業者認証鍵世代番号<br>
     */
    public function getProcessorAuthenticationKeyIndex()
    {
        return $this->processorAuthenticationKeyIndex;
    }

    /**
     * Pay事業者認証鍵世代番号を設定する<br>
     * @param string $processorAuthenticationKeyIndex Pay事業者認証鍵世代番号<br>
     */
    public function setProcessorAuthenticationKeyIndex($processorAuthenticationKeyIndex)
    {
        $this->processorAuthenticationKeyIndex = $processorAuthenticationKeyIndex;
    }

    /**
     * メッセージ認証コードを取得する<br>
     * @return string メッセージ認証コード<br>
     */
    public function getMac()
    {
        return $this->mac;
    }

    /**
     * メッセージ認証コードを設定する<br>
     * @param string $mac メッセージ認証コード<br>
     */
    public function setMac($mac)
    {
        $this->mac = $mac;
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
