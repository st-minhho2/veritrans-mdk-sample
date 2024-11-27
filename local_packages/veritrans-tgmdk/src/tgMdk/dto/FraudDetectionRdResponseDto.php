<?php

namespace tgMdk\dto;

/**
 * 不正検知ReD詳細結果応答Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionRdResponseDto
{

    /**
     * 結果コード<br>
     * 半角英数字<br/>
     * 最大桁数：11<br/>
     */
    private $code;

    /**
     * リクエストID<br>
     * 半角数字<br/>
     * 最大桁数：16<br/>
     */
    private $requestId;

    /**
     * 取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：255<br/>
     */
    private $orderId;

    /**
     * トランザクションステータスコード<br>
     * 半角英数字<br/>
     * 最大桁数：10<br/>
     */
    private $riskStatusCode;

    /**
     * トランザクションスクリーニング結果<br>
     * 半角英字<br/>
     * 最大桁数：9<br/>
     */
    private $riskFraudStatusCode;

    /**
     * ReDレスポンスコード<br>
     * 半角数字<br/>
     * 最大桁数：4<br/>
     */
    private $riskResponseCode;

    /**
     * ReD取引ID<br>
     * 半角英数字<br/>
     * 最大桁数：32<br/>
     */
    private $riskOrderId;

    /**
     * ニューラルスコア<br>
     * 半角数字<br/>
     * 最大桁数：3<br/>
     */
    private $riskNeuralScore;

    /**
     * ルール該当コード一覧<br>
     * 半角英数字<br/>
     * 最大桁数：400<br/>
     */
    private $riskRuleCategory;

    /**
     * ID<br>
     * 半角英数記号<br/>
     * 最大桁数：50<br/>
     */
    private $id;

    /**
     * メッセージ<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $description;

    /**
     * マーチャントトランザクションID<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $merchantTransactionId;

    /**
     * ビルド番号<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $buildNumber;

    /**
     * タイムスタンプ<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $timestamp;

    /**
     * NDC<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $ndc;

    /**
     * 結果メッセージ<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $resultDescription;

    /**
     * 外部システムリンク<br>
     * 半角英数記号<br/>
     * 最大桁数：200<br/>
     */
    private $externalSystemLink;

    /**
     * アクション<br>
     * 半角英数記号<br/>
     * 最大桁数：50<br/>
     */
    private $action;

    /**
     * レポート<br>
     * 半角英数記号<br/>
     * 最大桁数：50<br/>
     */
    private $riskReport;

    /**
     * 不正検知メッセージ<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $riskFraudDescription;

    /**
     * トランザクションID<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $transactionId;

    /**
     * パラメータエラーメッセージ一覧<br>
     * 半角英数記号<br/>
     * 最大桁数：4000<br/>
     */
    private $parameterErrors;

    /**
     * 不正検知と紐付けられた取引のサービス種別<br>
     * 半角英数記号<br/>
     * 最大桁数：10<br/>
     */
    private $targetServiceTypeCd;

    /**
     * 不正検知と紐付けられた取引の取引ID<br>
     * 半角英数記号<br/>
     * 最大桁数：100<br/>
     */
    private $targetOrderId;


    /**
     * 結果XML(マスク済み)<br>
     * 半角英数字<br>
     */
    private $resultXml;

    /**
     * PayNowIDオブジェクト<br>
     * オブジェクト<br>
     * PayNowID用項目を格納するオブジェクト<br>
     */
    private $payNowIdResponse;


    /**
     * 結果コードを取得する<br>
     * @return string 結果コード<br>
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 結果コードを設定する<br>
     * @param string $code 結果コード<br>
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * リクエストIDを取得する<br>
     * @return string リクエストID<br>
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * リクエストIDを設定する<br>
     * @param string $requestId リクエストID<br>
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * 取引IDを取得する<br>
     * @return string 取引ID<br>
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * 取引IDを設定する<br>
     * @param string $orderId 取引ID<br>
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * トランザクションステータスコードを取得する<br>
     * @return string トランザクションステータスコード<br>
     */
    public function getRiskStatusCode()
    {
        return $this->riskStatusCode;
    }

    /**
     * トランザクションステータスコードを設定する<br>
     * @param string $riskStatusCode トランザクションステータスコード<br>
     */
    public function setRiskStatusCode($riskStatusCode)
    {
        $this->riskStatusCode = $riskStatusCode;
    }

    /**
     * トランザクションスクリーニング結果を取得する<br>
     * @return string トランザクションスクリーニング結果<br>
     */
    public function getRiskFraudStatusCode()
    {
        return $this->riskFraudStatusCode;
    }

    /**
     * トランザクションスクリーニング結果を設定する<br>
     * @param string $riskFraudStatusCode トランザクションスクリーニング結果<br>
     */
    public function setRiskFraudStatusCode($riskFraudStatusCode)
    {
        $this->riskFraudStatusCode = $riskFraudStatusCode;
    }

    /**
     * ReDレスポンスコードを取得する<br>
     * @return string ReDレスポンスコード<br>
     */
    public function getRiskResponseCode()
    {
        return $this->riskResponseCode;
    }

    /**
     * ReDレスポンスコードを設定する<br>
     * @param string $riskResponseCode ReDレスポンスコード<br>
     */
    public function setRiskResponseCode($riskResponseCode)
    {
        $this->riskResponseCode = $riskResponseCode;
    }

    /**
     * ReD取引IDを取得する<br>
     * @return string ReD取引ID<br>
     */
    public function getRiskOrderId()
    {
        return $this->riskOrderId;
    }

    /**
     * ReD取引IDを設定する<br>
     * @param string $riskOrderId ReD取引ID<br>
     */
    public function setRiskOrderId($riskOrderId)
    {
        $this->riskOrderId = $riskOrderId;
    }

    /**
     * ニューラルスコアを取得する<br>
     * @return string ニューラルスコア<br>
     */
    public function getRiskNeuralScore()
    {
        return $this->riskNeuralScore;
    }

    /**
     * ニューラルスコアを設定する<br>
     * @param string $riskNeuralScore ニューラルスコア<br>
     */
    public function setRiskNeuralScore($riskNeuralScore)
    {
        $this->riskNeuralScore = $riskNeuralScore;
    }

    /**
     * ルール該当コード一覧を取得する<br>
     * @return string ルール該当コード一覧<br>
     */
    public function getRiskRuleCategory()
    {
        return $this->riskRuleCategory;
    }

    /**
     * ルール該当コード一覧を設定する<br>
     * @param string $riskRuleCategory ルール該当コード一覧<br>
     */
    public function setRiskRuleCategory($riskRuleCategory)
    {
        $this->riskRuleCategory = $riskRuleCategory;
    }

    /**
     * IDを取得する<br>
     * @return string ID<br>
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * IDを設定する<br>
     * @param string $id ID<br>
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * メッセージを取得する<br>
     * @return string メッセージ<br>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * メッセージを設定する<br>
     * @param string $description メッセージ<br>
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * マーチャントトランザクションIDを取得する<br>
     * @return string マーチャントトランザクションID<br>
     */
    public function getMerchantTransactionId()
    {
        return $this->merchantTransactionId;
    }

    /**
     * マーチャントトランザクションIDを設定する<br>
     * @param string $merchantTransactionId マーチャントトランザクションID<br>
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        $this->merchantTransactionId = $merchantTransactionId;
    }

    /**
     * ビルド番号を取得する<br>
     * @return string ビルド番号<br>
     */
    public function getBuildNumber()
    {
        return $this->buildNumber;
    }

    /**
     * ビルド番号を設定する<br>
     * @param string $buildNumber ビルド番号<br>
     */
    public function setBuildNumber($buildNumber)
    {
        $this->buildNumber = $buildNumber;
    }

    /**
     * タイムスタンプを取得する<br>
     * @return string タイムスタンプ<br>
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * タイムスタンプを設定する<br>
     * @param string $timestamp タイムスタンプ<br>
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * NDCを取得する<br>
     * @return string NDC<br>
     */
    public function getNdc()
    {
        return $this->ndc;
    }

    /**
     * NDCを設定する<br>
     * @param string $ndc NDC<br>
     */
    public function setNdc($ndc)
    {
        $this->ndc = $ndc;
    }

    /**
     * 結果メッセージを取得する<br>
     * @return string 結果メッセージ<br>
     */
    public function getResultDescription()
    {
        return $this->resultDescription;
    }

    /**
     * 結果メッセージを設定する<br>
     * @param string $resultDescription 結果メッセージ<br>
     */
    public function setResultDescription($resultDescription)
    {
        $this->resultDescription = $resultDescription;
    }

    /**
     * 外部システムリンクを取得する<br>
     * @return string 外部システムリンク<br>
     */
    public function getExternalSystemLink()
    {
        return $this->externalSystemLink;
    }

    /**
     * 外部システムリンクを設定する<br>
     * @param string $externalSystemLink 外部システムリンク<br>
     */
    public function setExternalSystemLink($externalSystemLink)
    {
        $this->externalSystemLink = $externalSystemLink;
    }

    /**
     * アクションを取得する<br>
     * @return string アクション<br>
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * アクションを設定する<br>
     * @param string $action アクション<br>
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * レポートを取得する<br>
     * @return string レポート<br>
     */
    public function getRiskReport()
    {
        return $this->riskReport;
    }

    /**
     * レポートを設定する<br>
     * @param string $riskReport レポート<br>
     */
    public function setRiskReport($riskReport)
    {
        $this->riskReport = $riskReport;
    }

    /**
     * 不正検知メッセージを取得する<br>
     * @return string 不正検知メッセージ<br>
     */
    public function getRiskFraudDescription()
    {
        return $this->riskFraudDescription;
    }

    /**
     * 不正検知メッセージを設定する<br>
     * @param string $riskFraudDescription 不正検知メッセージ<br>
     */
    public function setRiskFraudDescription($riskFraudDescription)
    {
        $this->riskFraudDescription = $riskFraudDescription;
    }

    /**
     * トランザクションIDを取得する<br>
     * @return string トランザクションID<br>
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * トランザクションIDを設定する<br>
     * @param string $transactionId トランザクションID<br>
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * パラメータエラーメッセージ一覧を取得する<br>
     * @return string パラメータエラーメッセージ一覧<br>
     */
    public function getParameterErrors()
    {
        return $this->parameterErrors;
    }

    /**
     * パラメータエラーメッセージ一覧を設定する<br>
     * @param string $parameterErrors パラメータエラーメッセージ一覧<br>
     */
    public function setParameterErrors($parameterErrors)
    {
        $this->parameterErrors = $parameterErrors;
    }

    /**
     * 不正検知と紐付けられた取引のサービス種別を取得する<br>
     * @return string 不正検知と紐付けられた取引のサービス種別<br>
     */
    public function getTargetServiceTypeCd()
    {
        return $this->targetServiceTypeCd;
    }

    /**
     * 不正検知と紐付けられた取引のサービス種別を設定する<br>
     * @param string $targetServiceTypeCd 不正検知と紐付けられた取引のサービス種別<br>
     */
    public function setTargetServiceTypeCd($targetServiceTypeCd)
    {
        $this->targetServiceTypeCd = $targetServiceTypeCd;
    }

    /**
     * 不正検知と紐付けられた取引の取引IDを取得する<br>
     * @return string 不正検知と紐付けられた取引の取引ID<br>
     */
    public function getTargetOrderId()
    {
        return $this->targetOrderId;
    }

    /**
     * 不正検知と紐付けられた取引の取引IDを設定する<br>
     * @param string $targetOrderId 不正検知と紐付けられた取引の取引ID<br>
     */
    public function setTargetOrderId($targetOrderId)
    {
        $this->targetOrderId = $targetOrderId;
    }


}
