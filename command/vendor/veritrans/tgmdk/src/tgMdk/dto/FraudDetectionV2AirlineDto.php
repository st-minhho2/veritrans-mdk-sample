<?php

namespace tgMdk\dto;

/**
 * 不正検知V2航空券情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2AirlineDto
{

    /**
     * 第三者による予約<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $thirdPartyBooking;

    /**
     * 代理店コード<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $agentCode;

    /**
     * 代理店名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $agentName;

    /**
     * 予約種別<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $bookingType;

    /**
     * 予約番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $bookingRefNum;

    /**
     * チケット配送方法<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $ticketDeliveryMethod;

    /**
     * チケット発行住所<br>
     * 半角英数記号<br/>
     * 最大桁数：120<br/>
     */
    private $ticketIssueAddress;

    /**
     * チケット発行日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $ticketIssueDate;

    /**
     * 税合計<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $totalTaxAmount;

    /**
     * 運賃合計<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $totalFareAmount;

    /**
     * 手数料合計<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $totalFeesAmount;

    /**
     * 搭乗者情報<br>
     * FraudDetectionV2PassengerDto[]<br/>
     */
    private $passengers;

    /**
     * 第三者による予約を取得する<br>
     * @return string 第三者による予約<br>
     */
    public function getThirdPartyBooking()
    {
        return $this->thirdPartyBooking;
    }

    /**
     * 第三者による予約を設定する<br>
     * @param string $thirdPartyBooking 第三者による予約<br>
     */
    public function setThirdPartyBooking($thirdPartyBooking)
    {
        $this->thirdPartyBooking = $thirdPartyBooking;
    }

    /**
     * 代理店コードを取得する<br>
     * @return string 代理店コード<br>
     */
    public function getAgentCode()
    {
        return $this->agentCode;
    }

    /**
     * 代理店コードを設定する<br>
     * @param string $agentCode 代理店コード<br>
     */
    public function setAgentCode($agentCode)
    {
        $this->agentCode = $agentCode;
    }

    /**
     * 代理店名を取得する<br>
     * @return string 代理店名<br>
     */
    public function getAgentName()
    {
        return $this->agentName;
    }

    /**
     * 代理店名を設定する<br>
     * @param string $agentName 代理店名<br>
     */
    public function setAgentName($agentName)
    {
        $this->agentName = $agentName;
    }

    /**
     * 予約種別を取得する<br>
     * @return string 予約種別<br>
     */
    public function getBookingType()
    {
        return $this->bookingType;
    }

    /**
     * 予約種別を設定する<br>
     * @param string $bookingType 予約種別<br>
     */
    public function setBookingType($bookingType)
    {
        $this->bookingType = $bookingType;
    }

    /**
     * 予約番号を取得する<br>
     * @return string 予約番号<br>
     */
    public function getBookingRefNum()
    {
        return $this->bookingRefNum;
    }

    /**
     * 予約番号を設定する<br>
     * @param string $bookingRefNum 予約番号<br>
     */
    public function setBookingRefNum($bookingRefNum)
    {
        $this->bookingRefNum = $bookingRefNum;
    }

    /**
     * チケット配送方法を取得する<br>
     * @return string チケット配送方法<br>
     */
    public function getTicketDeliveryMethod()
    {
        return $this->ticketDeliveryMethod;
    }

    /**
     * チケット配送方法を設定する<br>
     * @param string $ticketDeliveryMethod チケット配送方法<br>
     */
    public function setTicketDeliveryMethod($ticketDeliveryMethod)
    {
        $this->ticketDeliveryMethod = $ticketDeliveryMethod;
    }

    /**
     * チケット発行住所を取得する<br>
     * @return string チケット発行住所<br>
     */
    public function getTicketIssueAddress()
    {
        return $this->ticketIssueAddress;
    }

    /**
     * チケット発行住所を設定する<br>
     * @param string $ticketIssueAddress チケット発行住所<br>
     */
    public function setTicketIssueAddress($ticketIssueAddress)
    {
        $this->ticketIssueAddress = $ticketIssueAddress;
    }

    /**
     * チケット発行日を取得する<br>
     * @return string チケット発行日<br>
     */
    public function getTicketIssueDate()
    {
        return $this->ticketIssueDate;
    }

    /**
     * チケット発行日を設定する<br>
     * @param string $ticketIssueDate チケット発行日<br>
     */
    public function setTicketIssueDate($ticketIssueDate)
    {
        $this->ticketIssueDate = $ticketIssueDate;
    }

    /**
     * 税合計を取得する<br>
     * @return string 税合計<br>
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * 税合計を設定する<br>
     * @param string $totalTaxAmount 税合計<br>
     */
    public function setTotalTaxAmount($totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
    }

    /**
     * 運賃合計を取得する<br>
     * @return string 運賃合計<br>
     */
    public function getTotalFareAmount()
    {
        return $this->totalFareAmount;
    }

    /**
     * 運賃合計を設定する<br>
     * @param string $totalFareAmount 運賃合計<br>
     */
    public function setTotalFareAmount($totalFareAmount)
    {
        $this->totalFareAmount = $totalFareAmount;
    }

    /**
     * 手数料合計を取得する<br>
     * @return string 手数料合計<br>
     */
    public function getTotalFeesAmount()
    {
        return $this->totalFeesAmount;
    }

    /**
     * 手数料合計を設定する<br>
     * @param string $totalFeesAmount 手数料合計<br>
     */
    public function setTotalFeesAmount($totalFeesAmount)
    {
        $this->totalFeesAmount = $totalFeesAmount;
    }

    /**
     * 搭乗者情報を取得する<br>
     * @return FraudDetectionV2PassengerDto[] 搭乗者情報<br>
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * 搭乗者情報を設定する<br>
     * @param FraudDetectionV2PassengerDto[] $passengers 搭乗者情報<br>
     */
    public function setPassengers($passengers)
    {
        $this->passengers = $passengers;
    }

}
