<?php

namespace tgMdk\dto;

/**
 * 不正検知V2カード情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2CardDto
{

    /**
     * カード番号<br>
     * 半角英数記号<br/>
     * 最大桁数：32<br/>
     */
    private $number;

    /**
     * カード有効期限（月）<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     */
    private $expiryMonth;

    /**
     * カード有効期限（年）<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     */
    private $expiryYear;


    /**
     * カード番号を取得する<br>
     * @return string カード番号<br>
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * カード番号を設定する<br>
     * @param string $number カード番号<br>
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * カード有効期限（月）を取得する<br>
     * @return string カード有効期限（月）<br>
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * カード有効期限（月）を設定する<br>
     * @param string $expiryMonth カード有効期限（月）<br>
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;
    }

    /**
     * カード有効期限（年）を取得する<br>
     * @return string カード有効期限（年）<br>
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * カード有効期限（年）を設定する<br>
     * @param string $expiryYear カード有効期限（年）<br>
     */
    public function setExpiryYear($expiryYear)
    {
        $this->expiryYear = $expiryYear;
    }


}
