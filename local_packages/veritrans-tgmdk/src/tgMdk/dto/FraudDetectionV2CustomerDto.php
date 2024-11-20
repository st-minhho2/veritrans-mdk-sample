<?php

namespace tgMdk\dto;

/**
 * 不正検知V2顧客情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2CustomerDto
{

    /**
     * ユーザID<br>
     * 全角半角文字<br/>
     * 最大桁数：16<br/>
     */
    private $merchantCustomerId;

    /**
     * 名前<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $givenName;

    /**
     * ミドルネーム<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $middleName;

    /**
     * 苗字<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $surname;

    /**
     * 性別<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $sex;

    /**
     * 電話番号2<br>
     * 半角数字<br/>
     * 最大桁数：19<br/>
     */
    private $workPhone;

    /**
     * 生年月日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $birthDate;

    /**
     * 電話番号<br>
     * 半角数字<br/>
     * 最大桁数：19<br/>
     */
    private $phone;

    /**
     * モバイル電話番号<br>
     * 半角数字<br/>
     * 最大桁数：19<br/>
     */
    private $mobile;

    /**
     * メールアドレス<br>
     * 全角半角文字<br/>
     * 最大桁数：60<br/>
     */
    private $email;

    /**
     * 会社名<br>
     * 全角半角文字<br/>
     * 最大桁数：60<br/>
     */
    private $companyName;

    /**
     * IPアドレス<br>
     * 半角英数記号<br/>
     * 最大桁数：39<br/>
     */
    private $ip;

    /**
     * デバイス情報<br>
     * FraudDetectionV2BrowserFingerprintDto<br/>
     */
    private $browserFingerprint;

    /**
     * 政府発行ID<br>
     * 半角英数記号<br/>
     * 最大桁数：20<br/>
     */
    private $identificationDocId;

    /**
     * リピータフラグ<br>
     * 半角英数記号<br/>
     * 最大桁数：8<br/>
     */
    private $status;


    /**
     * ユーザIDを取得する<br>
     * @return string ユーザID<br>
     */
    public function getMerchantCustomerId()
    {
        return $this->merchantCustomerId;
    }

    /**
     * ユーザIDを設定する<br>
     * @param string $merchantCustomerId ユーザID<br>
     */
    public function setMerchantCustomerId($merchantCustomerId)
    {
        $this->merchantCustomerId = $merchantCustomerId;
    }

    /**
     * 名前を取得する<br>
     * @return string 名前<br>
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * 名前を設定する<br>
     * @param string $givenName 名前<br>
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * ミドルネームを取得する<br>
     * @return string ミドルネーム<br>
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * ミドルネームを設定する<br>
     * @param string $middleName ミドルネーム<br>
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;
    }

    /**
     * 苗字を取得する<br>
     * @return string 苗字<br>
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * 苗字を設定する<br>
     * @param string $surname 苗字<br>
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * 性別を取得する<br>
     * @return string 性別<br>
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * 性別を設定する<br>
     * @param string $sex 性別<br>
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * 電話番号2を取得する<br>
     * @return string 電話番号2<br>
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * 電話番号2を設定する<br>
     * @param string $workPhone 電話番号2<br>
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;
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
     * 電話番号を取得する<br>
     * @return string 電話番号<br>
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * 電話番号を設定する<br>
     * @param string $phone 電話番号<br>
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * モバイル電話番号を取得する<br>
     * @return string モバイル電話番号<br>
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * モバイル電話番号を設定する<br>
     * @param string $mobile モバイル電話番号<br>
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * メールアドレスを取得する<br>
     * @return string メールアドレス<br>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * メールアドレスを設定する<br>
     * @param string $email メールアドレス<br>
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * 会社名を取得する<br>
     * @return string 会社名<br>
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * 会社名を設定する<br>
     * @param string $companyName 会社名<br>
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * IPアドレスを取得する<br>
     * @return string IPアドレス<br>
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * IPアドレスを設定する<br>
     * @param string $ip IPアドレス<br>
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * デバイス情報を取得する<br>
     * @return FraudDetectionV2BrowserFingerprintDto デバイス情報<br>
     */
    public function getBrowserFingerprint()
    {
        return $this->browserFingerprint;
    }

    /**
     * デバイス情報を設定する<br>
     * @param FraudDetectionV2BrowserFingerprintDto $browserFingerprint デバイス情報<br>
     */
    public function setBrowserFingerprint($browserFingerprint)
    {
        $this->browserFingerprint = $browserFingerprint;
    }

    /**
     * 政府発行IDを取得する<br>
     * @return string 政府発行ID<br>
     */
    public function getIdentificationDocId()
    {
        return $this->identificationDocId;
    }

    /**
     * 政府発行IDを設定する<br>
     * @param string $identificationDocId 政府発行ID<br>
     */
    public function setIdentificationDocId($identificationDocId)
    {
        $this->identificationDocId = $identificationDocId;
    }

    /**
     * リピータフラグを取得する<br>
     * @return string リピータフラグ<br>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * リピータフラグを設定する<br>
     * @param string $status リピータフラグ<br>
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}
