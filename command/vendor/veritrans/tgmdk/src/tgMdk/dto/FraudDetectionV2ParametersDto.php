<?php

namespace tgMdk\dto;

/**
 * 不正検知V2パラメータ情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2ParametersDto
{

    /**
     * アカウントTOF<br>
     * 半角数字<br/>
     * 最大桁数：7<br/>
     */
    private $timeOnFile;

    /**
     * 認証種別<br>
     * 半角英数記号<br/>
     * 最大桁数：5<br/>
     */
    private $custVerification;

    /**
     * アクワイアラ応答コード<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     */
    private $authResponse;

    /**
     * アクワイアラ住所確認システム応答コード<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $avsResponse;

    /**
     * CVVインジケーター<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     */
    private $cvvIndicator;

    /**
     * CVVレスポンス<br>
     * 半角英数字<br/>
     * 最大桁数：1<br/>
     */
    private $cvvResponse;

    /**
     * CAVVステータス<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $cavvStatus;

    /**
     * 継続課金初回取引ID<br>
     * 半角英数記号<br/>
     * 最大桁数：40<br/>
     */
    private $parentOid;

    /**
     * 継続課金指定<br>
     * 半角数字<br/>
     * 最大桁数：1<br/>
     */
    private $rtrLeg;

    /**
     * プロモーションフラグ<br>
     * 文字列の配列<br/>
     * 最大桁数：1<br/>
     */
    private $itemProdCategory;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData1;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData2;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData3;

    /**
     * 請求先住所1<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData4;

    /**
     * 請求先住所2<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData5;

    /**
     * 請求先全住所<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData6;

    /**
     * 送付先住所1<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData7;

    /**
     * 送付先住所2<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData8;

    /**
     * 送付先全住所<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData9;

    /**
     * トランザクションID<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData10;

    /**
     * 再購入日数<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData11;

    /**
     * 過去購買回数<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData12;

    /**
     * ペイメントレスポンスコード<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData13;

    /**
     * 加盟店コード<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData14;

    /**
     * 郵便局・宅急便営業所留めフラグ<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData15;

    /**
     * 郵便局・宅急便営業所留め営業所名<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData16;

    /**
     * ユーザポイント残高<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData17;

    /**
     * カード登録変更回数<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData18;

    /**
     * クレジットカード名義<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData19;

    /**
     * カードTOF<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData20;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData21;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData22;

    /**
     * 3DSレスポンス<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData23;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData24;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData25;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData26;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData27;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData28;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData29;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData30;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData31;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData32;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData33;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData34;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData35;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData36;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData37;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData38;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData39;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData40;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData41;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData42;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData43;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData44;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData45;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData46;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData47;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData48;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData49;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData50;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData51;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData52;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData53;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData54;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：256<br/>
     */
    private $userData55;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData56;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData57;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData58;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData59;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData60;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData61;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData62;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData63;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData64;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData65;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData66;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData67;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData68;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData69;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData70;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData71;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData72;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData73;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData74;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData75;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData76;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData77;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData78;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData79;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData80;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData81;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData82;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData83;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData84;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData85;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData86;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData87;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData88;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData89;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData90;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData91;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData92;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData93;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData94;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData95;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData96;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData97;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData98;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData99;

    /**
     * 加盟店用の予備<br>
     * 全角半角文字<br/>
     * 最大桁数：30<br/>
     */
    private $userData100;


    /**
     * アカウントTOFを取得する<br>
     * @return string アカウントTOF<br>
     */
    public function getTimeOnFile()
    {
        return $this->timeOnFile;
    }

    /**
     * アカウントTOFを設定する<br>
     * @param string $timeOnFile アカウントTOF<br>
     */
    public function setTimeOnFile($timeOnFile)
    {
        $this->timeOnFile = $timeOnFile;
    }

    /**
     * 認証種別を取得する<br>
     * @return string 認証種別<br>
     */
    public function getCustVerification()
    {
        return $this->custVerification;
    }

    /**
     * 認証種別を設定する<br>
     * @param string $custVerification 認証種別<br>
     */
    public function setCustVerification($custVerification)
    {
        $this->custVerification = $custVerification;
    }

    /**
     * アクワイアラ応答コードを取得する<br>
     * @return string アクワイアラ応答コード<br>
     */
    public function getAuthResponse()
    {
        return $this->authResponse;
    }

    /**
     * アクワイアラ応答コードを設定する<br>
     * @param string $authResponse アクワイアラ応答コード<br>
     */
    public function setAuthResponse($authResponse)
    {
        $this->authResponse = $authResponse;
    }

    /**
     * アクワイアラ住所確認システム応答コードを取得する<br>
     * @return string アクワイアラ住所確認システム応答コード<br>
     */
    public function getAvsResponse()
    {
        return $this->avsResponse;
    }

    /**
     * アクワイアラ住所確認システム応答コードを設定する<br>
     * @param string $avsResponse アクワイアラ住所確認システム応答コード<br>
     */
    public function setAvsResponse($avsResponse)
    {
        $this->avsResponse = $avsResponse;
    }

    /**
     * CVVインジケーターを取得する<br>
     * @return string CVVインジケーター<br>
     */
    public function getCvvIndicator()
    {
        return $this->cvvIndicator;
    }

    /**
     * CVVインジケーターを設定する<br>
     * @param string $cvvIndicator CVVインジケーター<br>
     */
    public function setCvvIndicator($cvvIndicator)
    {
        $this->cvvIndicator = $cvvIndicator;
    }

    /**
     * CVVレスポンスを取得する<br>
     * @return string CVVレスポンス<br>
     */
    public function getCvvResponse()
    {
        return $this->cvvResponse;
    }

    /**
     * CVVレスポンスを設定する<br>
     * @param string $cvvResponse CVVレスポンス<br>
     */
    public function setCvvResponse($cvvResponse)
    {
        $this->cvvResponse = $cvvResponse;
    }

    /**
     * CAVVステータスを取得する<br>
     * @return string CAVVステータス<br>
     */
    public function getCavvStatus()
    {
        return $this->cavvStatus;
    }

    /**
     * CAVVステータスを設定する<br>
     * @param string $cavvStatus CAVVステータス<br>
     */
    public function setCavvStatus($cavvStatus)
    {
        $this->cavvStatus = $cavvStatus;
    }

    /**
     * 継続課金初回取引IDを取得する<br>
     * @return string 継続課金初回取引ID<br>
     */
    public function getParentOid()
    {
        return $this->parentOid;
    }

    /**
     * 継続課金初回取引IDを設定する<br>
     * @param string $parentOid 継続課金初回取引ID<br>
     */
    public function setParentOid($parentOid)
    {
        $this->parentOid = $parentOid;
    }

    /**
     * 継続課金指定を取得する<br>
     * @return string 継続課金指定<br>
     */
    public function getRtrLeg()
    {
        return $this->rtrLeg;
    }

    /**
     * 継続課金指定を設定する<br>
     * @param string $rtrLeg 継続課金指定<br>
     */
    public function setRtrLeg($rtrLeg)
    {
        $this->rtrLeg = $rtrLeg;
    }

    /**
     * プロモーションフラグを取得する<br>
     * @return string[] プロモーションフラグ<br>
     */
    public function getItemProdCategory()
    {
        return $this->itemProdCategory;
    }

    /**
     * プロモーションフラグを設定する<br>
     * @param string[] $itemProdCategory プロモーションフラグ<br>
     */
    public function setItemProdCategory($itemProdCategory)
    {
        $this->itemProdCategory = $itemProdCategory;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData1()
    {
        return $this->userData1;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData1 加盟店用の予備<br>
     */
    public function setUserData1($userData1)
    {
        $this->userData1 = $userData1;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData2()
    {
        return $this->userData2;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData2 加盟店用の予備<br>
     */
    public function setUserData2($userData2)
    {
        $this->userData2 = $userData2;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData3()
    {
        return $this->userData3;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData3 加盟店用の予備<br>
     */
    public function setUserData3($userData3)
    {
        $this->userData3 = $userData3;
    }

    /**
     * 請求先住所1を取得する<br>
     * @return string 請求先住所1<br>
     */
    public function getUserData4()
    {
        return $this->userData4;
    }

    /**
     * 請求先住所1を設定する<br>
     * @param string $userData4 請求先住所1<br>
     */
    public function setUserData4($userData4)
    {
        $this->userData4 = $userData4;
    }

    /**
     * 請求先住所2を取得する<br>
     * @return string 請求先住所2<br>
     */
    public function getUserData5()
    {
        return $this->userData5;
    }

    /**
     * 請求先住所2を設定する<br>
     * @param string $userData5 請求先住所2<br>
     */
    public function setUserData5($userData5)
    {
        $this->userData5 = $userData5;
    }

    /**
     * 請求先全住所を取得する<br>
     * @return string 請求先全住所<br>
     */
    public function getUserData6()
    {
        return $this->userData6;
    }

    /**
     * 請求先全住所を設定する<br>
     * @param string $userData6 請求先全住所<br>
     */
    public function setUserData6($userData6)
    {
        $this->userData6 = $userData6;
    }

    /**
     * 送付先住所1を取得する<br>
     * @return string 送付先住所1<br>
     */
    public function getUserData7()
    {
        return $this->userData7;
    }

    /**
     * 送付先住所1を設定する<br>
     * @param string $userData7 送付先住所1<br>
     */
    public function setUserData7($userData7)
    {
        $this->userData7 = $userData7;
    }

    /**
     * 送付先住所2を取得する<br>
     * @return string 送付先住所2<br>
     */
    public function getUserData8()
    {
        return $this->userData8;
    }

    /**
     * 送付先住所2を設定する<br>
     * @param string $userData8 送付先住所2<br>
     */
    public function setUserData8($userData8)
    {
        $this->userData8 = $userData8;
    }

    /**
     * 送付先全住所を取得する<br>
     * @return string 送付先全住所<br>
     */
    public function getUserData9()
    {
        return $this->userData9;
    }

    /**
     * 送付先全住所を設定する<br>
     * @param string $userData9 送付先全住所<br>
     */
    public function setUserData9($userData9)
    {
        $this->userData9 = $userData9;
    }

    /**
     * トランザクションIDを取得する<br>
     * @return string トランザクションID<br>
     */
    public function getUserData10()
    {
        return $this->userData10;
    }

    /**
     * トランザクションIDを設定する<br>
     * @param string $userData10 トランザクションID<br>
     */
    public function setUserData10($userData10)
    {
        $this->userData10 = $userData10;
    }

    /**
     * 再購入日数を取得する<br>
     * @return string 再購入日数<br>
     */
    public function getUserData11()
    {
        return $this->userData11;
    }

    /**
     * 再購入日数を設定する<br>
     * @param string $userData11 再購入日数<br>
     */
    public function setUserData11($userData11)
    {
        $this->userData11 = $userData11;
    }

    /**
     * 過去購買回数を取得する<br>
     * @return string 過去購買回数<br>
     */
    public function getUserData12()
    {
        return $this->userData12;
    }

    /**
     * 過去購買回数を設定する<br>
     * @param string $userData12 過去購買回数<br>
     */
    public function setUserData12($userData12)
    {
        $this->userData12 = $userData12;
    }

    /**
     * ペイメントレスポンスコードを取得する<br>
     * @return string ペイメントレスポンスコード<br>
     */
    public function getUserData13()
    {
        return $this->userData13;
    }

    /**
     * ペイメントレスポンスコードを設定する<br>
     * @param string $userData13 ペイメントレスポンスコード<br>
     */
    public function setUserData13($userData13)
    {
        $this->userData13 = $userData13;
    }

    /**
     * 加盟店コードを取得する<br>
     * @return string 加盟店コード<br>
     */
    public function getUserData14()
    {
        return $this->userData14;
    }

    /**
     * 加盟店コードを設定する<br>
     * @param string $userData14 加盟店コード<br>
     */
    public function setUserData14($userData14)
    {
        $this->userData14 = $userData14;
    }

    /**
     * 郵便局・宅急便営業所留めフラグを取得する<br>
     * @return string 郵便局・宅急便営業所留めフラグ<br>
     */
    public function getUserData15()
    {
        return $this->userData15;
    }

    /**
     * 郵便局・宅急便営業所留めフラグを設定する<br>
     * @param string $userData15 郵便局・宅急便営業所留めフラグ<br>
     */
    public function setUserData15($userData15)
    {
        $this->userData15 = $userData15;
    }

    /**
     * 郵便局・宅急便営業所留め営業所名を取得する<br>
     * @return string 郵便局・宅急便営業所留め営業所名<br>
     */
    public function getUserData16()
    {
        return $this->userData16;
    }

    /**
     * 郵便局・宅急便営業所留め営業所名を設定する<br>
     * @param string $userData16 郵便局・宅急便営業所留め営業所名<br>
     */
    public function setUserData16($userData16)
    {
        $this->userData16 = $userData16;
    }

    /**
     * ユーザポイント残高を取得する<br>
     * @return string ユーザポイント残高<br>
     */
    public function getUserData17()
    {
        return $this->userData17;
    }

    /**
     * ユーザポイント残高を設定する<br>
     * @param string $userData17 ユーザポイント残高<br>
     */
    public function setUserData17($userData17)
    {
        $this->userData17 = $userData17;
    }

    /**
     * カード登録変更回数を取得する<br>
     * @return string カード登録変更回数<br>
     */
    public function getUserData18()
    {
        return $this->userData18;
    }

    /**
     * カード登録変更回数を設定する<br>
     * @param string $userData18 カード登録変更回数<br>
     */
    public function setUserData18($userData18)
    {
        $this->userData18 = $userData18;
    }

    /**
     * クレジットカード名義を取得する<br>
     * @return string クレジットカード名義<br>
     */
    public function getUserData19()
    {
        return $this->userData19;
    }

    /**
     * クレジットカード名義を設定する<br>
     * @param string $userData19 クレジットカード名義<br>
     */
    public function setUserData19($userData19)
    {
        $this->userData19 = $userData19;
    }

    /**
     * カードTOFを取得する<br>
     * @return string カードTOF<br>
     */
    public function getUserData20()
    {
        return $this->userData20;
    }

    /**
     * カードTOFを設定する<br>
     * @param string $userData20 カードTOF<br>
     */
    public function setUserData20($userData20)
    {
        $this->userData20 = $userData20;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData21()
    {
        return $this->userData21;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData21 加盟店用の予備<br>
     */
    public function setUserData21($userData21)
    {
        $this->userData21 = $userData21;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData22()
    {
        return $this->userData22;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData22 加盟店用の予備<br>
     */
    public function setUserData22($userData22)
    {
        $this->userData22 = $userData22;
    }

    /**
     * 3DSレスポンスを取得する<br>
     * @return string 3DSレスポンス<br>
     */
    public function getUserData23()
    {
        return $this->userData23;
    }

    /**
     * 3DSレスポンスを設定する<br>
     * @param string $userData23 3DSレスポンス<br>
     */
    public function setUserData23($userData23)
    {
        $this->userData23 = $userData23;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData24()
    {
        return $this->userData24;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData24 加盟店用の予備<br>
     */
    public function setUserData24($userData24)
    {
        $this->userData24 = $userData24;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData25()
    {
        return $this->userData25;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData25 加盟店用の予備<br>
     */
    public function setUserData25($userData25)
    {
        $this->userData25 = $userData25;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData26()
    {
        return $this->userData26;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData26 加盟店用の予備<br>
     */
    public function setUserData26($userData26)
    {
        $this->userData26 = $userData26;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData27()
    {
        return $this->userData27;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData27 加盟店用の予備<br>
     */
    public function setUserData27($userData27)
    {
        $this->userData27 = $userData27;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData28()
    {
        return $this->userData28;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData28 加盟店用の予備<br>
     */
    public function setUserData28($userData28)
    {
        $this->userData28 = $userData28;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData29()
    {
        return $this->userData29;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData29 加盟店用の予備<br>
     */
    public function setUserData29($userData29)
    {
        $this->userData29 = $userData29;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData30()
    {
        return $this->userData30;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData30 加盟店用の予備<br>
     */
    public function setUserData30($userData30)
    {
        $this->userData30 = $userData30;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData31()
    {
        return $this->userData31;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData31 加盟店用の予備<br>
     */
    public function setUserData31($userData31)
    {
        $this->userData31 = $userData31;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData32()
    {
        return $this->userData32;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData32 加盟店用の予備<br>
     */
    public function setUserData32($userData32)
    {
        $this->userData32 = $userData32;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData33()
    {
        return $this->userData33;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData33 加盟店用の予備<br>
     */
    public function setUserData33($userData33)
    {
        $this->userData33 = $userData33;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData34()
    {
        return $this->userData34;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData34 加盟店用の予備<br>
     */
    public function setUserData34($userData34)
    {
        $this->userData34 = $userData34;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData35()
    {
        return $this->userData35;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData35 加盟店用の予備<br>
     */
    public function setUserData35($userData35)
    {
        $this->userData35 = $userData35;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData36()
    {
        return $this->userData36;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData36 加盟店用の予備<br>
     */
    public function setUserData36($userData36)
    {
        $this->userData36 = $userData36;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData37()
    {
        return $this->userData37;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData37 加盟店用の予備<br>
     */
    public function setUserData37($userData37)
    {
        $this->userData37 = $userData37;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData38()
    {
        return $this->userData38;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData38 加盟店用の予備<br>
     */
    public function setUserData38($userData38)
    {
        $this->userData38 = $userData38;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData39()
    {
        return $this->userData39;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData39 加盟店用の予備<br>
     */
    public function setUserData39($userData39)
    {
        $this->userData39 = $userData39;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData40()
    {
        return $this->userData40;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData40 加盟店用の予備<br>
     */
    public function setUserData40($userData40)
    {
        $this->userData40 = $userData40;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData41()
    {
        return $this->userData41;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData41 加盟店用の予備<br>
     */
    public function setUserData41($userData41)
    {
        $this->userData41 = $userData41;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData42()
    {
        return $this->userData42;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData42 加盟店用の予備<br>
     */
    public function setUserData42($userData42)
    {
        $this->userData42 = $userData42;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData43()
    {
        return $this->userData43;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData43 加盟店用の予備<br>
     */
    public function setUserData43($userData43)
    {
        $this->userData43 = $userData43;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData44()
    {
        return $this->userData44;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData44 加盟店用の予備<br>
     */
    public function setUserData44($userData44)
    {
        $this->userData44 = $userData44;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData45()
    {
        return $this->userData45;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData45 加盟店用の予備<br>
     */
    public function setUserData45($userData45)
    {
        $this->userData45 = $userData45;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData46()
    {
        return $this->userData46;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData46 加盟店用の予備<br>
     */
    public function setUserData46($userData46)
    {
        $this->userData46 = $userData46;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData47()
    {
        return $this->userData47;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData47 加盟店用の予備<br>
     */
    public function setUserData47($userData47)
    {
        $this->userData47 = $userData47;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData48()
    {
        return $this->userData48;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData48 加盟店用の予備<br>
     */
    public function setUserData48($userData48)
    {
        $this->userData48 = $userData48;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData49()
    {
        return $this->userData49;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData49 加盟店用の予備<br>
     */
    public function setUserData49($userData49)
    {
        $this->userData49 = $userData49;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData50()
    {
        return $this->userData50;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData50 加盟店用の予備<br>
     */
    public function setUserData50($userData50)
    {
        $this->userData50 = $userData50;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData51()
    {
        return $this->userData51;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData51 加盟店用の予備<br>
     */
    public function setUserData51($userData51)
    {
        $this->userData51 = $userData51;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData52()
    {
        return $this->userData52;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData52 加盟店用の予備<br>
     */
    public function setUserData52($userData52)
    {
        $this->userData52 = $userData52;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData53()
    {
        return $this->userData53;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData53 加盟店用の予備<br>
     */
    public function setUserData53($userData53)
    {
        $this->userData53 = $userData53;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData54()
    {
        return $this->userData54;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData54 加盟店用の予備<br>
     */
    public function setUserData54($userData54)
    {
        $this->userData54 = $userData54;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData55()
    {
        return $this->userData55;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData55 加盟店用の予備<br>
     */
    public function setUserData55($userData55)
    {
        $this->userData55 = $userData55;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData56()
    {
        return $this->userData56;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData56 加盟店用の予備<br>
     */
    public function setUserData56($userData56)
    {
        $this->userData56 = $userData56;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData57()
    {
        return $this->userData57;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData57 加盟店用の予備<br>
     */
    public function setUserData57($userData57)
    {
        $this->userData57 = $userData57;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData58()
    {
        return $this->userData58;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData58 加盟店用の予備<br>
     */
    public function setUserData58($userData58)
    {
        $this->userData58 = $userData58;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData59()
    {
        return $this->userData59;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData59 加盟店用の予備<br>
     */
    public function setUserData59($userData59)
    {
        $this->userData59 = $userData59;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData60()
    {
        return $this->userData60;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData60 加盟店用の予備<br>
     */
    public function setUserData60($userData60)
    {
        $this->userData60 = $userData60;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData61()
    {
        return $this->userData61;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData61 加盟店用の予備<br>
     */
    public function setUserData61($userData61)
    {
        $this->userData61 = $userData61;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData62()
    {
        return $this->userData62;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData62 加盟店用の予備<br>
     */
    public function setUserData62($userData62)
    {
        $this->userData62 = $userData62;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData63()
    {
        return $this->userData63;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData63 加盟店用の予備<br>
     */
    public function setUserData63($userData63)
    {
        $this->userData63 = $userData63;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData64()
    {
        return $this->userData64;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData64 加盟店用の予備<br>
     */
    public function setUserData64($userData64)
    {
        $this->userData64 = $userData64;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData65()
    {
        return $this->userData65;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData65 加盟店用の予備<br>
     */
    public function setUserData65($userData65)
    {
        $this->userData65 = $userData65;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData66()
    {
        return $this->userData66;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData66 加盟店用の予備<br>
     */
    public function setUserData66($userData66)
    {
        $this->userData66 = $userData66;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData67()
    {
        return $this->userData67;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData67 加盟店用の予備<br>
     */
    public function setUserData67($userData67)
    {
        $this->userData67 = $userData67;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData68()
    {
        return $this->userData68;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData68 加盟店用の予備<br>
     */
    public function setUserData68($userData68)
    {
        $this->userData68 = $userData68;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData69()
    {
        return $this->userData69;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData69 加盟店用の予備<br>
     */
    public function setUserData69($userData69)
    {
        $this->userData69 = $userData69;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData70()
    {
        return $this->userData70;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData70 加盟店用の予備<br>
     */
    public function setUserData70($userData70)
    {
        $this->userData70 = $userData70;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData71()
    {
        return $this->userData71;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData71 加盟店用の予備<br>
     */
    public function setUserData71($userData71)
    {
        $this->userData71 = $userData71;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData72()
    {
        return $this->userData72;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData72 加盟店用の予備<br>
     */
    public function setUserData72($userData72)
    {
        $this->userData72 = $userData72;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData73()
    {
        return $this->userData73;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData73 加盟店用の予備<br>
     */
    public function setUserData73($userData73)
    {
        $this->userData73 = $userData73;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData74()
    {
        return $this->userData74;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData74 加盟店用の予備<br>
     */
    public function setUserData74($userData74)
    {
        $this->userData74 = $userData74;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData75()
    {
        return $this->userData75;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData75 加盟店用の予備<br>
     */
    public function setUserData75($userData75)
    {
        $this->userData75 = $userData75;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData76()
    {
        return $this->userData76;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData76 加盟店用の予備<br>
     */
    public function setUserData76($userData76)
    {
        $this->userData76 = $userData76;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData77()
    {
        return $this->userData77;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData77 加盟店用の予備<br>
     */
    public function setUserData77($userData77)
    {
        $this->userData77 = $userData77;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData78()
    {
        return $this->userData78;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData78 加盟店用の予備<br>
     */
    public function setUserData78($userData78)
    {
        $this->userData78 = $userData78;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData79()
    {
        return $this->userData79;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData79 加盟店用の予備<br>
     */
    public function setUserData79($userData79)
    {
        $this->userData79 = $userData79;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData80()
    {
        return $this->userData80;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData80 加盟店用の予備<br>
     */
    public function setUserData80($userData80)
    {
        $this->userData80 = $userData80;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData81()
    {
        return $this->userData81;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData81 加盟店用の予備<br>
     */
    public function setUserData81($userData81)
    {
        $this->userData81 = $userData81;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData82()
    {
        return $this->userData82;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData82 加盟店用の予備<br>
     */
    public function setUserData82($userData82)
    {
        $this->userData82 = $userData82;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData83()
    {
        return $this->userData83;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData83 加盟店用の予備<br>
     */
    public function setUserData83($userData83)
    {
        $this->userData83 = $userData83;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData84()
    {
        return $this->userData84;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData84 加盟店用の予備<br>
     */
    public function setUserData84($userData84)
    {
        $this->userData84 = $userData84;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData85()
    {
        return $this->userData85;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData85 加盟店用の予備<br>
     */
    public function setUserData85($userData85)
    {
        $this->userData85 = $userData85;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData86()
    {
        return $this->userData86;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData86 加盟店用の予備<br>
     */
    public function setUserData86($userData86)
    {
        $this->userData86 = $userData86;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData87()
    {
        return $this->userData87;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData87 加盟店用の予備<br>
     */
    public function setUserData87($userData87)
    {
        $this->userData87 = $userData87;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData88()
    {
        return $this->userData88;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData88 加盟店用の予備<br>
     */
    public function setUserData88($userData88)
    {
        $this->userData88 = $userData88;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData89()
    {
        return $this->userData89;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData89 加盟店用の予備<br>
     */
    public function setUserData89($userData89)
    {
        $this->userData89 = $userData89;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData90()
    {
        return $this->userData90;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData90 加盟店用の予備<br>
     */
    public function setUserData90($userData90)
    {
        $this->userData90 = $userData90;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData91()
    {
        return $this->userData91;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData91 加盟店用の予備<br>
     */
    public function setUserData91($userData91)
    {
        $this->userData91 = $userData91;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData92()
    {
        return $this->userData92;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData92 加盟店用の予備<br>
     */
    public function setUserData92($userData92)
    {
        $this->userData92 = $userData92;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData93()
    {
        return $this->userData93;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData93 加盟店用の予備<br>
     */
    public function setUserData93($userData93)
    {
        $this->userData93 = $userData93;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData94()
    {
        return $this->userData94;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData94 加盟店用の予備<br>
     */
    public function setUserData94($userData94)
    {
        $this->userData94 = $userData94;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData95()
    {
        return $this->userData95;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData95 加盟店用の予備<br>
     */
    public function setUserData95($userData95)
    {
        $this->userData95 = $userData95;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData96()
    {
        return $this->userData96;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData96 加盟店用の予備<br>
     */
    public function setUserData96($userData96)
    {
        $this->userData96 = $userData96;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData97()
    {
        return $this->userData97;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData97 加盟店用の予備<br>
     */
    public function setUserData97($userData97)
    {
        $this->userData97 = $userData97;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData98()
    {
        return $this->userData98;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData98 加盟店用の予備<br>
     */
    public function setUserData98($userData98)
    {
        $this->userData98 = $userData98;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData99()
    {
        return $this->userData99;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData99 加盟店用の予備<br>
     */
    public function setUserData99($userData99)
    {
        $this->userData99 = $userData99;
    }

    /**
     * 加盟店用の予備を取得する<br>
     * @return string 加盟店用の予備<br>
     */
    public function getUserData100()
    {
        return $this->userData100;
    }

    /**
     * 加盟店用の予備を設定する<br>
     * @param string $userData100 加盟店用の予備<br>
     */
    public function setUserData100($userData100)
    {
        $this->userData100 = $userData100;
    }


}
