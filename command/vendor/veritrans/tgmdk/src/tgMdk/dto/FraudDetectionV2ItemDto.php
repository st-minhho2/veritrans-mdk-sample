<?php

namespace tgMdk\dto;

/**
 * 不正検知V2商品情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2ItemDto
{

    /**
     * 数量<br>
     * 半角数字<br/>
     * 最大桁数：5<br/>
     */
    private $quantity;

    /**
     * EAN/JANコード<br>
     * 半角英数記号<br/>
     * 最大桁数：30<br/>
     */
    private $partNumber;

    /**
     * 商品コード<br>
     * 半角英数記号<br/>
     * 最大桁数：18<br/>
     */
    private $productCode;

    /**
     * SKU<br>
     * 全角半角文字<br/>
     * 最大桁数：12<br/>
     */
    private $sku;

    /**
     * 商品ID<br>
     * 半角英数記号<br/>
     * 最大桁数：30<br/>
     */
    private $merchantItemId;

    /**
     * 商品カテゴリー<br>
     * 全角半角文字<br/>
     * 最大桁数：127<br/>
     */
    private $description;

    /**
     * 商品単価<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $originalPrice;

    /**
     * 発送商品のトラッキング番号<br>
     * 全角半角文字<br/>
     * 最大桁数：19<br/>
     */
    private $shippingTrackingNumber;

    /**
     * 商品名<br>
     * 全角半角文字<br/>
     * 最大桁数：64<br/>
     */
    private $name;

    /**
     * 割引金額<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $discount;

    /**
     * ギフトメッセージ<br>
     * 全角半角文字<br/>
     * 最大桁数：160<br/>
     */
    private $giftMessage;

    /**
     * 商品説明<br>
     * 全角半角文字<br/>
     * 最大桁数：160<br/>
     */
    private $shippingInstructions;

    /**
     * 発送商品の送付オプション<br>
     * 半角英数記号<br/>
     * 最大桁数：40<br/>
     */
    private $shippingMethod;

    /**
     * 商品タイプ<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $type;

    /**
     * 発送先住所2<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $recipientAddress;

    /**
     * 発送先マンション・アパート及び部屋番号<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $recipientApartment;

    /**
     * 発送先都道府県<br>
     * 全角半角文字<br/>
     * 最大桁数：20<br/>
     */
    private $recipientCity;

    /**
     * 発送先国<br>
     * 半角英数記号<br/>
     * 最大桁数：2<br/>
     */
    private $recipientCountry;

    /**
     * 発送先メールアドレス<br>
     * 全角半角文字<br/>
     * 最大桁数：60<br/>
     */
    private $recipientEmail;

    /**
     * 発送先名前<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $recipientFirstName;

    /**
     * 発送先苗字<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $recipientLastName;

    /**
     * 発送先ミドルネーム<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $recipientMiddleName;

    /**
     * 発送先電話番号<br>
     * 半角数字<br/>
     * 最大桁数：19<br/>
     */
    private $recipientPhone;

    /**
     * 発送先郵便番号<br>
     * 半角英数記号<br/>
     * 最大桁数：10<br/>
     */
    private $recipientPostcode;

    /**
     * 発送先敬称<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $recipientSalutation;

    /**
     * 発送先州<br>
     * 全角半角文字<br/>
     * 最大桁数：10<br/>
     */
    private $recipientState;

    /**
     * 発送先住所1<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $recipientStreet;


    /**
     * 数量を取得する<br>
     * @return string 数量<br>
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * 数量を設定する<br>
     * @param string $quantity 数量<br>
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * EAN/JANコードを取得する<br>
     * @return string EAN/JANコード<br>
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * EAN/JANコードを設定する<br>
     * @param string $partNumber EAN/JANコード<br>
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;
    }

    /**
     * 商品コードを取得する<br>
     * @return string 商品コード<br>
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * 商品コードを設定する<br>
     * @param string $productCode 商品コード<br>
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }

    /**
     * SKUを取得する<br>
     * @return string SKU<br>
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * SKUを設定する<br>
     * @param string $sku SKU<br>
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * 商品IDを取得する<br>
     * @return string 商品ID<br>
     */
    public function getMerchantItemId()
    {
        return $this->merchantItemId;
    }

    /**
     * 商品IDを設定する<br>
     * @param string $merchantItemId 商品ID<br>
     */
    public function setMerchantItemId($merchantItemId)
    {
        $this->merchantItemId = $merchantItemId;
    }

    /**
     * 商品カテゴリーを取得する<br>
     * @return string 商品カテゴリー<br>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * 商品カテゴリーを設定する<br>
     * @param string $description 商品カテゴリー<br>
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * 商品単価を取得する<br>
     * @return string 商品単価<br>
     */
    public function getOriginalPrice()
    {
        return $this->originalPrice;
    }

    /**
     * 商品単価を設定する<br>
     * @param string $originalPrice 商品単価<br>
     */
    public function setOriginalPrice($originalPrice)
    {
        $this->originalPrice = $originalPrice;
    }

    /**
     * 発送商品のトラッキング番号を取得する<br>
     * @return string 発送商品のトラッキング番号<br>
     */
    public function getShippingTrackingNumber()
    {
        return $this->shippingTrackingNumber;
    }

    /**
     * 発送商品のトラッキング番号を設定する<br>
     * @param string $shippingTrackingNumber 発送商品のトラッキング番号<br>
     */
    public function setShippingTrackingNumber($shippingTrackingNumber)
    {
        $this->shippingTrackingNumber = $shippingTrackingNumber;
    }

    /**
     * 商品名を取得する<br>
     * @return string 商品名<br>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 商品名を設定する<br>
     * @param string $name 商品名<br>
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 割引金額を取得する<br>
     * @return string 割引金額<br>
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * 割引金額を設定する<br>
     * @param string $discount 割引金額<br>
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * ギフトメッセージを取得する<br>
     * @return string ギフトメッセージ<br>
     */
    public function getGiftMessage()
    {
        return $this->giftMessage;
    }

    /**
     * ギフトメッセージを設定する<br>
     * @param string $giftMessage ギフトメッセージ<br>
     */
    public function setGiftMessage($giftMessage)
    {
        $this->giftMessage = $giftMessage;
    }

    /**
     * 商品説明を取得する<br>
     * @return string 商品説明<br>
     */
    public function getShippingInstructions()
    {
        return $this->shippingInstructions;
    }

    /**
     * 商品説明を設定する<br>
     * @param string $shippingInstructions 商品説明<br>
     */
    public function setShippingInstructions($shippingInstructions)
    {
        $this->shippingInstructions = $shippingInstructions;
    }

    /**
     * 発送商品の送付オプションを取得する<br>
     * @return string 発送商品の送付オプション<br>
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * 発送商品の送付オプションを設定する<br>
     * @param string $shippingMethod 発送商品の送付オプション<br>
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;
    }

    /**
     * 商品タイプを取得する<br>
     * @return string 商品タイプ<br>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 商品タイプを設定する<br>
     * @param string $type 商品タイプ<br>
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * 発送先住所2を取得する<br>
     * @return string 発送先住所2<br>
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    /**
     * 発送先住所2を設定する<br>
     * @param string $recipientAddress 発送先住所2<br>
     */
    public function setRecipientAddress($recipientAddress)
    {
        $this->recipientAddress = $recipientAddress;
    }

    /**
     * 発送先マンション・アパート及び部屋番号を取得する<br>
     * @return string 発送先マンション・アパート及び部屋番号<br>
     */
    public function getRecipientApartment()
    {
        return $this->recipientApartment;
    }

    /**
     * 発送先マンション・アパート及び部屋番号を設定する<br>
     * @param string $recipientApartment 発送先マンション・アパート及び部屋番号<br>
     */
    public function setRecipientApartment($recipientApartment)
    {
        $this->recipientApartment = $recipientApartment;
    }

    /**
     * 発送先都道府県を取得する<br>
     * @return string 発送先都道府県<br>
     */
    public function getRecipientCity()
    {
        return $this->recipientCity;
    }

    /**
     * 発送先都道府県を設定する<br>
     * @param string $recipientCity 発送先都道府県<br>
     */
    public function setRecipientCity($recipientCity)
    {
        $this->recipientCity = $recipientCity;
    }

    /**
     * 発送先国を取得する<br>
     * @return string 発送先国<br>
     */
    public function getRecipientCountry()
    {
        return $this->recipientCountry;
    }

    /**
     * 発送先国を設定する<br>
     * @param string $recipientCountry 発送先国<br>
     */
    public function setRecipientCountry($recipientCountry)
    {
        $this->recipientCountry = $recipientCountry;
    }

    /**
     * 発送先メールアドレスを取得する<br>
     * @return string 発送先メールアドレス<br>
     */
    public function getRecipientEmail()
    {
        return $this->recipientEmail;
    }

    /**
     * 発送先メールアドレスを設定する<br>
     * @param string $recipientEmail 発送先メールアドレス<br>
     */
    public function setRecipientEmail($recipientEmail)
    {
        $this->recipientEmail = $recipientEmail;
    }

    /**
     * 発送先名前を取得する<br>
     * @return string 発送先名前<br>
     */
    public function getRecipientFirstName()
    {
        return $this->recipientFirstName;
    }

    /**
     * 発送先名前を設定する<br>
     * @param string $recipientFirstName 発送先名前<br>
     */
    public function setRecipientFirstName($recipientFirstName)
    {
        $this->recipientFirstName = $recipientFirstName;
    }

    /**
     * 発送先苗字を取得する<br>
     * @return string 発送先苗字<br>
     */
    public function getRecipientLastName()
    {
        return $this->recipientLastName;
    }

    /**
     * 発送先苗字を設定する<br>
     * @param string $recipientLastName 発送先苗字<br>
     */
    public function setRecipientLastName($recipientLastName)
    {
        $this->recipientLastName = $recipientLastName;
    }

    /**
     * 発送先ミドルネームを取得する<br>
     * @return string 発送先ミドルネーム<br>
     */
    public function getRecipientMiddleName()
    {
        return $this->recipientMiddleName;
    }

    /**
     * 発送先ミドルネームを設定する<br>
     * @param string $recipientMiddleName 発送先ミドルネーム<br>
     */
    public function setRecipientMiddleName($recipientMiddleName)
    {
        $this->recipientMiddleName = $recipientMiddleName;
    }

    /**
     * 発送先電話番号を取得する<br>
     * @return string 発送先電話番号<br>
     */
    public function getRecipientPhone()
    {
        return $this->recipientPhone;
    }

    /**
     * 発送先電話番号を設定する<br>
     * @param string $recipientPhone 発送先電話番号<br>
     */
    public function setRecipientPhone($recipientPhone)
    {
        $this->recipientPhone = $recipientPhone;
    }

    /**
     * 発送先郵便番号を取得する<br>
     * @return string 発送先郵便番号<br>
     */
    public function getRecipientPostcode()
    {
        return $this->recipientPostcode;
    }

    /**
     * 発送先郵便番号を設定する<br>
     * @param string $recipientPostcode 発送先郵便番号<br>
     */
    public function setRecipientPostcode($recipientPostcode)
    {
        $this->recipientPostcode = $recipientPostcode;
    }

    /**
     * 発送先敬称を取得する<br>
     * @return string 発送先敬称<br>
     */
    public function getRecipientSalutation()
    {
        return $this->recipientSalutation;
    }

    /**
     * 発送先敬称を設定する<br>
     * @param string $recipientSalutation 発送先敬称<br>
     */
    public function setRecipientSalutation($recipientSalutation)
    {
        $this->recipientSalutation = $recipientSalutation;
    }

    /**
     * 発送先州を取得する<br>
     * @return string 発送先州<br>
     */
    public function getRecipientState()
    {
        return $this->recipientState;
    }

    /**
     * 発送先州を設定する<br>
     * @param string $recipientState 発送先州<br>
     */
    public function setRecipientState($recipientState)
    {
        $this->recipientState = $recipientState;
    }

    /**
     * 発送先住所1を取得する<br>
     * @return string 発送先住所1<br>
     */
    public function getRecipientStreet()
    {
        return $this->recipientStreet;
    }

    /**
     * 発送先住所1を設定する<br>
     * @param string $recipientStreet 発送先住所1<br>
     */
    public function setRecipientStreet($recipientStreet)
    {
        $this->recipientStreet = $recipientStreet;
    }


}
