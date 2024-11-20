<?php

namespace tgMdk\dto;

/**
 * 不正検知V2カート情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2CartDto
{

    /**
     * 商品情報<br>
     * FraudDetectionV2ItemDto[]<br/>
     */
    private $items;


    /**
     * 商品情報を取得する<br>
     * @return FraudDetectionV2ItemDto[] 商品情報<br>
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * 商品情報を設定する<br>
     * @param FraudDetectionV2ItemDto[] $items 商品情報<br>
     */
    public function setItems($items)
    {
        $this->items = $items;
    }


}
