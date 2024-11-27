<?php

namespace tgMdk\dto;

/**
 * 決済サービスタイプ：bankpay、コマンド名：会員登録の要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class BankpayMemberAddRequestDto extends AbstractPaymentRequestDto
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
    private $SERVICE_COMMAND = "MemberAdd";

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
     * - マーチャント側で会員を一意に表す会員IDを指定します。<br/>
     * - 会員ごとに一意である必要があります。<br/>
     * - 半角英数、“-”（ハイフン）、“_”（アンダースコア）も使用可能です。<br/>
     */
    private $memberId;

    /**
     * 利用者端末識別ID<br>
     * 半角英字<br/>
     * 最大桁数：32<br/>
     * 利用者の端末を識別するIDを指定します。<br/>
     * スマホなどのデバイスを識別するためのUUIDなどの情報で、EC利用などの場合は一意なランダムな値を設定します。<br/>
     */
    private $userTerminalId;

    /**
     * 氏名<br>
     * 文字列<br/>
     * 最大桁数：20<br/>
     * 会員の氏名を入力します。<br/>
     */
    private $userName;

    /**
     * カナ名<br>
     * 文字列<br/>
     * 最大桁数：40<br/>
     * 会員のカナ名を入力します。<br/>
     */
    private $userNameKana;

    /**
     * 生年月日<br>
     * 半角数字<br/>
     * 最大桁数：8<br/>
     * 会員の生年月日を入力します。<br/>
     * 書式はYYYYMMDD。<br/>
     * 例)20220531<br/>
     */
    private $birthDate;

    /**
     * 性別<br>
     * 半角英字<br/>
     * 最大桁数：1<br/>
     * 会員の性別を入力します。<br/>
     * -"M":男<br/>
     * -"F":女<br/>
     */
    private $gender;

    /**
     * 郵便番号<br>
     * 半角数字記号<br/>
     * 最大桁数：8<br/>
     * 会員の郵便番号を入力します。<br/>
     * -ハイフン有でも無でも指定可能です。<br/>
     */
    private $zipcode;

    /**
     * 住所<br>
     * 文字列<br/>
     * 最大桁数：60<br/>
     * 会員の住所を入力します。<br/>
     */
    private $address;

    /**
     * 電話番号<br>
     * 半角数字記号<br/>
     * 最大桁数：16<br/>
     * 会員の電話番号を入力します。<br/>
     * -ハイフン有でも無でも指定可能です。<br/>
     */
    private $telNumber;

    /**
     * 携帯番号<br>
     * 半角数字記号<br/>
     * 最大桁数：16<br/>
     * 会員の携帯番号を入力します。<br/>
     * -ハイフン有でも無でも指定可能です。<br/>
     */
    private $mobileNumber;

    /**
     * メールアドレス<br>
     * 半角英数記号<br/>
     * 最大桁数：300<br/>
     * 会員のメールアドレスを入力します。<br/>
     */
    private $emailAddress;

    /**
     * メールアドレス2<br>
     * 半角英数記号<br/>
     * 最大桁数：300<br/>
     * 会員のメールアドレスが2つある場合2つ目を入力します。<br/>
     */
    private $emailAddress2;

    /**
     * 摘要<br>
     * 文字列<br/>
     * 最大桁数：100<br/>
     * 会員についての備考項目を入力します。<br/>
     */
    private $remarks;


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
     * 利用者端末識別IDを取得する<br>
     * @return string 利用者端末識別ID<br>
     */
    public function getUserTerminalId()
    {
        return $this->userTerminalId;
    }

    /**
     * 利用者端末識別IDを設定する<br>
     * @param string $userTerminalId 利用者端末識別ID<br>
     */
    public function setUserTerminalId($userTerminalId)
    {
        $this->userTerminalId = $userTerminalId;
    }

    /**
     * 氏名を取得する<br>
     * @return string 氏名<br>
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * 氏名を設定する<br>
     * @param string $userName 氏名<br>
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * カナ名を取得する<br>
     * @return string カナ名<br>
     */
    public function getUserNameKana()
    {
        return $this->userNameKana;
    }

    /**
     * カナ名を設定する<br>
     * @param string $userNameKana カナ名<br>
     */
    public function setUserNameKana($userNameKana)
    {
        $this->userNameKana = $userNameKana;
    }

    /**
     * 生年月日を取得する<br>
     * @return string 生年月日<br>
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * 生年月日を設定する<br>
     * @param string $birthDate 生年月日<br>
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * 性別を取得する<br>
     * @return string 性別<br>
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * 性別を設定する<br>
     * @param string $gender 性別<br>
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * 郵便番号を取得する<br>
     * @return string 郵便番号<br>
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * 郵便番号を設定する<br>
     * @param string $zipcode 郵便番号<br>
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * 住所を取得する<br>
     * @return string 住所<br>
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 住所を設定する<br>
     * @param string $address 住所<br>
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * 電話番号を取得する<br>
     * @return string 電話番号<br>
     */
    public function getTelNumber()
    {
        return $this->telNumber;
    }

    /**
     * 電話番号を設定する<br>
     * @param string $telNumber 電話番号<br>
     */
    public function setTelNumber($telNumber)
    {
        $this->telNumber = $telNumber;
    }

    /**
     * 携帯番号を取得する<br>
     * @return string 携帯番号<br>
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * 携帯番号を設定する<br>
     * @param string $mobileNumber 携帯番号<br>
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }

    /**
     * メールアドレスを取得する<br>
     * @return string メールアドレス<br>
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * メールアドレスを設定する<br>
     * @param string $emailAddress メールアドレス<br>
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * メールアドレス2を取得する<br>
     * @return string メールアドレス2<br>
     */
    public function getEmailAddress2()
    {
        return $this->emailAddress2;
    }

    /**
     * メールアドレス2を設定する<br>
     * @param string $emailAddress2 メールアドレス2<br>
     */
    public function setEmailAddress2($emailAddress2)
    {
        $this->emailAddress2 = $emailAddress2;
    }

    /**
     * 摘要を取得する<br>
     * @return string 摘要<br>
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * 摘要を設定する<br>
     * @param string $remarks 摘要<br>
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
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
