<?php

namespace tgMdk\dto;

/**
 * 不正検知V2ギフトカード情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2GiftCardDto
{

    /**
     * ギフトカードメッセージ<br>
     * 全角半角文字<br/>
     * 最大桁数：160<br/>
     */
    private $message;

    /**
     * ギフトカードタイプ<br>
     * 半角英数記号<br/>
     * 最大桁数：20<br/>
     */
    private $type;


    /**
     * ギフトカードメッセージを取得する<br>
     * @return string ギフトカードメッセージ<br>
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * ギフトカードメッセージを設定する<br>
     * @param string $message ギフトカードメッセージ<br>
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * ギフトカードタイプを取得する<br>
     * @return string ギフトカードタイプ<br>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * ギフトカードタイプを設定する<br>
     * @param string $type ギフトカードタイプ<br>
     */
    public function setType($type)
    {
        $this->type = $type;
    }


}
