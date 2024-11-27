<?php

namespace tgMdk\dto;

/**
 * 不正検知V23Dセキュア情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2ThreeDSecureDto
{

    /**
     * ECI<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     */
    private $eci;


    /**
     * ECIを取得する<br>
     * @return string ECI<br>
     */
    public function getEci()
    {
        return $this->eci;
    }

    /**
     * ECIを設定する<br>
     * @param string $eci ECI<br>
     */
    public function setEci($eci)
    {
        $this->eci = $eci;
    }


}
