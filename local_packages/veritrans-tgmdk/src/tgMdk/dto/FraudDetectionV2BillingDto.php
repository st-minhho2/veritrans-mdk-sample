<?php

namespace tgMdk\dto;

/**
 * 不正検知V2請求情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2BillingDto
{

    /**
     * アパート名・建物名+部屋番号<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $houseNumber1;

    /**
     * 請求先住所1<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $street1;

    /**
     * 請求先住所2<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $street2;

    /**
     * 請求先都道府県<br>
     * 全角半角文字<br/>
     * 最大桁数：20<br/>
     */
    private $city;

    /**
     * 請求先州<br>
     * 全角半角文字<br/>
     * 最大桁数：10<br/>
     */
    private $state;

    /**
     * 請求先国<br>
     * 半角英数記号<br/>
     * 最大桁数：2<br/>
     */
    private $country;

    /**
     * 請求先郵便番号<br>
     * 半角英数記号<br/>
     * 最大桁数：10<br/>
     */
    private $postcode;


    /**
     * アパート名・建物名+部屋番号を取得する<br>
     * @return string アパート名・建物名+部屋番号<br>
     */
    public function getHouseNumber1()
    {
        return $this->houseNumber1;
    }

    /**
     * アパート名・建物名+部屋番号を設定する<br>
     * @param string $houseNumber1 アパート名・建物名+部屋番号<br>
     */
    public function setHouseNumber1($houseNumber1)
    {
        $this->houseNumber1 = $houseNumber1;
    }

    /**
     * 請求先住所1を取得する<br>
     * @return string 請求先住所1<br>
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * 請求先住所1を設定する<br>
     * @param string $street1 請求先住所1<br>
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
    }

    /**
     * 請求先住所2を取得する<br>
     * @return string 請求先住所2<br>
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * 請求先住所2を設定する<br>
     * @param string $street2 請求先住所2<br>
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

    /**
     * 請求先都道府県を取得する<br>
     * @return string 請求先都道府県<br>
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * 請求先都道府県を設定する<br>
     * @param string $city 請求先都道府県<br>
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * 請求先州を取得する<br>
     * @return string 請求先州<br>
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * 請求先州を設定する<br>
     * @param string $state 請求先州<br>
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * 請求先国を取得する<br>
     * @return string 請求先国<br>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * 請求先国を設定する<br>
     * @param string $country 請求先国<br>
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * 請求先郵便番号を取得する<br>
     * @return string 請求先郵便番号<br>
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * 請求先郵便番号を設定する<br>
     * @param string $postcode 請求先郵便番号<br>
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }


}
