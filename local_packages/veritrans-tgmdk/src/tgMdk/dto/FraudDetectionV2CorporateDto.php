<?php

namespace tgMdk\dto;

/**
 * 不正検知V2企業情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2CorporateDto
{

    /**
     * 企業住所2<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $address;

    /**
     * 企業住所都道府県<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $city;

    /**
     * 企業コメント<br>
     * 半角英数記号<br/>
     * 最大桁数：160<br/>
     */
    private $description;

    /**
     * 企業FAX番号<br>
     * 半角数字<br/>
     * 最大桁数：19<br/>
     */
    private $fax;

    /**
     * 企業名<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $name;

    /**
     * 企業電話番号<br>
     * 半角数字<br/>
     * 最大桁数：19<br/>
     */
    private $phone;

    /**
     * 企業ポスト番号<br>
     * 半角英数記号<br/>
     * 最大桁数：15<br/>
     */
    private $postboxNumber;

    /**
     * 企業郵便番号<br>
     * 全角半角文字<br/>
     * 最大桁数：10<br/>
     */
    private $postCode;

    /**
     * 企業購入フラグ<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $purchase;

    /**
     * 企業住所州<br>
     * 全角半角文字<br/>
     * 最大桁数：10<br/>
     */
    private $state;

    /**
     * 企業住所1<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $street;

    /**
     * 企業住所国<br>
     * 半角英数記号<br/>
     * 最大桁数：2<br/>
     */
    private $country;

    /**
     * 企業住所部屋番号など<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $suite;


    /**
     * 企業住所2を取得する<br>
     * @return string 企業住所2<br>
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 企業住所2を設定する<br>
     * @param string $address 企業住所2<br>
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * 企業住所都道府県を取得する<br>
     * @return string 企業住所都道府県<br>
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * 企業住所都道府県を設定する<br>
     * @param string $city 企業住所都道府県<br>
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * 企業コメントを取得する<br>
     * @return string 企業コメント<br>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 企業コメントを設定する<br>
     * @param string $description 企業コメント<br>
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * 企業FAX番号を取得する<br>
     * @return string 企業FAX番号<br>
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * 企業FAX番号を設定する<br>
     * @param string $fax 企業FAX番号<br>
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * 企業名を取得する<br>
     * @return string 企業名<br>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 企業名を設定する<br>
     * @param string $name 企業名<br>
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 企業電話番号を取得する<br>
     * @return string 企業電話番号<br>
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * 企業電話番号を設定する<br>
     * @param string $phone 企業電話番号<br>
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * 企業ポスト番号を取得する<br>
     * @return string 企業ポスト番号<br>
     */
    public function getPostboxNumber()
    {
        return $this->postboxNumber;
    }

    /**
     * 企業ポスト番号を設定する<br>
     * @param string $postboxNumber 企業ポスト番号<br>
     */
    public function setPostboxNumber($postboxNumber)
    {
        $this->postboxNumber = $postboxNumber;
    }

    /**
     * 企業郵便番号を取得する<br>
     * @return string 企業郵便番号<br>
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * 企業郵便番号を設定する<br>
     * @param string $postCode 企業郵便番号<br>
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
    }

    /**
     * 企業購入フラグを取得する<br>
     * @return string 企業購入フラグ<br>
     */
    public function getPurchase()
    {
        return $this->purchase;
    }

    /**
     * 企業購入フラグを設定する<br>
     * @param string $purchase 企業購入フラグ<br>
     */
    public function setPurchase($purchase)
    {
        $this->purchase = $purchase;
    }

    /**
     * 企業住所州を取得する<br>
     * @return string 企業住所州<br>
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * 企業住所州を設定する<br>
     * @param string $state 企業住所州<br>
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * 企業住所1を取得する<br>
     * @return string 企業住所1<br>
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * 企業住所1を設定する<br>
     * @param string $street 企業住所1<br>
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * 企業住所国を取得する<br>
     * @return string 企業住所国<br>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * 企業住所国を設定する<br>
     * @param string $country 企業住所国<br>
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * 企業住所部屋番号などを取得する<br>
     * @return string 企業住所部屋番号など<br>
     */
    public function getSuite()
    {
        return $this->suite;
    }

    /**
     * 企業住所部屋番号などを設定する<br>
     * @param string $suite 企業住所部屋番号など<br>
     */
    public function setSuite($suite)
    {
        $this->suite = $suite;
    }


}
