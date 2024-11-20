<?php

namespace tgMdk\dto;

/**
 * 不正検知V2デバイス情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2BrowserFingerprintDto
{

    /**
     * デバイス情報値<br>
     * 半角英数記号<br/>
     * 最大桁数：65535<br/>
     */
    private $value;


    /**
     * デバイス情報値を取得する<br>
     * @return string デバイス情報値<br>
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * デバイス情報値を設定する<br>
     * @param string $value デバイス情報値<br>
     */
    public function setValue($value)
    {
        $this->value = $value;
    }


}
