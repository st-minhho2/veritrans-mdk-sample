<?php

namespace tgMdk\dto;

/**
 * 検索条件:Bankpay検索パラメータクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class BankpaySearchParameter
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
     * 決済センターのトランザクション管理ID <br>
     */
    private $centerTransactionId;

    /**
     * 会員ID<br>
     */
    private $memberId;

    /**
     * 口座ID<br>
     */
    private $accountId;

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
     * 決済センターのトランザクション管理ID を取得する<br>
     *
     * @return string 決済センターのトランザクション管理ID <br>
     */
    public function getCenterTransactionId()
    {
        return $this->centerTransactionId;
    }

    /**
     * 決済センターのトランザクション管理ID を設定する<br>
     *
     * @param string $centerTransactionId 決済センターのトランザクション管理ID <br>
     */
    public function setCenterTransactionId($centerTransactionId)
    {
        $this->centerTransactionId = $centerTransactionId;
    }

    /**
     * 会員IDを取得する<br>
     *
     * @return string 会員ID<br>
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * 会員IDを設定する<br>
     *
     * @param string $memberId 会員ID<br>
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }

    /**
     * 口座IDを取得する<br>
     *
     * @return string 口座ID<br>
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * 口座IDを設定する<br>
     * 口座IDを設定する場合、会員IDの設定は必須<br>
     *
     * @param string $accountId 口座ID<br>
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

}
