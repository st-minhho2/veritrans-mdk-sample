<?php

namespace tgMdk\dto;

/**
 * 不正検知V2評価要求Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2RequestDto
{

    /**
     * 不正検知のみ実施フラグ<br>
     * 半角英数記号<br/>
     * 最大桁数：5<br/>
     */
    private $fraudDetectionOnly;

    /**
     * 不正検知動作モード<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $fraudDetectionMode;

    /**
     * 対象サービス種別<br>
     * 半角英数記号<br/>
     * 最大桁数：10<br/>
     */
    private $targetServiceTypeCd;

    /**
     * 対象取引ID<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $targetOrderId;

    /**
     * 注文番号<br>
     * 半角英数記号<br/>
     * 最大桁数：40<br/>
     */
    private $merchantTransactionId;

    /**
     * トランザクション種類<br>
     * 半角英数記号<br/>
     * 最大桁数：2<br/>
     */
    private $transactionCategory;

    /**
     * 決済合計額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $amount;

    /**
     * 通貨<br>
     * 半角英字<br/>
     * 最大桁数：3<br/>
     */
    private $currency;

    /**
     * カードブランドタイプ<br>
     * 半角英数記号<br/>
     * 最大桁数：32<br/>
     */
    private $paymentBrand;

    /**
     * カード情報<br>
     * FraudDetectionV2CardDto<br/>
     */
    private $card;

    /**
     * 口座情報<br>
     * FraudDetectionV2BankAccountDto<br/>
     */
    private $bankAccount;

    /**
     * 税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $taxAmount;

    /**
     * リスク情報<br>
     * FraudDetectionV2RiskDto<br/>
     */
    private $risk;

    /**
     * 3Dセキュア情報<br>
     * FraudDetectionV2ThreeDSecureDto<br/>
     */
    private $threeDSecure;

    /**
     * 顧客情報<br>
     * FraudDetectionV2CustomerDto<br/>
     */
    private $customer;

    /**
     * 請求情報<br>
     * FraudDetectionV2BillingDto<br/>
     */
    private $billing;

    /**
     * 配送情報<br>
     * FraudDetectionV2ShippingDto<br/>
     */
    private $shipping;

    /**
     * 企業情報<br>
     * FraudDetectionV2CorporateDto<br/>
     */
    private $corporate;

    /**
     * カート情報<br>
     * FraudDetectionV2CartDto<br/>
     */
    private $cart;

    /**
     * ギフトカード情報<br>
     * FraudDetectionV2GiftCardDto<br/>
     */
    private $giftCard;

    /**
     * 航空券情報<br>
     * FraudDetectionV2AirlineDto<br/>
     */
    private $airline;


    /**
     * 不正検知のみ実施フラグを取得する<br>
     * @return string 不正検知のみ実施フラグ<br>
     */
    public function getFraudDetectionOnly()
    {
        return $this->fraudDetectionOnly;
    }

    /**
     * 不正検知のみ実施フラグを設定する<br>
     * @param string $fraudDetectionOnly 不正検知のみ実施フラグ<br>
     */
    public function setFraudDetectionOnly($fraudDetectionOnly)
    {
        $this->fraudDetectionOnly = $fraudDetectionOnly;
    }

    /**
     * 不正検知動作モードを取得する<br>
     * @return string 不正検知動作モード<br>
     */
    public function getFraudDetectionMode()
    {
        return $this->fraudDetectionMode;
    }

    /**
     * 不正検知動作モードを設定する<br>
     * @param string $fraudDetectionMode 不正検知動作モード<br>
     */
    public function setFraudDetectionMode($fraudDetectionMode)
    {
        $this->fraudDetectionMode = $fraudDetectionMode;
    }

    /**
     * 対象サービス種別を取得する<br>
     * @return string 対象サービス種別<br>
     */
    public function getTargetServiceTypeCd()
    {
        return $this->targetServiceTypeCd;
    }

    /**
     * 対象サービス種別を設定する<br>
     * @param string $targetServiceTypeCd 対象サービス種別<br>
     */
    public function setTargetServiceTypeCd($targetServiceTypeCd)
    {
        $this->targetServiceTypeCd = $targetServiceTypeCd;
    }

    /**
     * 対象取引IDを取得する<br>
     * @return string 対象取引ID<br>
     */
    public function getTargetOrderId()
    {
        return $this->targetOrderId;
    }

    /**
     * 対象取引IDを設定する<br>
     * @param string $targetOrderId 対象取引ID<br>
     */
    public function setTargetOrderId($targetOrderId)
    {
        $this->targetOrderId = $targetOrderId;
    }

    /**
     * 注文番号を取得する<br>
     * @return string 注文番号<br>
     */
    public function getMerchantTransactionId()
    {
        return $this->merchantTransactionId;
    }

    /**
     * 注文番号を設定する<br>
     * @param string $merchantTransactionId 注文番号<br>
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        $this->merchantTransactionId = $merchantTransactionId;
    }

    /**
     * トランザクション種類を取得する<br>
     * @return string トランザクション種類<br>
     */
    public function getTransactionCategory()
    {
        return $this->transactionCategory;
    }

    /**
     * トランザクション種類を設定する<br>
     * @param string $transactionCategory トランザクション種類<br>
     */
    public function setTransactionCategory($transactionCategory)
    {
        $this->transactionCategory = $transactionCategory;
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
     * 通貨を取得する<br>
     * @return string 通貨<br>
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * 通貨を設定する<br>
     * @param string $currency 通貨<br>
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * カードブランドタイプを取得する<br>
     * @return string カードブランドタイプ<br>
     */
    public function getPaymentBrand()
    {
        return $this->paymentBrand;
    }

    /**
     * カードブランドタイプを設定する<br>
     * @param string $paymentBrand カードブランドタイプ<br>
     */
    public function setPaymentBrand($paymentBrand)
    {
        $this->paymentBrand = $paymentBrand;
    }

    /**
     * カード情報を取得する<br>
     * @return FraudDetectionV2CardDto カード情報<br>
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * カード情報を設定する<br>
     * @param FraudDetectionV2CardDto $card カード情報<br>
     */
    public function setCard($card)
    {
        $this->card = $card;
    }

    /**
     * 口座情報を取得する<br>
     * @return FraudDetectionV2BankAccountDto 口座情報<br>
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * 口座情報を設定する<br>
     * @param FraudDetectionV2BankAccountDto $bankAccount 口座情報<br>
     */
    public function setBankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;
    }

    /**
     * 税を取得する<br>
     * @return string 税<br>
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * 税を設定する<br>
     * @param string $taxAmount 税<br>
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * リスク情報を取得する<br>
     * @return FraudDetectionV2RiskDto リスク情報<br>
     */
    public function getRisk()
    {
        return $this->risk;
    }

    /**
     * リスク情報を設定する<br>
     * @param FraudDetectionV2RiskDto $risk リスク情報<br>
     */
    public function setRisk($risk)
    {
        $this->risk = $risk;
    }

    /**
     * 3Dセキュア情報を取得する<br>
     * @return FraudDetectionV2ThreeDSecureDto 3Dセキュア情報<br>
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * 3Dセキュア情報を設定する<br>
     * @param FraudDetectionV2ThreeDSecureDto $threeDSecure 3Dセキュア情報<br>
     */
    public function setThreeDSecure($threeDSecure)
    {
        $this->threeDSecure = $threeDSecure;
    }

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
     * 請求情報を取得する<br>
     * @return FraudDetectionV2BillingDto 請求情報<br>
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * 請求情報を設定する<br>
     * @param FraudDetectionV2BillingDto $billing 請求情報<br>
     */
    public function setBilling($billing)
    {
        $this->billing = $billing;
    }

    /**
     * 配送情報を取得する<br>
     * @return FraudDetectionV2ShippingDto 配送情報<br>
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * 配送情報を設定する<br>
     * @param FraudDetectionV2ShippingDto $shipping 配送情報<br>
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * 企業情報を取得する<br>
     * @return FraudDetectionV2CorporateDto 企業情報<br>
     */
    public function getCorporate()
    {
        return $this->corporate;
    }

    /**
     * 企業情報を設定する<br>
     * @param FraudDetectionV2CorporateDto $corporate 企業情報<br>
     */
    public function setCorporate($corporate)
    {
        $this->corporate = $corporate;
    }

    /**
     * カート情報を取得する<br>
     * @return FraudDetectionV2CartDto カート情報<br>
     */
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * カート情報を設定する<br>
     * @param FraudDetectionV2CartDto $cart カート情報<br>
     */
    public function setCart($cart)
    {
        $this->cart = $cart;
    }

    /**
     * ギフトカード情報を取得する<br>
     * @return FraudDetectionV2GiftCardDto ギフトカード情報<br>
     */
    public function getGiftCard()
    {
        return $this->giftCard;
    }

    /**
     * ギフトカード情報を設定する<br>
     * @param FraudDetectionV2GiftCardDto $giftCard ギフトカード情報<br>
     */
    public function setGiftCard($giftCard)
    {
        $this->giftCard = $giftCard;
    }

    /**
     * 航空券情報を取得する<br>
     * @return FraudDetectionV2AirlineDto 航空券情報<br>
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * 航空券情報を設定する<br>
     * @param FraudDetectionV2AirlineDto $airline 航空券情報<br>
     */
    public function setAirline($airline)
    {
        $this->airline = $airline;
    }


}
