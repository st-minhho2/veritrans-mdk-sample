<?php

namespace tgMdk\dto;

/**
 * 検索条件:楽天検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class RakutenSearchParameter
{

    /**
     * 詳細オーダー決済状態<br>
     */
    private $detailOrderType;

    /**
     * 詳細コマンドタイプ名<br>
     */
    private $detailCommandType;

    /**
     * 商品番号<br>
     */
    private $itemId;

    /**
     * 決済種別<br>
     */
    private $payType;

    /**
     * 課金種別<br>
     */
    private $accountingType;

    /**
     * 承諾状態<br>
     */
    private $consentStatus;

    /**
     * 元取引ID<br>
     */
    private $originalOrderId;

    /**
     * 詳細オーダー決済状態を取得する<br>
     *
     * @return string[] 詳細オーダー決済状態<br>
     */
    public function getDetailOrderType()
    {
        return $this->detailOrderType;
    }

    /**
     * 詳細オーダー決済状態を設定する<br>
     *
     * @param string[] $detailOrderType 詳細オーダー決済状態<br>
     */
    public function setDetailOrderType($detailOrderType)
    {
        $this->detailOrderType = $detailOrderType;
    }

    /**
     * 詳細コマンドタイプ名を取得する<br>
     *
     * @return string[] 詳細コマンドタイプ名<br>
     */
    public function getDetailCommandType()
    {
        return $this->detailCommandType;
    }

    /**
     * 詳細コマンドタイプ名を設定する<br>
     *
     * @param string[] $detailCommandType 詳細コマンドタイプ名<br>
     */
    public function setDetailCommandType($detailCommandType)
    {
        $this->detailCommandType = $detailCommandType;
    }

    /**
     * 商品番号を取得する<br>
     *
     * @return string 商品番号<br>
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * 商品番号を設定する<br>
     *
     * @param string $itemId 商品番号<br>
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * 決済種別を取得する<br>
     *
     * @return string[] 決済種別<br>
     */
    public function getPayType()
    {
        return $this->payType;
    }

    /**
     * 決済種別を設定する<br>
     *
     * @param string[] $payType 決済種別<br>
     */
    public function setPayType($payType)
    {
        $this->payType = $payType;
    }

    /**
     * 課金種別を取得する<br>
     *
     * @return string 課金種別<br>
     */
    public function getAccountingType()
    {
        return $this->accountingType;
    }

    /**
     * 課金種別を設定する<br>
     *
     * @param string $accountingType 課金種別<br>
     */
    public function setAccountingType($accountingType)
    {
        $this->accountingType = $accountingType;
    }

    /**
     * 承諾状態を取得する<br>
     *
     * @return string[] 承諾状態<br>
     */
    public function getConsentStatus()
    {
        return $this->consentStatus;
    }

    /**
     * 承諾状態を設定する<br>
     *
     * @param string[] $consentStatus 承諾状態<br>
     */
    public function setConsentStatus($consentStatus)
    {
        $this->consentStatus = $consentStatus;
    }

    /**
     * 元取引IDを取得する<br>
     *
     * @return string 元取引ID<br>
     */
    public function getOriginalOrderId()
    {
        return $this->originalOrderId;
    }

    /**
     * 元取引IDを設定する<br>
     *
     * @param string $originalOrderId 元取引ID<br>
     */
    public function setOriginalOrderId($originalOrderId)
    {
        $this->originalOrderId = $originalOrderId;
    }


}
