<?php

namespace tgMdk\dto;

/**
 * 不正検知V2配送情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2ShippingDto
{

    /**
     * 顧客情報<br>
     * FraudDetectionV2CustomerDto<br/>
     */
    private $customer;

    /**
     * 発送先マンション・アパート及び部屋番号<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $houseNumber1;

    /**
     * 発送先住所1<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $street1;

    /**
     * 発送先住所2<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $street2;

    /**
     * 発送先都道府県<br>
     * 全角半角文字<br/>
     * 最大桁数：20<br/>
     */
    private $city;

    /**
     * 発送先州<br>
     * 全角半角文字<br/>
     * 最大桁数：10<br/>
     */
    private $state;

    /**
     * 発送先国<br>
     * 半角英数記号<br/>
     * 最大桁数：2<br/>
     */
    private $country;

    /**
     * 発送先郵便番号<br>
     * 半角英数記号<br/>
     * 最大桁数：10<br/>
     */
    private $postcode;

    /**
     * 送料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $cost;

    /**
     * トラッキング番号<br>
     * 全角半角文字<br/>
     * 最大桁数：19<br/>
     */
    private $trackingNumber;

    /**
     * 発送時コメント<br>
     * 全角半角文字<br/>
     * 最大桁数：160<br/>
     */
    private $comment;

    /**
     * 配達会社<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $logisticsProvider;

    /**
     * 配送方法<br>
     * 半角英数記号<br/>
     * 最大桁数：40<br/>
     */
    private $method;


    /**
     * 顧客情報を取得する<br>
     * @return FraudDetectionV2CustomerDto 顧客情報<br>
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * 顧客情報を設定する<br>
     * @param FraudDetectionV2CustomerDto $customer 顧客情報<br>
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * 発送先マンション・アパート及び部屋番号を取得する<br>
     * @return string 発送先マンション・アパート及び部屋番号<br>
     */
    public function getHouseNumber1()
    {
        return $this->houseNumber1;
    }

    /**
     * 発送先マンション・アパート及び部屋番号を設定する<br>
     * @param string $houseNumber1 発送先マンション・アパート及び部屋番号<br>
     */
    public function setHouseNumber1($houseNumber1)
    {
        $this->houseNumber1 = $houseNumber1;
    }

    /**
     * 発送先住所1を取得する<br>
     * @return string 発送先住所1<br>
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * 発送先住所1を設定する<br>
     * @param string $street1 発送先住所1<br>
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
    }

    /**
     * 発送先住所2を取得する<br>
     * @return string 発送先住所2<br>
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * 発送先住所2を設定する<br>
     * @param string $street2 発送先住所2<br>
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;
    }

    /**
     * 発送先都道府県を取得する<br>
     * @return string 発送先都道府県<br>
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * 発送先都道府県を設定する<br>
     * @param string $city 発送先都道府県<br>
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * 発送先州を取得する<br>
     * @return string 発送先州<br>
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * 発送先州を設定する<br>
     * @param string $state 発送先州<br>
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * 発送先国を取得する<br>
     * @return string 発送先国<br>
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * 発送先国を設定する<br>
     * @param string $country 発送先国<br>
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * 発送先郵便番号を取得する<br>
     * @return string 発送先郵便番号<br>
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * 発送先郵便番号を設定する<br>
     * @param string $postcode 発送先郵便番号<br>
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * 送料を取得する<br>
     * @return string 送料<br>
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * 送料を設定する<br>
     * @param string $cost 送料<br>
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * トラッキング番号を取得する<br>
     * @return string トラッキング番号<br>
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * トラッキング番号を設定する<br>
     * @param string $trackingNumber トラッキング番号<br>
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * 発送時コメントを取得する<br>
     * @return string 発送時コメント<br>
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * 発送時コメントを設定する<br>
     * @param string $comment 発送時コメント<br>
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * 配達会社を取得する<br>
     * @return string 配達会社<br>
     */
    public function getLogisticsProvider()
    {
        return $this->logisticsProvider;
    }

    /**
     * 配達会社を設定する<br>
     * @param string $logisticsProvider 配達会社<br>
     */
    public function setLogisticsProvider($logisticsProvider)
    {
        $this->logisticsProvider = $logisticsProvider;
    }

    /**
     * 配送方法を取得する<br>
     * @return string 配送方法<br>
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * 配送方法を設定する<br>
     * @param string $method 配送方法<br>
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }


}
