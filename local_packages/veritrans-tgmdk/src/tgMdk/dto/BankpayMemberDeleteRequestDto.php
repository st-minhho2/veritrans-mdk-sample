<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：bankpay、コマンド名：会員削除の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class BankpayMemberDeleteRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "MemberDelete";

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
     * 会員削除対象の会員IDを指定します。<br/>
     */
    private $memberId;


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
