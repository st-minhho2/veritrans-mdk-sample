<?php

namespace tgMdk\dto;

/**
 * 不正検知V2リスク情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2RiskDto
{

    /**
     * スクリーニング種別コード<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $serviceId;

    /**
     * 決済合計額<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     */
    private $amount;

    /**
     * トランザクション発生日時<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $orderTimestamp;

    /**
     * 加盟店ウェブサイトURL<br>
     * 全角半角文字<br/>
     * 最大桁数：60<br/>
     */
    private $merchantWebsite;

    /**
     * トークン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $accountToken;

    /**
     * パラメータ情報<br>
     * FraudDetectionV2ParametersDto<br/>
     */
    private $parameters;


    /**
     * スクリーニング種別コードを取得する<br>
     * @return string スクリーニング種別コード<br>
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * スクリーニング種別コードを設定する<br>
     * @param string $serviceId スクリーニング種別コード<br>
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;
    }

    /**
     * 決済合計額を取得する<br>
     * @return string 決済合計額<br>
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * 決済合計額を設定する<br>
     * @param string $amount 決済合計額<br>
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * トランザクション発生日時を取得する<br>
     * @return string トランザクション発生日時<br>
     */
    public function getOrderTimestamp()
    {
        return $this->orderTimestamp;
    }

    /**
     * トランザクション発生日時を設定する<br>
     * @param string $orderTimestamp トランザクション発生日時<br>
     */
    public function setOrderTimestamp($orderTimestamp)
    {
        $this->orderTimestamp = $orderTimestamp;
    }

    /**
     * 加盟店ウェブサイトURLを取得する<br>
     * @return string 加盟店ウェブサイトURL<br>
     */
    public function getMerchantWebsite()
    {
        return $this->merchantWebsite;
    }

    /**
     * 加盟店ウェブサイトURLを設定する<br>
     * @param string $merchantWebsite 加盟店ウェブサイトURL<br>
     */
    public function setMerchantWebsite($merchantWebsite)
    {
        $this->merchantWebsite = $merchantWebsite;
    }

    /**
     * トークン番号を取得する<br>
     * @return string トークン番号<br>
     */
    public function getAccountToken()
    {
        return $this->accountToken;
    }

    /**
     * トークン番号を設定する<br>
     * @param string $accountToken トークン番号<br>
     */
    public function setAccountToken($accountToken)
    {
        $this->accountToken = $accountToken;
    }

    /**
     * パラメータ情報を取得する<br>
     * @return FraudDetectionV2ParametersDto パラメータ情報<br>
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * パラメータ情報を設定する<br>
     * @param FraudDetectionV2ParametersDto $parameters パラメータ情報<br>
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }


}
