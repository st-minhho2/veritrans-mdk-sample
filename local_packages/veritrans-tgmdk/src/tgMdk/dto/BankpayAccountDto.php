<?php

namespace tgMdk\dto;

/**
 * 口座照会情報クラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class BankpayAccountDto
{

    /**
     * 口座ID<br>
     * 半角数字<br/>
     * 最大桁数：100<br/>
     * 検索対象口座の口座IDを返却します。<br/>
     * 会員IDに紐づく口座ID<br/>
     */
    private $accountId;

    /**
     * 口座番号<br>
     * 半角数字記号<br/>
     * 最大桁数：7<br/>
     * 検索対象口座の口座番号を返却します。<br/>
     */
    private $maskedAccountNum;

    /**
     * 銀行コード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     * 検索対象口座の銀行コードを返却します。<br/>
     */
    private $bankCode;

    /**
     * 支店コード<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     * 検索対象口座の支店コードを返却します。<br/>
     */
    private $branchCode;

    /**
     * 預金種目<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     * 検索対象口座の預金種目コードを返却します。<br/>
     */
    private $depositType;

    /**
     * 有効区分 <br>
     * 文字列<br/>
     * 最大桁数：5<br/>
     * 検索対象口座の有効区分を返却します。<br/>
     */
    private $isValid;

    /**
     * 口座名義人名<br>
     * 文字列<br/>
     * 最大桁数：30<br/>
     * 検索対象口座の口座名義人名を返却します。<br/>
     */
    private $maskedAccountName;



    /**
     * 口座IDを取得する<br>
     * @return string 口座ID<br>
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * 口座IDを設定する<br>
     * @param string $accountId 口座ID<br>
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }

    /**
     * 口座番号を取得する<br>
     * @return string 口座番号<br>
     */
    public function getMaskedAccountNum()
    {
        return $this->maskedAccountNum;
    }

    /**
     * 口座番号を設定する<br>
     * @param string $maskedAccountNum 口座番号<br>
     */
    public function setMaskedAccountNum($maskedAccountNum)
    {
        $this->maskedAccountNum = $maskedAccountNum;
    }

    /**
     * 銀行コードを取得する<br>
     * @return string 銀行コード<br>
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * 銀行コードを設定する<br>
     * @param string $bankCode 銀行コード<br>
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
    }

    /**
     * 支店コードを取得する<br>
     * @return string 支店コード<br>
     */
    public function getBranchCode()
    {
        return $this->branchCode;
    }

    /**
     * 支店コードを設定する<br>
     * @param string $branchCode 支店コード<br>
     */
    public function setBranchCode($branchCode)
    {
        $this->branchCode = $branchCode;
    }

    /**
     * 預金種目を取得する<br>
     * @return string 預金種目<br>
     */
    public function getDepositType()
    {
        return $this->depositType;
    }

    /**
     * 預金種目を設定する<br>
     * @param string $depositType 預金種目<br>
     */
    public function setDepositType($depositType)
    {
        $this->depositType = $depositType;
    }

    /**
     * 有効区分 を取得する<br>
     * @return string 有効区分 <br>
     */
    public function getIsValid()
    {
        return $this->isValid;
    }

    /**
     * 有効区分 を設定する<br>
     * @param string $isValid 有効区分 <br>
     */
    public function setIsValid($isValid)
    {
        $this->isValid = $isValid;
    }

    /**
     * 口座名義人名を取得する<br>
     * @return string 口座名義人名<br>
     */
    public function getMaskedAccountName()
    {
        return $this->maskedAccountName;
    }

    /**
     * 口座名義人名を設定する<br>
     * @param string $maskedAccountName 口座名義人名<br>
     */
    public function setMaskedAccountName($maskedAccountName)
    {
        $this->maskedAccountName = $maskedAccountName;
    }



}
