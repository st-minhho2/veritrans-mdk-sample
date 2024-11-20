<?php

namespace tgMdk\dto;

/**
 * 不正検知V2口座情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2BankAccountDto
{

    /**
     * 保有者名<br>
     * 全角半角文字<br/>
     * 最大桁数：255<br/>
     */
    private $holder;


    /**
     * 保有者名を取得する<br>
     * @return string 保有者名<br>
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * 保有者名を設定する<br>
     * @param string $holder 保有者名<br>
     */
    public function setHolder($holder)
    {
        $this->holder = $holder;
    }


}
