<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：bankpay、コマンド名：口座入力情報取得の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class BankpayPrepareAccountAddRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "PrepareAccountAdd";

    /**
     * サービスオプションタイプ<br>
     * 半角英数<br/>
     * - "online":オンライン決済<br/>
     */
    private $serviceOptionType;

    /**
     * 会員ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     * 口座登録対象の会員IDを指定します。<br/>
     */
    private $memberId;

    /**
     * 口座ID<br>
     * 半角英数<br/>
     * 最大桁数：100<br/>
     * - マーチャント側で口座を一意に表す口座IDを指定します。<br/>
     * - 口座ごとに一意である必要があります。<br/>
     * - 半角英数、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $accountId;

    /**
     * 決済完了時URL<br>
     * URLに使用可能な文字<br/>
     * 最大桁数：256<br/>
     * 口座登録完了後に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $successUrl;

    /**
     * 決済エラー時URL<br>
     * URLに使用可能な文字<br/>
     * 最大桁数：256<br/>
     * 口座登録エラー時に、店舗側サイトに画面遷移を戻すためのURLを指定します。<br/>
     * <br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $errorUrl;

    /**
     * プッシュ先URL<br>
     * URLに使用可能な文字<br/>
     * 最大桁数：256<br/>
     * プッシュURLを指定します。<br/>
     * <br/>
     * ※未指定の場合は、MAP（Merchant Administrator Portal）から登録申請した値を使用。<br/>
     */
    private $pushUrl;

    /**
     * 銀行コード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 登録口座の銀行コードを入力します。<br/>
     */
    private $bankCode;


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
     * 決済完了時URLを取得する<br>
     * @return string 決済完了時URL<br>
     */
    public function getSuccessUrl()
    {
        return $this->successUrl;
    }

    /**
     * 決済完了時URLを設定する<br>
     * @param string $successUrl 決済完了時URL<br>
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * 決済エラー時URLを取得する<br>
     * @return string 決済エラー時URL<br>
     */
    public function getErrorUrl()
    {
        return $this->errorUrl;
    }

    /**
     * 決済エラー時URLを設定する<br>
     * @param string $errorUrl 決済エラー時URL<br>
     */
    public function setErrorUrl($errorUrl)
    {
        $this->errorUrl = $errorUrl;
    }

    /**
     * プッシュ先URLを取得する<br>
     * @return string プッシュ先URL<br>
     */
    public function getPushUrl()
    {
        return $this->pushUrl;
    }

    /**
     * プッシュ先URLを設定する<br>
     * @param string $pushUrl プッシュ先URL<br>
     */
    public function setPushUrl($pushUrl)
    {
        $this->pushUrl = $pushUrl;
    }

    /**
     * 銀行コードを取得する<br>
     * @return string 銀行コード<br>
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * 銀行コードを設定する<br>
     * @param string $bankCode 銀行コード<br>
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
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
