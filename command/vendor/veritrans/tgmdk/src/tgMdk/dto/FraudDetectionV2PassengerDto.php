<?php

namespace tgMdk\dto;

/**
 * 不正検知V2搭乗者情報Dtoクラス<br>
 *
 * @author Veritrans, Inc.
 *
 */
class FraudDetectionV2PassengerDto
{

    /**
     * チェックデジット<br>
     * 半角数字<br/>
     * 最大桁数：2<br/>
     */
    private $checkDigit;

    /**
     * 誕生日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $dob;

    /**
     * メールアドレス<br>
     * 半角英数記号<br/>
     * 最大桁数：45<br/>
     */
    private $email;

    /**
     * 会員番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $frequentFlyerNumber;

    /**
     * 氏名<br>
     * 半角英数記号<br/>
     * 最大桁数：70<br/>
     */
    private $name;

    /**
     * 電話番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $phone;

    /**
     * ステータス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $status;

    /**
     * チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $ticketNumber;

    /**
     * チケット制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $ticketRestricted;

    /**
     * 種別<br>
     * 半角英数記号<br/>
     * 最大桁数：30<br/>
     */
    private $type;

    /**
     * 区間1航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs1AirlineName;

    /**
     * 区間1航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs1AirlineCode;

    /**
     * 区間1到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs1ArrivalAirport;

    /**
     * 区間1到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs1ArrivalCountry;

    /**
     * 区間1到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs1ArrivalDate;

    /**
     * 区間1到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs1ArrivalTime;

    /**
     * 区間1会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs1CarrierCode;

    /**
     * 区間1サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs1ClassOfService;

    /**
     * 区間1クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs1CouponNumber;

    /**
     * 区間1出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs1DepartureAirport;

    /**
     * 区間1出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs1DepartureCountry;

    /**
     * 区間1出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs1DepartureDate;

    /**
     * 区間1出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs1DepartureTime;

    /**
     * 区間1出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs1DepartureTaxAmount;

    /**
     * 区間1チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs1ExchangeTicketNum;

    /**
     * 区間1運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs1FareAmount;

    /**
     * 区間1基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs1FareBasis;

    /**
     * 区間1手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs1FeesAmount;

    /**
     * 区間1フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs1FlightNumber;

    /**
     * 区間1制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs1Restrictions;

    /**
     * 区間1途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs1StopOverAllowed;

    /**
     * 区間1税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs1TaxAmount;

    /**
     * 区間1チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs1TicketNumber;

    /**
     * 区間2航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs2AirlineName;

    /**
     * 区間2航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs2AirlineCode;

    /**
     * 区間2到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs2ArrivalAirport;

    /**
     * 区間2到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs2ArrivalCountry;

    /**
     * 区間2到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs2ArrivalDate;

    /**
     * 区間2到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs2ArrivalTime;

    /**
     * 区間2会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs2CarrierCode;

    /**
     * 区間2サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs2ClassOfService;

    /**
     * 区間2クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs2CouponNumber;

    /**
     * 区間2出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs2DepartureAirport;

    /**
     * 区間2出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs2DepartureCountry;

    /**
     * 区間2出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs2DepartureDate;

    /**
     * 区間2出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs2DepartureTime;

    /**
     * 区間2出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs2DepartureTaxAmount;

    /**
     * 区間2チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs2ExchangeTicketNum;

    /**
     * 区間2運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs2FareAmount;

    /**
     * 区間2基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs2FareBasis;

    /**
     * 区間2手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs2FeesAmount;

    /**
     * 区間2フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs2FlightNumber;

    /**
     * 区間2制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs2Restrictions;

    /**
     * 区間2途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs2StopOverAllowed;

    /**
     * 区間2税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs2TaxAmount;

    /**
     * 区間2チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs2TicketNumber;

    /**
     * 区間3航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs3AirlineName;

    /**
     * 区間3航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs3AirlineCode;

    /**
     * 区間3到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs3ArrivalAirport;

    /**
     * 区間3到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs3ArrivalCountry;

    /**
     * 区間3到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs3ArrivalDate;

    /**
     * 区間3到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs3ArrivalTime;

    /**
     * 区間3会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs3CarrierCode;

    /**
     * 区間3サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs3ClassOfService;

    /**
     * 区間3クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs3CouponNumber;

    /**
     * 区間3出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs3DepartureAirport;

    /**
     * 区間3出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs3DepartureCountry;

    /**
     * 区間3出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs3DepartureDate;

    /**
     * 区間3出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs3DepartureTime;

    /**
     * 区間3出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs3DepartureTaxAmount;

    /**
     * 区間3チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs3ExchangeTicketNum;

    /**
     * 区間3運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs3FareAmount;

    /**
     * 区間3基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs3FareBasis;

    /**
     * 区間3手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs3FeesAmount;

    /**
     * 区間3フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs3FlightNumber;

    /**
     * 区間3制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs3Restrictions;

    /**
     * 区間3途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs3StopOverAllowed;

    /**
     * 区間3税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs3TaxAmount;

    /**
     * 区間3チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs3TicketNumber;

    /**
     * 区間4航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs4AirlineName;

    /**
     * 区間4航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs4AirlineCode;

    /**
     * 区間4到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs4ArrivalAirport;

    /**
     * 区間4到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs4ArrivalCountry;

    /**
     * 区間4到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs4ArrivalDate;

    /**
     * 区間4到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs4ArrivalTime;

    /**
     * 区間4会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs4CarrierCode;

    /**
     * 区間4サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs4ClassOfService;

    /**
     * 区間4クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs4CouponNumber;

    /**
     * 区間4出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs4DepartureAirport;

    /**
     * 区間4出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs4DepartureCountry;

    /**
     * 区間4出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs4DepartureDate;

    /**
     * 区間4出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs4DepartureTime;

    /**
     * 区間4出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs4DepartureTaxAmount;

    /**
     * 区間4チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs4ExchangeTicketNum;

    /**
     * 区間4運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs4FareAmount;

    /**
     * 区間4基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs4FareBasis;

    /**
     * 区間4手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs4FeesAmount;

    /**
     * 区間4フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs4FlightNumber;

    /**
     * 区間4制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs4Restrictions;

    /**
     * 区間4途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs4StopOverAllowed;

    /**
     * 区間4税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs4TaxAmount;

    /**
     * 区間4チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs4TicketNumber;

    /**
     * 区間5航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs5AirlineName;

    /**
     * 区間5航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs5AirlineCode;

    /**
     * 区間5到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs5ArrivalAirport;

    /**
     * 区間5到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs5ArrivalCountry;

    /**
     * 区間5到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs5ArrivalDate;

    /**
     * 区間5到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs5ArrivalTime;

    /**
     * 区間5会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs5CarrierCode;

    /**
     * 区間5サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs5ClassOfService;

    /**
     * 区間5クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs5CouponNumber;

    /**
     * 区間5出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs5DepartureAirport;

    /**
     * 区間5出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs5DepartureCountry;

    /**
     * 区間5出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs5DepartureDate;

    /**
     * 区間5出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs5DepartureTime;

    /**
     * 区間5出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs5DepartureTaxAmount;

    /**
     * 区間5チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs5ExchangeTicketNum;

    /**
     * 区間5運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs5FareAmount;

    /**
     * 区間5基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs5FareBasis;

    /**
     * 区間5手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs5FeesAmount;

    /**
     * 区間5フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs5FlightNumber;

    /**
     * 区間5制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs5Restrictions;

    /**
     * 区間5途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs5StopOverAllowed;

    /**
     * 区間5税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs5TaxAmount;

    /**
     * 区間5チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs5TicketNumber;

    /**
     * 区間6航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs6AirlineName;

    /**
     * 区間6航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs6AirlineCode;

    /**
     * 区間6到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs6ArrivalAirport;

    /**
     * 区間6到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs6ArrivalCountry;

    /**
     * 区間6到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs6ArrivalDate;

    /**
     * 区間6到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs6ArrivalTime;

    /**
     * 区間6会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs6CarrierCode;

    /**
     * 区間6サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs6ClassOfService;

    /**
     * 区間6クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs6CouponNumber;

    /**
     * 区間6出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs6DepartureAirport;

    /**
     * 区間6出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs6DepartureCountry;

    /**
     * 区間6出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs6DepartureDate;

    /**
     * 区間6出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs6DepartureTime;

    /**
     * 区間6出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs6DepartureTaxAmount;

    /**
     * 区間6チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs6ExchangeTicketNum;

    /**
     * 区間6運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs6FareAmount;

    /**
     * 区間6基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs6FareBasis;

    /**
     * 区間6手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs6FeesAmount;

    /**
     * 区間6フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs6FlightNumber;

    /**
     * 区間6制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs6Restrictions;

    /**
     * 区間6途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs6StopOverAllowed;

    /**
     * 区間6税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs6TaxAmount;

    /**
     * 区間6チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs6TicketNumber;

    /**
     * 区間7航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs7AirlineName;

    /**
     * 区間7航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs7AirlineCode;

    /**
     * 区間7到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs7ArrivalAirport;

    /**
     * 区間7到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs7ArrivalCountry;

    /**
     * 区間7到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs7ArrivalDate;

    /**
     * 区間7到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs7ArrivalTime;

    /**
     * 区間7会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs7CarrierCode;

    /**
     * 区間7サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs7ClassOfService;

    /**
     * 区間7クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs7CouponNumber;

    /**
     * 区間7出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs7DepartureAirport;

    /**
     * 区間7出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs7DepartureCountry;

    /**
     * 区間7出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs7DepartureDate;

    /**
     * 区間7出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs7DepartureTime;

    /**
     * 区間7出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs7DepartureTaxAmount;

    /**
     * 区間7チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs7ExchangeTicketNum;

    /**
     * 区間7運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs7FareAmount;

    /**
     * 区間7基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs7FareBasis;

    /**
     * 区間7手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs7FeesAmount;

    /**
     * 区間7フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs7FlightNumber;

    /**
     * 区間7制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs7Restrictions;

    /**
     * 区間7途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs7StopOverAllowed;

    /**
     * 区間7税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs7TaxAmount;

    /**
     * 区間7チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs7TicketNumber;

    /**
     * 区間8航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs8AirlineName;

    /**
     * 区間8航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs8AirlineCode;

    /**
     * 区間8到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs8ArrivalAirport;

    /**
     * 区間8到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs8ArrivalCountry;

    /**
     * 区間8到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs8ArrivalDate;

    /**
     * 区間8到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs8ArrivalTime;

    /**
     * 区間8会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs8CarrierCode;

    /**
     * 区間8サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs8ClassOfService;

    /**
     * 区間8クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs8CouponNumber;

    /**
     * 区間8出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs8DepartureAirport;

    /**
     * 区間8出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs8DepartureCountry;

    /**
     * 区間8出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs8DepartureDate;

    /**
     * 区間8出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs8DepartureTime;

    /**
     * 区間8出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs8DepartureTaxAmount;

    /**
     * 区間8チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs8ExchangeTicketNum;

    /**
     * 区間8運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs8FareAmount;

    /**
     * 区間8基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs8FareBasis;

    /**
     * 区間8手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs8FeesAmount;

    /**
     * 区間8フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs8FlightNumber;

    /**
     * 区間8制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs8Restrictions;

    /**
     * 区間8途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs8StopOverAllowed;

    /**
     * 区間8税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs8TaxAmount;

    /**
     * 区間8チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs8TicketNumber;

    /**
     * 区間9航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs9AirlineName;

    /**
     * 区間9航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs9AirlineCode;

    /**
     * 区間9到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs9ArrivalAirport;

    /**
     * 区間9到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs9ArrivalCountry;

    /**
     * 区間9到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs9ArrivalDate;

    /**
     * 区間9到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs9ArrivalTime;

    /**
     * 区間9会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs9CarrierCode;

    /**
     * 区間9サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs9ClassOfService;

    /**
     * 区間9クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs9CouponNumber;

    /**
     * 区間9出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs9DepartureAirport;

    /**
     * 区間9出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs9DepartureCountry;

    /**
     * 区間9出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs9DepartureDate;

    /**
     * 区間9出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs9DepartureTime;

    /**
     * 区間9出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs9DepartureTaxAmount;

    /**
     * 区間9チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs9ExchangeTicketNum;

    /**
     * 区間9運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs9FareAmount;

    /**
     * 区間9基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs9FareBasis;

    /**
     * 区間9手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs9FeesAmount;

    /**
     * 区間9フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs9FlightNumber;

    /**
     * 区間9制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs9Restrictions;

    /**
     * 区間9途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs9StopOverAllowed;

    /**
     * 区間9税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs9TaxAmount;

    /**
     * 区間9チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs9TicketNumber;

    /**
     * 区間10航空会社名<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs10AirlineName;

    /**
     * 区間10航空会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs10AirlineCode;

    /**
     * 区間10到着空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs10ArrivalAirport;

    /**
     * 区間10到着国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs10ArrivalCountry;

    /**
     * 区間10到着日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs10ArrivalDate;

    /**
     * 区間10到着時間<br>
     * 半角英数記号<br/>
     * 最大桁数：16<br/>
     */
    private $legs10ArrivalTime;

    /**
     * 区間10会社コード<br>
     * 半角英数記号<br/>
     * 最大桁数：26<br/>
     */
    private $legs10CarrierCode;

    /**
     * 区間10サービスクラス<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs10ClassOfService;

    /**
     * 区間10クーポン番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs10CouponNumber;

    /**
     * 区間10出発空港<br>
     * 半角英数記号<br/>
     * 最大桁数：19<br/>
     */
    private $legs10DepartureAirport;

    /**
     * 区間10出発国<br>
     * 半角英数記号<br/>
     * 最大桁数：3<br/>
     */
    private $legs10DepartureCountry;

    /**
     * 区間10出発日<br>
     * 半角数記号<br/>
     * 最大桁数：10<br/>
     */
    private $legs10DepartureDate;

    /**
     * 区間10出発時間<br>
     * 半角数記号<br/>
     * 最大桁数：8<br/>
     */
    private $legs10DepartureTime;

    /**
     * 区間10出国税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs10DepartureTaxAmount;

    /**
     * 区間10チケット枚数<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs10ExchangeTicketNum;

    /**
     * 区間10運賃<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs10FareAmount;

    /**
     * 区間10基本運賃<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs10FareBasis;

    /**
     * 区間10手数料<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs10FeesAmount;

    /**
     * 区間10フライトナンバー<br>
     * 半角英数記号<br/>
     * 最大桁数：12<br/>
     */
    private $legs10FlightNumber;

    /**
     * 区間10制限<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs10Restrictions;

    /**
     * 区間10途中下車許可<br>
     * 半角英数記号<br/>
     * 最大桁数：1<br/>
     */
    private $legs10StopOverAllowed;

    /**
     * 区間10税<br>
     * 半角数字<br/>
     * 最大桁数：12<br/>
     */
    private $legs10TaxAmount;

    /**
     * 区間10チケット番号<br>
     * 半角英数記号<br/>
     * 最大桁数：64<br/>
     */
    private $legs10TicketNumber;


    /**
     * チェックデジットを取得する<br>
     * @return string チェックデジット<br>
     */
    public function getCheckDigit()
    {
        return $this->checkDigit;
    }

    /**
     * チェックデジットを設定する<br>
     * @param string $checkDigit チェックデジット<br>
     */
    public function setCheckDigit($checkDigit)
    {
        $this->checkDigit = $checkDigit;
    }

    /**
     * 誕生日を取得する<br>
     * @return string 誕生日<br>
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * 誕生日を設定する<br>
     * @param string $dob 誕生日<br>
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * メールアドレスを取得する<br>
     * @return string メールアドレス<br>
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * メールアドレスを設定する<br>
     * @param string $email メールアドレス<br>
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * 会員番号を取得する<br>
     * @return string 会員番号<br>
     */
    public function getFrequentFlyerNumber()
    {
        return $this->frequentFlyerNumber;
    }

    /**
     * 会員番号を設定する<br>
     * @param string $frequentFlyerNumber 会員番号<br>
     */
    public function setFrequentFlyerNumber($frequentFlyerNumber)
    {
        $this->frequentFlyerNumber = $frequentFlyerNumber;
    }

    /**
     * 氏名を取得する<br>
     * @return string 氏名<br>
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 氏名を設定する<br>
     * @param string $name 氏名<br>
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * 電話番号を取得する<br>
     * @return string 電話番号<br>
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * 電話番号を設定する<br>
     * @param string $phone 電話番号<br>
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * ステータスを取得する<br>
     * @return string ステータス<br>
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * ステータスを設定する<br>
     * @param string $status ステータス<br>
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * チケット番号を取得する<br>
     * @return string チケット番号<br>
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * チケット番号を設定する<br>
     * @param string $ticketNumber チケット番号<br>
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;
    }

    /**
     * チケット制限を取得する<br>
     * @return string チケット制限<br>
     */
    public function getTicketRestricted()
    {
        return $this->ticketRestricted;
    }

    /**
     * チケット制限を設定する<br>
     * @param string $ticketRestricted チケット制限<br>
     */
    public function setTicketRestricted($ticketRestricted)
    {
        $this->ticketRestricted = $ticketRestricted;
    }

    /**
     * 種別を取得する<br>
     * @return string 種別<br>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 種別を設定する<br>
     * @param string $type 種別<br>
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * 区間1航空会社名を取得する<br>
     * @return string 区間1航空会社名<br>
     */
    public function getLegs1AirlineName()
    {
        return $this->legs1AirlineName;
    }

    /**
     * 区間1航空会社名を設定する<br>
     * @param string $legs1AirlineName 区間1航空会社名<br>
     */
    public function setLegs1AirlineName($legs1AirlineName)
    {
        $this->legs1AirlineName = $legs1AirlineName;
    }

    /**
     * 区間1航空会社コードを取得する<br>
     * @return string 区間1航空会社コード<br>
     */
    public function getLegs1AirlineCode()
    {
        return $this->legs1AirlineCode;
    }

    /**
     * 区間1航空会社コードを設定する<br>
     * @param string $legs1AirlineCode 区間1航空会社コード<br>
     */
    public function setLegs1AirlineCode($legs1AirlineCode)
    {
        $this->legs1AirlineCode = $legs1AirlineCode;
    }

    /**
     * 区間1到着空港を取得する<br>
     * @return string 区間1到着空港<br>
     */
    public function getLegs1ArrivalAirport()
    {
        return $this->legs1ArrivalAirport;
    }

    /**
     * 区間1到着空港を設定する<br>
     * @param string $legs1ArrivalAirport 区間1到着空港<br>
     */
    public function setLegs1ArrivalAirport($legs1ArrivalAirport)
    {
        $this->legs1ArrivalAirport = $legs1ArrivalAirport;
    }

    /**
     * 区間1到着国を取得する<br>
     * @return string 区間1到着国<br>
     */
    public function getLegs1ArrivalCountry()
    {
        return $this->legs1ArrivalCountry;
    }

    /**
     * 区間1到着国を設定する<br>
     * @param string $legs1ArrivalCountry 区間1到着国<br>
     */
    public function setLegs1ArrivalCountry($legs1ArrivalCountry)
    {
        $this->legs1ArrivalCountry = $legs1ArrivalCountry;
    }

    /**
     * 区間1到着日を取得する<br>
     * @return string 区間1到着日<br>
     */
    public function getLegs1ArrivalDate()
    {
        return $this->legs1ArrivalDate;
    }

    /**
     * 区間1到着日を設定する<br>
     * @param string $legs1ArrivalDate 区間1到着日<br>
     */
    public function setLegs1ArrivalDate($legs1ArrivalDate)
    {
        $this->legs1ArrivalDate = $legs1ArrivalDate;
    }

    /**
     * 区間1到着時間を取得する<br>
     * @return string 区間1到着時間<br>
     */
    public function getLegs1ArrivalTime()
    {
        return $this->legs1ArrivalTime;
    }

    /**
     * 区間1到着時間を設定する<br>
     * @param string $legs1ArrivalTime 区間1到着時間<br>
     */
    public function setLegs1ArrivalTime($legs1ArrivalTime)
    {
        $this->legs1ArrivalTime = $legs1ArrivalTime;
    }

    /**
     * 区間1会社コードを取得する<br>
     * @return string 区間1会社コード<br>
     */
    public function getLegs1CarrierCode()
    {
        return $this->legs1CarrierCode;
    }

    /**
     * 区間1会社コードを設定する<br>
     * @param string $legs1CarrierCode 区間1会社コード<br>
     */
    public function setLegs1CarrierCode($legs1CarrierCode)
    {
        $this->legs1CarrierCode = $legs1CarrierCode;
    }

    /**
     * 区間1サービスクラスを取得する<br>
     * @return string 区間1サービスクラス<br>
     */
    public function getLegs1ClassOfService()
    {
        return $this->legs1ClassOfService;
    }

    /**
     * 区間1サービスクラスを設定する<br>
     * @param string $legs1ClassOfService 区間1サービスクラス<br>
     */
    public function setLegs1ClassOfService($legs1ClassOfService)
    {
        $this->legs1ClassOfService = $legs1ClassOfService;
    }

    /**
     * 区間1クーポン番号を取得する<br>
     * @return string 区間1クーポン番号<br>
     */
    public function getLegs1CouponNumber()
    {
        return $this->legs1CouponNumber;
    }

    /**
     * 区間1クーポン番号を設定する<br>
     * @param string $legs1CouponNumber 区間1クーポン番号<br>
     */
    public function setLegs1CouponNumber($legs1CouponNumber)
    {
        $this->legs1CouponNumber = $legs1CouponNumber;
    }

    /**
     * 区間1出発空港を取得する<br>
     * @return string 区間1出発空港<br>
     */
    public function getLegs1DepartureAirport()
    {
        return $this->legs1DepartureAirport;
    }

    /**
     * 区間1出発空港を設定する<br>
     * @param string $legs1DepartureAirport 区間1出発空港<br>
     */
    public function setLegs1DepartureAirport($legs1DepartureAirport)
    {
        $this->legs1DepartureAirport = $legs1DepartureAirport;
    }

    /**
     * 区間1出発国を取得する<br>
     * @return string 区間1出発国<br>
     */
    public function getLegs1DepartureCountry()
    {
        return $this->legs1DepartureCountry;
    }

    /**
     * 区間1出発国を設定する<br>
     * @param string $legs1DepartureCountry 区間1出発国<br>
     */
    public function setLegs1DepartureCountry($legs1DepartureCountry)
    {
        $this->legs1DepartureCountry = $legs1DepartureCountry;
    }

    /**
     * 区間1出発日を取得する<br>
     * @return string 区間1出発日<br>
     */
    public function getLegs1DepartureDate()
    {
        return $this->legs1DepartureDate;
    }

    /**
     * 区間1出発日を設定する<br>
     * @param string $legs1DepartureDate 区間1出発日<br>
     */
    public function setLegs1DepartureDate($legs1DepartureDate)
    {
        $this->legs1DepartureDate = $legs1DepartureDate;
    }

    /**
     * 区間1出発時間を取得する<br>
     * @return string 区間1出発時間<br>
     */
    public function getLegs1DepartureTime()
    {
        return $this->legs1DepartureTime;
    }

    /**
     * 区間1出発時間を設定する<br>
     * @param string $legs1DepartureTime 区間1出発時間<br>
     */
    public function setLegs1DepartureTime($legs1DepartureTime)
    {
        $this->legs1DepartureTime = $legs1DepartureTime;
    }

    /**
     * 区間1出国税を取得する<br>
     * @return string 区間1出国税<br>
     */
    public function getLegs1DepartureTaxAmount()
    {
        return $this->legs1DepartureTaxAmount;
    }

    /**
     * 区間1出国税を設定する<br>
     * @param string $legs1DepartureTaxAmount 区間1出国税<br>
     */
    public function setLegs1DepartureTaxAmount($legs1DepartureTaxAmount)
    {
        $this->legs1DepartureTaxAmount = $legs1DepartureTaxAmount;
    }

    /**
     * 区間1チケット枚数を取得する<br>
     * @return string 区間1チケット枚数<br>
     */
    public function getLegs1ExchangeTicketNum()
    {
        return $this->legs1ExchangeTicketNum;
    }

    /**
     * 区間1チケット枚数を設定する<br>
     * @param string $legs1ExchangeTicketNum 区間1チケット枚数<br>
     */
    public function setLegs1ExchangeTicketNum($legs1ExchangeTicketNum)
    {
        $this->legs1ExchangeTicketNum = $legs1ExchangeTicketNum;
    }

    /**
     * 区間1運賃を取得する<br>
     * @return string 区間1運賃<br>
     */
    public function getLegs1FareAmount()
    {
        return $this->legs1FareAmount;
    }

    /**
     * 区間1運賃を設定する<br>
     * @param string $legs1FareAmount 区間1運賃<br>
     */
    public function setLegs1FareAmount($legs1FareAmount)
    {
        $this->legs1FareAmount = $legs1FareAmount;
    }

    /**
     * 区間1基本運賃を取得する<br>
     * @return string 区間1基本運賃<br>
     */
    public function getLegs1FareBasis()
    {
        return $this->legs1FareBasis;
    }

    /**
     * 区間1基本運賃を設定する<br>
     * @param string $legs1FareBasis 区間1基本運賃<br>
     */
    public function setLegs1FareBasis($legs1FareBasis)
    {
        $this->legs1FareBasis = $legs1FareBasis;
    }

    /**
     * 区間1手数料を取得する<br>
     * @return string 区間1手数料<br>
     */
    public function getLegs1FeesAmount()
    {
        return $this->legs1FeesAmount;
    }

    /**
     * 区間1手数料を設定する<br>
     * @param string $legs1FeesAmount 区間1手数料<br>
     */
    public function setLegs1FeesAmount($legs1FeesAmount)
    {
        $this->legs1FeesAmount = $legs1FeesAmount;
    }

    /**
     * 区間1フライトナンバーを取得する<br>
     * @return string 区間1フライトナンバー<br>
     */
    public function getLegs1FlightNumber()
    {
        return $this->legs1FlightNumber;
    }

    /**
     * 区間1フライトナンバーを設定する<br>
     * @param string $legs1FlightNumber 区間1フライトナンバー<br>
     */
    public function setLegs1FlightNumber($legs1FlightNumber)
    {
        $this->legs1FlightNumber = $legs1FlightNumber;
    }

    /**
     * 区間1制限を取得する<br>
     * @return string 区間1制限<br>
     */
    public function getLegs1Restrictions()
    {
        return $this->legs1Restrictions;
    }

    /**
     * 区間1制限を設定する<br>
     * @param string $legs1Restrictions 区間1制限<br>
     */
    public function setLegs1Restrictions($legs1Restrictions)
    {
        $this->legs1Restrictions = $legs1Restrictions;
    }

    /**
     * 区間1途中下車許可を取得する<br>
     * @return string 区間1途中下車許可<br>
     */
    public function getLegs1StopOverAllowed()
    {
        return $this->legs1StopOverAllowed;
    }

    /**
     * 区間1途中下車許可を設定する<br>
     * @param string $legs1StopOverAllowed 区間1途中下車許可<br>
     */
    public function setLegs1StopOverAllowed($legs1StopOverAllowed)
    {
        $this->legs1StopOverAllowed = $legs1StopOverAllowed;
    }

    /**
     * 区間1税を取得する<br>
     * @return string 区間1税<br>
     */
    public function getLegs1TaxAmount()
    {
        return $this->legs1TaxAmount;
    }

    /**
     * 区間1税を設定する<br>
     * @param string $legs1TaxAmount 区間1税<br>
     */
    public function setLegs1TaxAmount($legs1TaxAmount)
    {
        $this->legs1TaxAmount = $legs1TaxAmount;
    }

    /**
     * 区間1チケット番号を取得する<br>
     * @return string 区間1チケット番号<br>
     */
    public function getLegs1TicketNumber()
    {
        return $this->legs1TicketNumber;
    }

    /**
     * 区間1チケット番号を設定する<br>
     * @param string $legs1TicketNumber 区間1チケット番号<br>
     */
    public function setLegs1TicketNumber($legs1TicketNumber)
    {
        $this->legs1TicketNumber = $legs1TicketNumber;
    }

    /**
     * 区間2航空会社名を取得する<br>
     * @return string 区間2航空会社名<br>
     */
    public function getLegs2AirlineName()
    {
        return $this->legs2AirlineName;
    }

    /**
     * 区間2航空会社名を設定する<br>
     * @param string $legs2AirlineName 区間2航空会社名<br>
     */
    public function setLegs2AirlineName($legs2AirlineName)
    {
        $this->legs2AirlineName = $legs2AirlineName;
    }

    /**
     * 区間2航空会社コードを取得する<br>
     * @return string 区間2航空会社コード<br>
     */
    public function getLegs2AirlineCode()
    {
        return $this->legs2AirlineCode;
    }

    /**
     * 区間2航空会社コードを設定する<br>
     * @param string $legs2AirlineCode 区間2航空会社コード<br>
     */
    public function setLegs2AirlineCode($legs2AirlineCode)
    {
        $this->legs2AirlineCode = $legs2AirlineCode;
    }

    /**
     * 区間2到着空港を取得する<br>
     * @return string 区間2到着空港<br>
     */
    public function getLegs2ArrivalAirport()
    {
        return $this->legs2ArrivalAirport;
    }

    /**
     * 区間2到着空港を設定する<br>
     * @param string $legs2ArrivalAirport 区間2到着空港<br>
     */
    public function setLegs2ArrivalAirport($legs2ArrivalAirport)
    {
        $this->legs2ArrivalAirport = $legs2ArrivalAirport;
    }

    /**
     * 区間2到着国を取得する<br>
     * @return string 区間2到着国<br>
     */
    public function getLegs2ArrivalCountry()
    {
        return $this->legs2ArrivalCountry;
    }

    /**
     * 区間2到着国を設定する<br>
     * @param string $legs2ArrivalCountry 区間2到着国<br>
     */
    public function setLegs2ArrivalCountry($legs2ArrivalCountry)
    {
        $this->legs2ArrivalCountry = $legs2ArrivalCountry;
    }

    /**
     * 区間2到着日を取得する<br>
     * @return string 区間2到着日<br>
     */
    public function getLegs2ArrivalDate()
    {
        return $this->legs2ArrivalDate;
    }

    /**
     * 区間2到着日を設定する<br>
     * @param string $legs2ArrivalDate 区間2到着日<br>
     */
    public function setLegs2ArrivalDate($legs2ArrivalDate)
    {
        $this->legs2ArrivalDate = $legs2ArrivalDate;
    }

    /**
     * 区間2到着時間を取得する<br>
     * @return string 区間2到着時間<br>
     */
    public function getLegs2ArrivalTime()
    {
        return $this->legs2ArrivalTime;
    }

    /**
     * 区間2到着時間を設定する<br>
     * @param string $legs2ArrivalTime 区間2到着時間<br>
     */
    public function setLegs2ArrivalTime($legs2ArrivalTime)
    {
        $this->legs2ArrivalTime = $legs2ArrivalTime;
    }

    /**
     * 区間2会社コードを取得する<br>
     * @return string 区間2会社コード<br>
     */
    public function getLegs2CarrierCode()
    {
        return $this->legs2CarrierCode;
    }

    /**
     * 区間2会社コードを設定する<br>
     * @param string $legs2CarrierCode 区間2会社コード<br>
     */
    public function setLegs2CarrierCode($legs2CarrierCode)
    {
        $this->legs2CarrierCode = $legs2CarrierCode;
    }

    /**
     * 区間2サービスクラスを取得する<br>
     * @return string 区間2サービスクラス<br>
     */
    public function getLegs2ClassOfService()
    {
        return $this->legs2ClassOfService;
    }

    /**
     * 区間2サービスクラスを設定する<br>
     * @param string $legs2ClassOfService 区間2サービスクラス<br>
     */
    public function setLegs2ClassOfService($legs2ClassOfService)
    {
        $this->legs2ClassOfService = $legs2ClassOfService;
    }

    /**
     * 区間2クーポン番号を取得する<br>
     * @return string 区間2クーポン番号<br>
     */
    public function getLegs2CouponNumber()
    {
        return $this->legs2CouponNumber;
    }

    /**
     * 区間2クーポン番号を設定する<br>
     * @param string $legs2CouponNumber 区間2クーポン番号<br>
     */
    public function setLegs2CouponNumber($legs2CouponNumber)
    {
        $this->legs2CouponNumber = $legs2CouponNumber;
    }

    /**
     * 区間2出発空港を取得する<br>
     * @return string 区間2出発空港<br>
     */
    public function getLegs2DepartureAirport()
    {
        return $this->legs2DepartureAirport;
    }

    /**
     * 区間2出発空港を設定する<br>
     * @param string $legs2DepartureAirport 区間2出発空港<br>
     */
    public function setLegs2DepartureAirport($legs2DepartureAirport)
    {
        $this->legs2DepartureAirport = $legs2DepartureAirport;
    }

    /**
     * 区間2出発国を取得する<br>
     * @return string 区間2出発国<br>
     */
    public function getLegs2DepartureCountry()
    {
        return $this->legs2DepartureCountry;
    }

    /**
     * 区間2出発国を設定する<br>
     * @param string $legs2DepartureCountry 区間2出発国<br>
     */
    public function setLegs2DepartureCountry($legs2DepartureCountry)
    {
        $this->legs2DepartureCountry = $legs2DepartureCountry;
    }

    /**
     * 区間2出発日を取得する<br>
     * @return string 区間2出発日<br>
     */
    public function getLegs2DepartureDate()
    {
        return $this->legs2DepartureDate;
    }

    /**
     * 区間2出発日を設定する<br>
     * @param string $legs2DepartureDate 区間2出発日<br>
     */
    public function setLegs2DepartureDate($legs2DepartureDate)
    {
        $this->legs2DepartureDate = $legs2DepartureDate;
    }

    /**
     * 区間2出発時間を取得する<br>
     * @return string 区間2出発時間<br>
     */
    public function getLegs2DepartureTime()
    {
        return $this->legs2DepartureTime;
    }

    /**
     * 区間2出発時間を設定する<br>
     * @param string $legs2DepartureTime 区間2出発時間<br>
     */
    public function setLegs2DepartureTime($legs2DepartureTime)
    {
        $this->legs2DepartureTime = $legs2DepartureTime;
    }

    /**
     * 区間2出国税を取得する<br>
     * @return string 区間2出国税<br>
     */
    public function getLegs2DepartureTaxAmount()
    {
        return $this->legs2DepartureTaxAmount;
    }

    /**
     * 区間2出国税を設定する<br>
     * @param string $legs2DepartureTaxAmount 区間2出国税<br>
     */
    public function setLegs2DepartureTaxAmount($legs2DepartureTaxAmount)
    {
        $this->legs2DepartureTaxAmount = $legs2DepartureTaxAmount;
    }

    /**
     * 区間2チケット枚数を取得する<br>
     * @return string 区間2チケット枚数<br>
     */
    public function getLegs2ExchangeTicketNum()
    {
        return $this->legs2ExchangeTicketNum;
    }

    /**
     * 区間2チケット枚数を設定する<br>
     * @param string $legs2ExchangeTicketNum 区間2チケット枚数<br>
     */
    public function setLegs2ExchangeTicketNum($legs2ExchangeTicketNum)
    {
        $this->legs2ExchangeTicketNum = $legs2ExchangeTicketNum;
    }

    /**
     * 区間2運賃を取得する<br>
     * @return string 区間2運賃<br>
     */
    public function getLegs2FareAmount()
    {
        return $this->legs2FareAmount;
    }

    /**
     * 区間2運賃を設定する<br>
     * @param string $legs2FareAmount 区間2運賃<br>
     */
    public function setLegs2FareAmount($legs2FareAmount)
    {
        $this->legs2FareAmount = $legs2FareAmount;
    }

    /**
     * 区間2基本運賃を取得する<br>
     * @return string 区間2基本運賃<br>
     */
    public function getLegs2FareBasis()
    {
        return $this->legs2FareBasis;
    }

    /**
     * 区間2基本運賃を設定する<br>
     * @param string $legs2FareBasis 区間2基本運賃<br>
     */
    public function setLegs2FareBasis($legs2FareBasis)
    {
        $this->legs2FareBasis = $legs2FareBasis;
    }

    /**
     * 区間2手数料を取得する<br>
     * @return string 区間2手数料<br>
     */
    public function getLegs2FeesAmount()
    {
        return $this->legs2FeesAmount;
    }

    /**
     * 区間2手数料を設定する<br>
     * @param string $legs2FeesAmount 区間2手数料<br>
     */
    public function setLegs2FeesAmount($legs2FeesAmount)
    {
        $this->legs2FeesAmount = $legs2FeesAmount;
    }

    /**
     * 区間2フライトナンバーを取得する<br>
     * @return string 区間2フライトナンバー<br>
     */
    public function getLegs2FlightNumber()
    {
        return $this->legs2FlightNumber;
    }

    /**
     * 区間2フライトナンバーを設定する<br>
     * @param string $legs2FlightNumber 区間2フライトナンバー<br>
     */
    public function setLegs2FlightNumber($legs2FlightNumber)
    {
        $this->legs2FlightNumber = $legs2FlightNumber;
    }

    /**
     * 区間2制限を取得する<br>
     * @return string 区間2制限<br>
     */
    public function getLegs2Restrictions()
    {
        return $this->legs2Restrictions;
    }

    /**
     * 区間2制限を設定する<br>
     * @param string $legs2Restrictions 区間2制限<br>
     */
    public function setLegs2Restrictions($legs2Restrictions)
    {
        $this->legs2Restrictions = $legs2Restrictions;
    }

    /**
     * 区間2途中下車許可を取得する<br>
     * @return string 区間2途中下車許可<br>
     */
    public function getLegs2StopOverAllowed()
    {
        return $this->legs2StopOverAllowed;
    }

    /**
     * 区間2途中下車許可を設定する<br>
     * @param string $legs2StopOverAllowed 区間2途中下車許可<br>
     */
    public function setLegs2StopOverAllowed($legs2StopOverAllowed)
    {
        $this->legs2StopOverAllowed = $legs2StopOverAllowed;
    }

    /**
     * 区間2税を取得する<br>
     * @return string 区間2税<br>
     */
    public function getLegs2TaxAmount()
    {
        return $this->legs2TaxAmount;
    }

    /**
     * 区間2税を設定する<br>
     * @param string $legs2TaxAmount 区間2税<br>
     */
    public function setLegs2TaxAmount($legs2TaxAmount)
    {
        $this->legs2TaxAmount = $legs2TaxAmount;
    }

    /**
     * 区間2チケット番号を取得する<br>
     * @return string 区間2チケット番号<br>
     */
    public function getLegs2TicketNumber()
    {
        return $this->legs2TicketNumber;
    }

    /**
     * 区間2チケット番号を設定する<br>
     * @param string $legs2TicketNumber 区間2チケット番号<br>
     */
    public function setLegs2TicketNumber($legs2TicketNumber)
    {
        $this->legs2TicketNumber = $legs2TicketNumber;
    }

    /**
     * 区間3航空会社名を取得する<br>
     * @return string 区間3航空会社名<br>
     */
    public function getLegs3AirlineName()
    {
        return $this->legs3AirlineName;
    }

    /**
     * 区間3航空会社名を設定する<br>
     * @param string $legs3AirlineName 区間3航空会社名<br>
     */
    public function setLegs3AirlineName($legs3AirlineName)
    {
        $this->legs3AirlineName = $legs3AirlineName;
    }

    /**
     * 区間3航空会社コードを取得する<br>
     * @return string 区間3航空会社コード<br>
     */
    public function getLegs3AirlineCode()
    {
        return $this->legs3AirlineCode;
    }

    /**
     * 区間3航空会社コードを設定する<br>
     * @param string $legs3AirlineCode 区間3航空会社コード<br>
     */
    public function setLegs3AirlineCode($legs3AirlineCode)
    {
        $this->legs3AirlineCode = $legs3AirlineCode;
    }

    /**
     * 区間3到着空港を取得する<br>
     * @return string 区間3到着空港<br>
     */
    public function getLegs3ArrivalAirport()
    {
        return $this->legs3ArrivalAirport;
    }

    /**
     * 区間3到着空港を設定する<br>
     * @param string $legs3ArrivalAirport 区間3到着空港<br>
     */
    public function setLegs3ArrivalAirport($legs3ArrivalAirport)
    {
        $this->legs3ArrivalAirport = $legs3ArrivalAirport;
    }

    /**
     * 区間3到着国を取得する<br>
     * @return string 区間3到着国<br>
     */
    public function getLegs3ArrivalCountry()
    {
        return $this->legs3ArrivalCountry;
    }

    /**
     * 区間3到着国を設定する<br>
     * @param string $legs3ArrivalCountry 区間3到着国<br>
     */
    public function setLegs3ArrivalCountry($legs3ArrivalCountry)
    {
        $this->legs3ArrivalCountry = $legs3ArrivalCountry;
    }

    /**
     * 区間3到着日を取得する<br>
     * @return string 区間3到着日<br>
     */
    public function getLegs3ArrivalDate()
    {
        return $this->legs3ArrivalDate;
    }

    /**
     * 区間3到着日を設定する<br>
     * @param string $legs3ArrivalDate 区間3到着日<br>
     */
    public function setLegs3ArrivalDate($legs3ArrivalDate)
    {
        $this->legs3ArrivalDate = $legs3ArrivalDate;
    }

    /**
     * 区間3到着時間を取得する<br>
     * @return string 区間3到着時間<br>
     */
    public function getLegs3ArrivalTime()
    {
        return $this->legs3ArrivalTime;
    }

    /**
     * 区間3到着時間を設定する<br>
     * @param string $legs3ArrivalTime 区間3到着時間<br>
     */
    public function setLegs3ArrivalTime($legs3ArrivalTime)
    {
        $this->legs3ArrivalTime = $legs3ArrivalTime;
    }

    /**
     * 区間3会社コードを取得する<br>
     * @return string 区間3会社コード<br>
     */
    public function getLegs3CarrierCode()
    {
        return $this->legs3CarrierCode;
    }

    /**
     * 区間3会社コードを設定する<br>
     * @param string $legs3CarrierCode 区間3会社コード<br>
     */
    public function setLegs3CarrierCode($legs3CarrierCode)
    {
        $this->legs3CarrierCode = $legs3CarrierCode;
    }

    /**
     * 区間3サービスクラスを取得する<br>
     * @return string 区間3サービスクラス<br>
     */
    public function getLegs3ClassOfService()
    {
        return $this->legs3ClassOfService;
    }

    /**
     * 区間3サービスクラスを設定する<br>
     * @param string $legs3ClassOfService 区間3サービスクラス<br>
     */
    public function setLegs3ClassOfService($legs3ClassOfService)
    {
        $this->legs3ClassOfService = $legs3ClassOfService;
    }

    /**
     * 区間3クーポン番号を取得する<br>
     * @return string 区間3クーポン番号<br>
     */
    public function getLegs3CouponNumber()
    {
        return $this->legs3CouponNumber;
    }

    /**
     * 区間3クーポン番号を設定する<br>
     * @param string $legs3CouponNumber 区間3クーポン番号<br>
     */
    public function setLegs3CouponNumber($legs3CouponNumber)
    {
        $this->legs3CouponNumber = $legs3CouponNumber;
    }

    /**
     * 区間3出発空港を取得する<br>
     * @return string 区間3出発空港<br>
     */
    public function getLegs3DepartureAirport()
    {
        return $this->legs3DepartureAirport;
    }

    /**
     * 区間3出発空港を設定する<br>
     * @param string $legs3DepartureAirport 区間3出発空港<br>
     */
    public function setLegs3DepartureAirport($legs3DepartureAirport)
    {
        $this->legs3DepartureAirport = $legs3DepartureAirport;
    }

    /**
     * 区間3出発国を取得する<br>
     * @return string 区間3出発国<br>
     */
    public function getLegs3DepartureCountry()
    {
        return $this->legs3DepartureCountry;
    }

    /**
     * 区間3出発国を設定する<br>
     * @param string $legs3DepartureCountry 区間3出発国<br>
     */
    public function setLegs3DepartureCountry($legs3DepartureCountry)
    {
        $this->legs3DepartureCountry = $legs3DepartureCountry;
    }

    /**
     * 区間3出発日を取得する<br>
     * @return string 区間3出発日<br>
     */
    public function getLegs3DepartureDate()
    {
        return $this->legs3DepartureDate;
    }

    /**
     * 区間3出発日を設定する<br>
     * @param string $legs3DepartureDate 区間3出発日<br>
     */
    public function setLegs3DepartureDate($legs3DepartureDate)
    {
        $this->legs3DepartureDate = $legs3DepartureDate;
    }

    /**
     * 区間3出発時間を取得する<br>
     * @return string 区間3出発時間<br>
     */
    public function getLegs3DepartureTime()
    {
        return $this->legs3DepartureTime;
    }

    /**
     * 区間3出発時間を設定する<br>
     * @param string $legs3DepartureTime 区間3出発時間<br>
     */
    public function setLegs3DepartureTime($legs3DepartureTime)
    {
        $this->legs3DepartureTime = $legs3DepartureTime;
    }

    /**
     * 区間3出国税を取得する<br>
     * @return string 区間3出国税<br>
     */
    public function getLegs3DepartureTaxAmount()
    {
        return $this->legs3DepartureTaxAmount;
    }

    /**
     * 区間3出国税を設定する<br>
     * @param string $legs3DepartureTaxAmount 区間3出国税<br>
     */
    public function setLegs3DepartureTaxAmount($legs3DepartureTaxAmount)
    {
        $this->legs3DepartureTaxAmount = $legs3DepartureTaxAmount;
    }

    /**
     * 区間3チケット枚数を取得する<br>
     * @return string 区間3チケット枚数<br>
     */
    public function getLegs3ExchangeTicketNum()
    {
        return $this->legs3ExchangeTicketNum;
    }

    /**
     * 区間3チケット枚数を設定する<br>
     * @param string $legs3ExchangeTicketNum 区間3チケット枚数<br>
     */
    public function setLegs3ExchangeTicketNum($legs3ExchangeTicketNum)
    {
        $this->legs3ExchangeTicketNum = $legs3ExchangeTicketNum;
    }

    /**
     * 区間3運賃を取得する<br>
     * @return string 区間3運賃<br>
     */
    public function getLegs3FareAmount()
    {
        return $this->legs3FareAmount;
    }

    /**
     * 区間3運賃を設定する<br>
     * @param string $legs3FareAmount 区間3運賃<br>
     */
    public function setLegs3FareAmount($legs3FareAmount)
    {
        $this->legs3FareAmount = $legs3FareAmount;
    }

    /**
     * 区間3基本運賃を取得する<br>
     * @return string 区間3基本運賃<br>
     */
    public function getLegs3FareBasis()
    {
        return $this->legs3FareBasis;
    }

    /**
     * 区間3基本運賃を設定する<br>
     * @param string $legs3FareBasis 区間3基本運賃<br>
     */
    public function setLegs3FareBasis($legs3FareBasis)
    {
        $this->legs3FareBasis = $legs3FareBasis;
    }

    /**
     * 区間3手数料を取得する<br>
     * @return string 区間3手数料<br>
     */
    public function getLegs3FeesAmount()
    {
        return $this->legs3FeesAmount;
    }

    /**
     * 区間3手数料を設定する<br>
     * @param string $legs3FeesAmount 区間3手数料<br>
     */
    public function setLegs3FeesAmount($legs3FeesAmount)
    {
        $this->legs3FeesAmount = $legs3FeesAmount;
    }

    /**
     * 区間3フライトナンバーを取得する<br>
     * @return string 区間3フライトナンバー<br>
     */
    public function getLegs3FlightNumber()
    {
        return $this->legs3FlightNumber;
    }

    /**
     * 区間3フライトナンバーを設定する<br>
     * @param string $legs3FlightNumber 区間3フライトナンバー<br>
     */
    public function setLegs3FlightNumber($legs3FlightNumber)
    {
        $this->legs3FlightNumber = $legs3FlightNumber;
    }

    /**
     * 区間3制限を取得する<br>
     * @return string 区間3制限<br>
     */
    public function getLegs3Restrictions()
    {
        return $this->legs3Restrictions;
    }

    /**
     * 区間3制限を設定する<br>
     * @param string $legs3Restrictions 区間3制限<br>
     */
    public function setLegs3Restrictions($legs3Restrictions)
    {
        $this->legs3Restrictions = $legs3Restrictions;
    }

    /**
     * 区間3途中下車許可を取得する<br>
     * @return string 区間3途中下車許可<br>
     */
    public function getLegs3StopOverAllowed()
    {
        return $this->legs3StopOverAllowed;
    }

    /**
     * 区間3途中下車許可を設定する<br>
     * @param string $legs3StopOverAllowed 区間3途中下車許可<br>
     */
    public function setLegs3StopOverAllowed($legs3StopOverAllowed)
    {
        $this->legs3StopOverAllowed = $legs3StopOverAllowed;
    }

    /**
     * 区間3税を取得する<br>
     * @return string 区間3税<br>
     */
    public function getLegs3TaxAmount()
    {
        return $this->legs3TaxAmount;
    }

    /**
     * 区間3税を設定する<br>
     * @param string $legs3TaxAmount 区間3税<br>
     */
    public function setLegs3TaxAmount($legs3TaxAmount)
    {
        $this->legs3TaxAmount = $legs3TaxAmount;
    }

    /**
     * 区間3チケット番号を取得する<br>
     * @return string 区間3チケット番号<br>
     */
    public function getLegs3TicketNumber()
    {
        return $this->legs3TicketNumber;
    }

    /**
     * 区間3チケット番号を設定する<br>
     * @param string $legs3TicketNumber 区間3チケット番号<br>
     */
    public function setLegs3TicketNumber($legs3TicketNumber)
    {
        $this->legs3TicketNumber = $legs3TicketNumber;
    }

    /**
     * 区間4航空会社名を取得する<br>
     * @return string 区間4航空会社名<br>
     */
    public function getLegs4AirlineName()
    {
        return $this->legs4AirlineName;
    }

    /**
     * 区間4航空会社名を設定する<br>
     * @param string $legs4AirlineName 区間4航空会社名<br>
     */
    public function setLegs4AirlineName($legs4AirlineName)
    {
        $this->legs4AirlineName = $legs4AirlineName;
    }

    /**
     * 区間4航空会社コードを取得する<br>
     * @return string 区間4航空会社コード<br>
     */
    public function getLegs4AirlineCode()
    {
        return $this->legs4AirlineCode;
    }

    /**
     * 区間4航空会社コードを設定する<br>
     * @param string $legs4AirlineCode 区間4航空会社コード<br>
     */
    public function setLegs4AirlineCode($legs4AirlineCode)
    {
        $this->legs4AirlineCode = $legs4AirlineCode;
    }

    /**
     * 区間4到着空港を取得する<br>
     * @return string 区間4到着空港<br>
     */
    public function getLegs4ArrivalAirport()
    {
        return $this->legs4ArrivalAirport;
    }

    /**
     * 区間4到着空港を設定する<br>
     * @param string $legs4ArrivalAirport 区間4到着空港<br>
     */
    public function setLegs4ArrivalAirport($legs4ArrivalAirport)
    {
        $this->legs4ArrivalAirport = $legs4ArrivalAirport;
    }

    /**
     * 区間4到着国を取得する<br>
     * @return string 区間4到着国<br>
     */
    public function getLegs4ArrivalCountry()
    {
        return $this->legs4ArrivalCountry;
    }

    /**
     * 区間4到着国を設定する<br>
     * @param string $legs4ArrivalCountry 区間4到着国<br>
     */
    public function setLegs4ArrivalCountry($legs4ArrivalCountry)
    {
        $this->legs4ArrivalCountry = $legs4ArrivalCountry;
    }

    /**
     * 区間4到着日を取得する<br>
     * @return string 区間4到着日<br>
     */
    public function getLegs4ArrivalDate()
    {
        return $this->legs4ArrivalDate;
    }

    /**
     * 区間4到着日を設定する<br>
     * @param string $legs4ArrivalDate 区間4到着日<br>
     */
    public function setLegs4ArrivalDate($legs4ArrivalDate)
    {
        $this->legs4ArrivalDate = $legs4ArrivalDate;
    }

    /**
     * 区間4到着時間を取得する<br>
     * @return string 区間4到着時間<br>
     */
    public function getLegs4ArrivalTime()
    {
        return $this->legs4ArrivalTime;
    }

    /**
     * 区間4到着時間を設定する<br>
     * @param string $legs4ArrivalTime 区間4到着時間<br>
     */
    public function setLegs4ArrivalTime($legs4ArrivalTime)
    {
        $this->legs4ArrivalTime = $legs4ArrivalTime;
    }

    /**
     * 区間4会社コードを取得する<br>
     * @return string 区間4会社コード<br>
     */
    public function getLegs4CarrierCode()
    {
        return $this->legs4CarrierCode;
    }

    /**
     * 区間4会社コードを設定する<br>
     * @param string $legs4CarrierCode 区間4会社コード<br>
     */
    public function setLegs4CarrierCode($legs4CarrierCode)
    {
        $this->legs4CarrierCode = $legs4CarrierCode;
    }

    /**
     * 区間4サービスクラスを取得する<br>
     * @return string 区間4サービスクラス<br>
     */
    public function getLegs4ClassOfService()
    {
        return $this->legs4ClassOfService;
    }

    /**
     * 区間4サービスクラスを設定する<br>
     * @param string $legs4ClassOfService 区間4サービスクラス<br>
     */
    public function setLegs4ClassOfService($legs4ClassOfService)
    {
        $this->legs4ClassOfService = $legs4ClassOfService;
    }

    /**
     * 区間4クーポン番号を取得する<br>
     * @return string 区間4クーポン番号<br>
     */
    public function getLegs4CouponNumber()
    {
        return $this->legs4CouponNumber;
    }

    /**
     * 区間4クーポン番号を設定する<br>
     * @param string $legs4CouponNumber 区間4クーポン番号<br>
     */
    public function setLegs4CouponNumber($legs4CouponNumber)
    {
        $this->legs4CouponNumber = $legs4CouponNumber;
    }

    /**
     * 区間4出発空港を取得する<br>
     * @return string 区間4出発空港<br>
     */
    public function getLegs4DepartureAirport()
    {
        return $this->legs4DepartureAirport;
    }

    /**
     * 区間4出発空港を設定する<br>
     * @param string $legs4DepartureAirport 区間4出発空港<br>
     */
    public function setLegs4DepartureAirport($legs4DepartureAirport)
    {
        $this->legs4DepartureAirport = $legs4DepartureAirport;
    }

    /**
     * 区間4出発国を取得する<br>
     * @return string 区間4出発国<br>
     */
    public function getLegs4DepartureCountry()
    {
        return $this->legs4DepartureCountry;
    }

    /**
     * 区間4出発国を設定する<br>
     * @param string $legs4DepartureCountry 区間4出発国<br>
     */
    public function setLegs4DepartureCountry($legs4DepartureCountry)
    {
        $this->legs4DepartureCountry = $legs4DepartureCountry;
    }

    /**
     * 区間4出発日を取得する<br>
     * @return string 区間4出発日<br>
     */
    public function getLegs4DepartureDate()
    {
        return $this->legs4DepartureDate;
    }

    /**
     * 区間4出発日を設定する<br>
     * @param string $legs4DepartureDate 区間4出発日<br>
     */
    public function setLegs4DepartureDate($legs4DepartureDate)
    {
        $this->legs4DepartureDate = $legs4DepartureDate;
    }

    /**
     * 区間4出発時間を取得する<br>
     * @return string 区間4出発時間<br>
     */
    public function getLegs4DepartureTime()
    {
        return $this->legs4DepartureTime;
    }

    /**
     * 区間4出発時間を設定する<br>
     * @param string $legs4DepartureTime 区間4出発時間<br>
     */
    public function setLegs4DepartureTime($legs4DepartureTime)
    {
        $this->legs4DepartureTime = $legs4DepartureTime;
    }

    /**
     * 区間4出国税を取得する<br>
     * @return string 区間4出国税<br>
     */
    public function getLegs4DepartureTaxAmount()
    {
        return $this->legs4DepartureTaxAmount;
    }

    /**
     * 区間4出国税を設定する<br>
     * @param string $legs4DepartureTaxAmount 区間4出国税<br>
     */
    public function setLegs4DepartureTaxAmount($legs4DepartureTaxAmount)
    {
        $this->legs4DepartureTaxAmount = $legs4DepartureTaxAmount;
    }

    /**
     * 区間4チケット枚数を取得する<br>
     * @return string 区間4チケット枚数<br>
     */
    public function getLegs4ExchangeTicketNum()
    {
        return $this->legs4ExchangeTicketNum;
    }

    /**
     * 区間4チケット枚数を設定する<br>
     * @param string $legs4ExchangeTicketNum 区間4チケット枚数<br>
     */
    public function setLegs4ExchangeTicketNum($legs4ExchangeTicketNum)
    {
        $this->legs4ExchangeTicketNum = $legs4ExchangeTicketNum;
    }

    /**
     * 区間4運賃を取得する<br>
     * @return string 区間4運賃<br>
     */
    public function getLegs4FareAmount()
    {
        return $this->legs4FareAmount;
    }

    /**
     * 区間4運賃を設定する<br>
     * @param string $legs4FareAmount 区間4運賃<br>
     */
    public function setLegs4FareAmount($legs4FareAmount)
    {
        $this->legs4FareAmount = $legs4FareAmount;
    }

    /**
     * 区間4基本運賃を取得する<br>
     * @return string 区間4基本運賃<br>
     */
    public function getLegs4FareBasis()
    {
        return $this->legs4FareBasis;
    }

    /**
     * 区間4基本運賃を設定する<br>
     * @param string $legs4FareBasis 区間4基本運賃<br>
     */
    public function setLegs4FareBasis($legs4FareBasis)
    {
        $this->legs4FareBasis = $legs4FareBasis;
    }

    /**
     * 区間4手数料を取得する<br>
     * @return string 区間4手数料<br>
     */
    public function getLegs4FeesAmount()
    {
        return $this->legs4FeesAmount;
    }

    /**
     * 区間4手数料を設定する<br>
     * @param string $legs4FeesAmount 区間4手数料<br>
     */
    public function setLegs4FeesAmount($legs4FeesAmount)
    {
        $this->legs4FeesAmount = $legs4FeesAmount;
    }

    /**
     * 区間4フライトナンバーを取得する<br>
     * @return string 区間4フライトナンバー<br>
     */
    public function getLegs4FlightNumber()
    {
        return $this->legs4FlightNumber;
    }

    /**
     * 区間4フライトナンバーを設定する<br>
     * @param string $legs4FlightNumber 区間4フライトナンバー<br>
     */
    public function setLegs4FlightNumber($legs4FlightNumber)
    {
        $this->legs4FlightNumber = $legs4FlightNumber;
    }

    /**
     * 区間4制限を取得する<br>
     * @return string 区間4制限<br>
     */
    public function getLegs4Restrictions()
    {
        return $this->legs4Restrictions;
    }

    /**
     * 区間4制限を設定する<br>
     * @param string $legs4Restrictions 区間4制限<br>
     */
    public function setLegs4Restrictions($legs4Restrictions)
    {
        $this->legs4Restrictions = $legs4Restrictions;
    }

    /**
     * 区間4途中下車許可を取得する<br>
     * @return string 区間4途中下車許可<br>
     */
    public function getLegs4StopOverAllowed()
    {
        return $this->legs4StopOverAllowed;
    }

    /**
     * 区間4途中下車許可を設定する<br>
     * @param string $legs4StopOverAllowed 区間4途中下車許可<br>
     */
    public function setLegs4StopOverAllowed($legs4StopOverAllowed)
    {
        $this->legs4StopOverAllowed = $legs4StopOverAllowed;
    }

    /**
     * 区間4税を取得する<br>
     * @return string 区間4税<br>
     */
    public function getLegs4TaxAmount()
    {
        return $this->legs4TaxAmount;
    }

    /**
     * 区間4税を設定する<br>
     * @param string $legs4TaxAmount 区間4税<br>
     */
    public function setLegs4TaxAmount($legs4TaxAmount)
    {
        $this->legs4TaxAmount = $legs4TaxAmount;
    }

    /**
     * 区間4チケット番号を取得する<br>
     * @return string 区間4チケット番号<br>
     */
    public function getLegs4TicketNumber()
    {
        return $this->legs4TicketNumber;
    }

    /**
     * 区間4チケット番号を設定する<br>
     * @param string $legs4TicketNumber 区間4チケット番号<br>
     */
    public function setLegs4TicketNumber($legs4TicketNumber)
    {
        $this->legs4TicketNumber = $legs4TicketNumber;
    }

    /**
     * 区間5航空会社名を取得する<br>
     * @return string 区間5航空会社名<br>
     */
    public function getLegs5AirlineName()
    {
        return $this->legs5AirlineName;
    }

    /**
     * 区間5航空会社名を設定する<br>
     * @param string $legs5AirlineName 区間5航空会社名<br>
     */
    public function setLegs5AirlineName($legs5AirlineName)
    {
        $this->legs5AirlineName = $legs5AirlineName;
    }

    /**
     * 区間5航空会社コードを取得する<br>
     * @return string 区間5航空会社コード<br>
     */
    public function getLegs5AirlineCode()
    {
        return $this->legs5AirlineCode;
    }

    /**
     * 区間5航空会社コードを設定する<br>
     * @param string $legs5AirlineCode 区間5航空会社コード<br>
     */
    public function setLegs5AirlineCode($legs5AirlineCode)
    {
        $this->legs5AirlineCode = $legs5AirlineCode;
    }

    /**
     * 区間5到着空港を取得する<br>
     * @return string 区間5到着空港<br>
     */
    public function getLegs5ArrivalAirport()
    {
        return $this->legs5ArrivalAirport;
    }

    /**
     * 区間5到着空港を設定する<br>
     * @param string $legs5ArrivalAirport 区間5到着空港<br>
     */
    public function setLegs5ArrivalAirport($legs5ArrivalAirport)
    {
        $this->legs5ArrivalAirport = $legs5ArrivalAirport;
    }

    /**
     * 区間5到着国を取得する<br>
     * @return string 区間5到着国<br>
     */
    public function getLegs5ArrivalCountry()
    {
        return $this->legs5ArrivalCountry;
    }

    /**
     * 区間5到着国を設定する<br>
     * @param string $legs5ArrivalCountry 区間5到着国<br>
     */
    public function setLegs5ArrivalCountry($legs5ArrivalCountry)
    {
        $this->legs5ArrivalCountry = $legs5ArrivalCountry;
    }

    /**
     * 区間5到着日を取得する<br>
     * @return string 区間5到着日<br>
     */
    public function getLegs5ArrivalDate()
    {
        return $this->legs5ArrivalDate;
    }

    /**
     * 区間5到着日を設定する<br>
     * @param string $legs5ArrivalDate 区間5到着日<br>
     */
    public function setLegs5ArrivalDate($legs5ArrivalDate)
    {
        $this->legs5ArrivalDate = $legs5ArrivalDate;
    }

    /**
     * 区間5到着時間を取得する<br>
     * @return string 区間5到着時間<br>
     */
    public function getLegs5ArrivalTime()
    {
        return $this->legs5ArrivalTime;
    }

    /**
     * 区間5到着時間を設定する<br>
     * @param string $legs5ArrivalTime 区間5到着時間<br>
     */
    public function setLegs5ArrivalTime($legs5ArrivalTime)
    {
        $this->legs5ArrivalTime = $legs5ArrivalTime;
    }

    /**
     * 区間5会社コードを取得する<br>
     * @return string 区間5会社コード<br>
     */
    public function getLegs5CarrierCode()
    {
        return $this->legs5CarrierCode;
    }

    /**
     * 区間5会社コードを設定する<br>
     * @param string $legs5CarrierCode 区間5会社コード<br>
     */
    public function setLegs5CarrierCode($legs5CarrierCode)
    {
        $this->legs5CarrierCode = $legs5CarrierCode;
    }

    /**
     * 区間5サービスクラスを取得する<br>
     * @return string 区間5サービスクラス<br>
     */
    public function getLegs5ClassOfService()
    {
        return $this->legs5ClassOfService;
    }

    /**
     * 区間5サービスクラスを設定する<br>
     * @param string $legs5ClassOfService 区間5サービスクラス<br>
     */
    public function setLegs5ClassOfService($legs5ClassOfService)
    {
        $this->legs5ClassOfService = $legs5ClassOfService;
    }

    /**
     * 区間5クーポン番号を取得する<br>
     * @return string 区間5クーポン番号<br>
     */
    public function getLegs5CouponNumber()
    {
        return $this->legs5CouponNumber;
    }

    /**
     * 区間5クーポン番号を設定する<br>
     * @param string $legs5CouponNumber 区間5クーポン番号<br>
     */
    public function setLegs5CouponNumber($legs5CouponNumber)
    {
        $this->legs5CouponNumber = $legs5CouponNumber;
    }

    /**
     * 区間5出発空港を取得する<br>
     * @return string 区間5出発空港<br>
     */
    public function getLegs5DepartureAirport()
    {
        return $this->legs5DepartureAirport;
    }

    /**
     * 区間5出発空港を設定する<br>
     * @param string $legs5DepartureAirport 区間5出発空港<br>
     */
    public function setLegs5DepartureAirport($legs5DepartureAirport)
    {
        $this->legs5DepartureAirport = $legs5DepartureAirport;
    }

    /**
     * 区間5出発国を取得する<br>
     * @return string 区間5出発国<br>
     */
    public function getLegs5DepartureCountry()
    {
        return $this->legs5DepartureCountry;
    }

    /**
     * 区間5出発国を設定する<br>
     * @param string $legs5DepartureCountry 区間5出発国<br>
     */
    public function setLegs5DepartureCountry($legs5DepartureCountry)
    {
        $this->legs5DepartureCountry = $legs5DepartureCountry;
    }

    /**
     * 区間5出発日を取得する<br>
     * @return string 区間5出発日<br>
     */
    public function getLegs5DepartureDate()
    {
        return $this->legs5DepartureDate;
    }

    /**
     * 区間5出発日を設定する<br>
     * @param string $legs5DepartureDate 区間5出発日<br>
     */
    public function setLegs5DepartureDate($legs5DepartureDate)
    {
        $this->legs5DepartureDate = $legs5DepartureDate;
    }

    /**
     * 区間5出発時間を取得する<br>
     * @return string 区間5出発時間<br>
     */
    public function getLegs5DepartureTime()
    {
        return $this->legs5DepartureTime;
    }

    /**
     * 区間5出発時間を設定する<br>
     * @param string $legs5DepartureTime 区間5出発時間<br>
     */
    public function setLegs5DepartureTime($legs5DepartureTime)
    {
        $this->legs5DepartureTime = $legs5DepartureTime;
    }

    /**
     * 区間5出国税を取得する<br>
     * @return string 区間5出国税<br>
     */
    public function getLegs5DepartureTaxAmount()
    {
        return $this->legs5DepartureTaxAmount;
    }

    /**
     * 区間5出国税を設定する<br>
     * @param string $legs5DepartureTaxAmount 区間5出国税<br>
     */
    public function setLegs5DepartureTaxAmount($legs5DepartureTaxAmount)
    {
        $this->legs5DepartureTaxAmount = $legs5DepartureTaxAmount;
    }

    /**
     * 区間5チケット枚数を取得する<br>
     * @return string 区間5チケット枚数<br>
     */
    public function getLegs5ExchangeTicketNum()
    {
        return $this->legs5ExchangeTicketNum;
    }

    /**
     * 区間5チケット枚数を設定する<br>
     * @param string $legs5ExchangeTicketNum 区間5チケット枚数<br>
     */
    public function setLegs5ExchangeTicketNum($legs5ExchangeTicketNum)
    {
        $this->legs5ExchangeTicketNum = $legs5ExchangeTicketNum;
    }

    /**
     * 区間5運賃を取得する<br>
     * @return string 区間5運賃<br>
     */
    public function getLegs5FareAmount()
    {
        return $this->legs5FareAmount;
    }

    /**
     * 区間5運賃を設定する<br>
     * @param string $legs5FareAmount 区間5運賃<br>
     */
    public function setLegs5FareAmount($legs5FareAmount)
    {
        $this->legs5FareAmount = $legs5FareAmount;
    }

    /**
     * 区間5基本運賃を取得する<br>
     * @return string 区間5基本運賃<br>
     */
    public function getLegs5FareBasis()
    {
        return $this->legs5FareBasis;
    }

    /**
     * 区間5基本運賃を設定する<br>
     * @param string $legs5FareBasis 区間5基本運賃<br>
     */
    public function setLegs5FareBasis($legs5FareBasis)
    {
        $this->legs5FareBasis = $legs5FareBasis;
    }

    /**
     * 区間5手数料を取得する<br>
     * @return string 区間5手数料<br>
     */
    public function getLegs5FeesAmount()
    {
        return $this->legs5FeesAmount;
    }

    /**
     * 区間5手数料を設定する<br>
     * @param string $legs5FeesAmount 区間5手数料<br>
     */
    public function setLegs5FeesAmount($legs5FeesAmount)
    {
        $this->legs5FeesAmount = $legs5FeesAmount;
    }

    /**
     * 区間5フライトナンバーを取得する<br>
     * @return string 区間5フライトナンバー<br>
     */
    public function getLegs5FlightNumber()
    {
        return $this->legs5FlightNumber;
    }

    /**
     * 区間5フライトナンバーを設定する<br>
     * @param string $legs5FlightNumber 区間5フライトナンバー<br>
     */
    public function setLegs5FlightNumber($legs5FlightNumber)
    {
        $this->legs5FlightNumber = $legs5FlightNumber;
    }

    /**
     * 区間5制限を取得する<br>
     * @return string 区間5制限<br>
     */
    public function getLegs5Restrictions()
    {
        return $this->legs5Restrictions;
    }

    /**
     * 区間5制限を設定する<br>
     * @param string $legs5Restrictions 区間5制限<br>
     */
    public function setLegs5Restrictions($legs5Restrictions)
    {
        $this->legs5Restrictions = $legs5Restrictions;
    }

    /**
     * 区間5途中下車許可を取得する<br>
     * @return string 区間5途中下車許可<br>
     */
    public function getLegs5StopOverAllowed()
    {
        return $this->legs5StopOverAllowed;
    }

    /**
     * 区間5途中下車許可を設定する<br>
     * @param string $legs5StopOverAllowed 区間5途中下車許可<br>
     */
    public function setLegs5StopOverAllowed($legs5StopOverAllowed)
    {
        $this->legs5StopOverAllowed = $legs5StopOverAllowed;
    }

    /**
     * 区間5税を取得する<br>
     * @return string 区間5税<br>
     */
    public function getLegs5TaxAmount()
    {
        return $this->legs5TaxAmount;
    }

    /**
     * 区間5税を設定する<br>
     * @param string $legs5TaxAmount 区間5税<br>
     */
    public function setLegs5TaxAmount($legs5TaxAmount)
    {
        $this->legs5TaxAmount = $legs5TaxAmount;
    }

    /**
     * 区間5チケット番号を取得する<br>
     * @return string 区間5チケット番号<br>
     */
    public function getLegs5TicketNumber()
    {
        return $this->legs5TicketNumber;
    }

    /**
     * 区間5チケット番号を設定する<br>
     * @param string $legs5TicketNumber 区間5チケット番号<br>
     */
    public function setLegs5TicketNumber($legs5TicketNumber)
    {
        $this->legs5TicketNumber = $legs5TicketNumber;
    }

    /**
     * 区間6航空会社名を取得する<br>
     * @return string 区間6航空会社名<br>
     */
    public function getLegs6AirlineName()
    {
        return $this->legs6AirlineName;
    }

    /**
     * 区間6航空会社名を設定する<br>
     * @param string $legs6AirlineName 区間6航空会社名<br>
     */
    public function setLegs6AirlineName($legs6AirlineName)
    {
        $this->legs6AirlineName = $legs6AirlineName;
    }

    /**
     * 区間6航空会社コードを取得する<br>
     * @return string 区間6航空会社コード<br>
     */
    public function getLegs6AirlineCode()
    {
        return $this->legs6AirlineCode;
    }

    /**
     * 区間6航空会社コードを設定する<br>
     * @param string $legs6AirlineCode 区間6航空会社コード<br>
     */
    public function setLegs6AirlineCode($legs6AirlineCode)
    {
        $this->legs6AirlineCode = $legs6AirlineCode;
    }

    /**
     * 区間6到着空港を取得する<br>
     * @return string 区間6到着空港<br>
     */
    public function getLegs6ArrivalAirport()
    {
        return $this->legs6ArrivalAirport;
    }

    /**
     * 区間6到着空港を設定する<br>
     * @param string $legs6ArrivalAirport 区間6到着空港<br>
     */
    public function setLegs6ArrivalAirport($legs6ArrivalAirport)
    {
        $this->legs6ArrivalAirport = $legs6ArrivalAirport;
    }

    /**
     * 区間6到着国を取得する<br>
     * @return string 区間6到着国<br>
     */
    public function getLegs6ArrivalCountry()
    {
        return $this->legs6ArrivalCountry;
    }

    /**
     * 区間6到着国を設定する<br>
     * @param string $legs6ArrivalCountry 区間6到着国<br>
     */
    public function setLegs6ArrivalCountry($legs6ArrivalCountry)
    {
        $this->legs6ArrivalCountry = $legs6ArrivalCountry;
    }

    /**
     * 区間6到着日を取得する<br>
     * @return string 区間6到着日<br>
     */
    public function getLegs6ArrivalDate()
    {
        return $this->legs6ArrivalDate;
    }

    /**
     * 区間6到着日を設定する<br>
     * @param string $legs6ArrivalDate 区間6到着日<br>
     */
    public function setLegs6ArrivalDate($legs6ArrivalDate)
    {
        $this->legs6ArrivalDate = $legs6ArrivalDate;
    }

    /**
     * 区間6到着時間を取得する<br>
     * @return string 区間6到着時間<br>
     */
    public function getLegs6ArrivalTime()
    {
        return $this->legs6ArrivalTime;
    }

    /**
     * 区間6到着時間を設定する<br>
     * @param string $legs6ArrivalTime 区間6到着時間<br>
     */
    public function setLegs6ArrivalTime($legs6ArrivalTime)
    {
        $this->legs6ArrivalTime = $legs6ArrivalTime;
    }

    /**
     * 区間6会社コードを取得する<br>
     * @return string 区間6会社コード<br>
     */
    public function getLegs6CarrierCode()
    {
        return $this->legs6CarrierCode;
    }

    /**
     * 区間6会社コードを設定する<br>
     * @param string $legs6CarrierCode 区間6会社コード<br>
     */
    public function setLegs6CarrierCode($legs6CarrierCode)
    {
        $this->legs6CarrierCode = $legs6CarrierCode;
    }

    /**
     * 区間6サービスクラスを取得する<br>
     * @return string 区間6サービスクラス<br>
     */
    public function getLegs6ClassOfService()
    {
        return $this->legs6ClassOfService;
    }

    /**
     * 区間6サービスクラスを設定する<br>
     * @param string $legs6ClassOfService 区間6サービスクラス<br>
     */
    public function setLegs6ClassOfService($legs6ClassOfService)
    {
        $this->legs6ClassOfService = $legs6ClassOfService;
    }

    /**
     * 区間6クーポン番号を取得する<br>
     * @return string 区間6クーポン番号<br>
     */
    public function getLegs6CouponNumber()
    {
        return $this->legs6CouponNumber;
    }

    /**
     * 区間6クーポン番号を設定する<br>
     * @param string $legs6CouponNumber 区間6クーポン番号<br>
     */
    public function setLegs6CouponNumber($legs6CouponNumber)
    {
        $this->legs6CouponNumber = $legs6CouponNumber;
    }

    /**
     * 区間6出発空港を取得する<br>
     * @return string 区間6出発空港<br>
     */
    public function getLegs6DepartureAirport()
    {
        return $this->legs6DepartureAirport;
    }

    /**
     * 区間6出発空港を設定する<br>
     * @param string $legs6DepartureAirport 区間6出発空港<br>
     */
    public function setLegs6DepartureAirport($legs6DepartureAirport)
    {
        $this->legs6DepartureAirport = $legs6DepartureAirport;
    }

    /**
     * 区間6出発国を取得する<br>
     * @return string 区間6出発国<br>
     */
    public function getLegs6DepartureCountry()
    {
        return $this->legs6DepartureCountry;
    }

    /**
     * 区間6出発国を設定する<br>
     * @param string $legs6DepartureCountry 区間6出発国<br>
     */
    public function setLegs6DepartureCountry($legs6DepartureCountry)
    {
        $this->legs6DepartureCountry = $legs6DepartureCountry;
    }

    /**
     * 区間6出発日を取得する<br>
     * @return string 区間6出発日<br>
     */
    public function getLegs6DepartureDate()
    {
        return $this->legs6DepartureDate;
    }

    /**
     * 区間6出発日を設定する<br>
     * @param string $legs6DepartureDate 区間6出発日<br>
     */
    public function setLegs6DepartureDate($legs6DepartureDate)
    {
        $this->legs6DepartureDate = $legs6DepartureDate;
    }

    /**
     * 区間6出発時間を取得する<br>
     * @return string 区間6出発時間<br>
     */
    public function getLegs6DepartureTime()
    {
        return $this->legs6DepartureTime;
    }

    /**
     * 区間6出発時間を設定する<br>
     * @param string $legs6DepartureTime 区間6出発時間<br>
     */
    public function setLegs6DepartureTime($legs6DepartureTime)
    {
        $this->legs6DepartureTime = $legs6DepartureTime;
    }

    /**
     * 区間6出国税を取得する<br>
     * @return string 区間6出国税<br>
     */
    public function getLegs6DepartureTaxAmount()
    {
        return $this->legs6DepartureTaxAmount;
    }

    /**
     * 区間6出国税を設定する<br>
     * @param string $legs6DepartureTaxAmount 区間6出国税<br>
     */
    public function setLegs6DepartureTaxAmount($legs6DepartureTaxAmount)
    {
        $this->legs6DepartureTaxAmount = $legs6DepartureTaxAmount;
    }

    /**
     * 区間6チケット枚数を取得する<br>
     * @return string 区間6チケット枚数<br>
     */
    public function getLegs6ExchangeTicketNum()
    {
        return $this->legs6ExchangeTicketNum;
    }

    /**
     * 区間6チケット枚数を設定する<br>
     * @param string $legs6ExchangeTicketNum 区間6チケット枚数<br>
     */
    public function setLegs6ExchangeTicketNum($legs6ExchangeTicketNum)
    {
        $this->legs6ExchangeTicketNum = $legs6ExchangeTicketNum;
    }

    /**
     * 区間6運賃を取得する<br>
     * @return string 区間6運賃<br>
     */
    public function getLegs6FareAmount()
    {
        return $this->legs6FareAmount;
    }

    /**
     * 区間6運賃を設定する<br>
     * @param string $legs6FareAmount 区間6運賃<br>
     */
    public function setLegs6FareAmount($legs6FareAmount)
    {
        $this->legs6FareAmount = $legs6FareAmount;
    }

    /**
     * 区間6基本運賃を取得する<br>
     * @return string 区間6基本運賃<br>
     */
    public function getLegs6FareBasis()
    {
        return $this->legs6FareBasis;
    }

    /**
     * 区間6基本運賃を設定する<br>
     * @param string $legs6FareBasis 区間6基本運賃<br>
     */
    public function setLegs6FareBasis($legs6FareBasis)
    {
        $this->legs6FareBasis = $legs6FareBasis;
    }

    /**
     * 区間6手数料を取得する<br>
     * @return string 区間6手数料<br>
     */
    public function getLegs6FeesAmount()
    {
        return $this->legs6FeesAmount;
    }

    /**
     * 区間6手数料を設定する<br>
     * @param string $legs6FeesAmount 区間6手数料<br>
     */
    public function setLegs6FeesAmount($legs6FeesAmount)
    {
        $this->legs6FeesAmount = $legs6FeesAmount;
    }

    /**
     * 区間6フライトナンバーを取得する<br>
     * @return string 区間6フライトナンバー<br>
     */
    public function getLegs6FlightNumber()
    {
        return $this->legs6FlightNumber;
    }

    /**
     * 区間6フライトナンバーを設定する<br>
     * @param string $legs6FlightNumber 区間6フライトナンバー<br>
     */
    public function setLegs6FlightNumber($legs6FlightNumber)
    {
        $this->legs6FlightNumber = $legs6FlightNumber;
    }

    /**
     * 区間6制限を取得する<br>
     * @return string 区間6制限<br>
     */
    public function getLegs6Restrictions()
    {
        return $this->legs6Restrictions;
    }

    /**
     * 区間6制限を設定する<br>
     * @param string $legs6Restrictions 区間6制限<br>
     */
    public function setLegs6Restrictions($legs6Restrictions)
    {
        $this->legs6Restrictions = $legs6Restrictions;
    }

    /**
     * 区間6途中下車許可を取得する<br>
     * @return string 区間6途中下車許可<br>
     */
    public function getLegs6StopOverAllowed()
    {
        return $this->legs6StopOverAllowed;
    }

    /**
     * 区間6途中下車許可を設定する<br>
     * @param string $legs6StopOverAllowed 区間6途中下車許可<br>
     */
    public function setLegs6StopOverAllowed($legs6StopOverAllowed)
    {
        $this->legs6StopOverAllowed = $legs6StopOverAllowed;
    }

    /**
     * 区間6税を取得する<br>
     * @return string 区間6税<br>
     */
    public function getLegs6TaxAmount()
    {
        return $this->legs6TaxAmount;
    }

    /**
     * 区間6税を設定する<br>
     * @param string $legs6TaxAmount 区間6税<br>
     */
    public function setLegs6TaxAmount($legs6TaxAmount)
    {
        $this->legs6TaxAmount = $legs6TaxAmount;
    }

    /**
     * 区間6チケット番号を取得する<br>
     * @return string 区間6チケット番号<br>
     */
    public function getLegs6TicketNumber()
    {
        return $this->legs6TicketNumber;
    }

    /**
     * 区間6チケット番号を設定する<br>
     * @param string $legs6TicketNumber 区間6チケット番号<br>
     */
    public function setLegs6TicketNumber($legs6TicketNumber)
    {
        $this->legs6TicketNumber = $legs6TicketNumber;
    }

    /**
     * 区間7航空会社名を取得する<br>
     * @return string 区間7航空会社名<br>
     */
    public function getLegs7AirlineName()
    {
        return $this->legs7AirlineName;
    }

    /**
     * 区間7航空会社名を設定する<br>
     * @param string $legs7AirlineName 区間7航空会社名<br>
     */
    public function setLegs7AirlineName($legs7AirlineName)
    {
        $this->legs7AirlineName = $legs7AirlineName;
    }

    /**
     * 区間7航空会社コードを取得する<br>
     * @return string 区間7航空会社コード<br>
     */
    public function getLegs7AirlineCode()
    {
        return $this->legs7AirlineCode;
    }

    /**
     * 区間7航空会社コードを設定する<br>
     * @param string $legs7AirlineCode 区間7航空会社コード<br>
     */
    public function setLegs7AirlineCode($legs7AirlineCode)
    {
        $this->legs7AirlineCode = $legs7AirlineCode;
    }

    /**
     * 区間7到着空港を取得する<br>
     * @return string 区間7到着空港<br>
     */
    public function getLegs7ArrivalAirport()
    {
        return $this->legs7ArrivalAirport;
    }

    /**
     * 区間7到着空港を設定する<br>
     * @param string $legs7ArrivalAirport 区間7到着空港<br>
     */
    public function setLegs7ArrivalAirport($legs7ArrivalAirport)
    {
        $this->legs7ArrivalAirport = $legs7ArrivalAirport;
    }

    /**
     * 区間7到着国を取得する<br>
     * @return string 区間7到着国<br>
     */
    public function getLegs7ArrivalCountry()
    {
        return $this->legs7ArrivalCountry;
    }

    /**
     * 区間7到着国を設定する<br>
     * @param string $legs7ArrivalCountry 区間7到着国<br>
     */
    public function setLegs7ArrivalCountry($legs7ArrivalCountry)
    {
        $this->legs7ArrivalCountry = $legs7ArrivalCountry;
    }

    /**
     * 区間7到着日を取得する<br>
     * @return string 区間7到着日<br>
     */
    public function getLegs7ArrivalDate()
    {
        return $this->legs7ArrivalDate;
    }

    /**
     * 区間7到着日を設定する<br>
     * @param string $legs7ArrivalDate 区間7到着日<br>
     */
    public function setLegs7ArrivalDate($legs7ArrivalDate)
    {
        $this->legs7ArrivalDate = $legs7ArrivalDate;
    }

    /**
     * 区間7到着時間を取得する<br>
     * @return string 区間7到着時間<br>
     */
    public function getLegs7ArrivalTime()
    {
        return $this->legs7ArrivalTime;
    }

    /**
     * 区間7到着時間を設定する<br>
     * @param string $legs7ArrivalTime 区間7到着時間<br>
     */
    public function setLegs7ArrivalTime($legs7ArrivalTime)
    {
        $this->legs7ArrivalTime = $legs7ArrivalTime;
    }

    /**
     * 区間7会社コードを取得する<br>
     * @return string 区間7会社コード<br>
     */
    public function getLegs7CarrierCode()
    {
        return $this->legs7CarrierCode;
    }

    /**
     * 区間7会社コードを設定する<br>
     * @param string $legs7CarrierCode 区間7会社コード<br>
     */
    public function setLegs7CarrierCode($legs7CarrierCode)
    {
        $this->legs7CarrierCode = $legs7CarrierCode;
    }

    /**
     * 区間7サービスクラスを取得する<br>
     * @return string 区間7サービスクラス<br>
     */
    public function getLegs7ClassOfService()
    {
        return $this->legs7ClassOfService;
    }

    /**
     * 区間7サービスクラスを設定する<br>
     * @param string $legs7ClassOfService 区間7サービスクラス<br>
     */
    public function setLegs7ClassOfService($legs7ClassOfService)
    {
        $this->legs7ClassOfService = $legs7ClassOfService;
    }

    /**
     * 区間7クーポン番号を取得する<br>
     * @return string 区間7クーポン番号<br>
     */
    public function getLegs7CouponNumber()
    {
        return $this->legs7CouponNumber;
    }

    /**
     * 区間7クーポン番号を設定する<br>
     * @param string $legs7CouponNumber 区間7クーポン番号<br>
     */
    public function setLegs7CouponNumber($legs7CouponNumber)
    {
        $this->legs7CouponNumber = $legs7CouponNumber;
    }

    /**
     * 区間7出発空港を取得する<br>
     * @return string 区間7出発空港<br>
     */
    public function getLegs7DepartureAirport()
    {
        return $this->legs7DepartureAirport;
    }

    /**
     * 区間7出発空港を設定する<br>
     * @param string $legs7DepartureAirport 区間7出発空港<br>
     */
    public function setLegs7DepartureAirport($legs7DepartureAirport)
    {
        $this->legs7DepartureAirport = $legs7DepartureAirport;
    }

    /**
     * 区間7出発国を取得する<br>
     * @return string 区間7出発国<br>
     */
    public function getLegs7DepartureCountry()
    {
        return $this->legs7DepartureCountry;
    }

    /**
     * 区間7出発国を設定する<br>
     * @param string $legs7DepartureCountry 区間7出発国<br>
     */
    public function setLegs7DepartureCountry($legs7DepartureCountry)
    {
        $this->legs7DepartureCountry = $legs7DepartureCountry;
    }

    /**
     * 区間7出発日を取得する<br>
     * @return string 区間7出発日<br>
     */
    public function getLegs7DepartureDate()
    {
        return $this->legs7DepartureDate;
    }

    /**
     * 区間7出発日を設定する<br>
     * @param string $legs7DepartureDate 区間7出発日<br>
     */
    public function setLegs7DepartureDate($legs7DepartureDate)
    {
        $this->legs7DepartureDate = $legs7DepartureDate;
    }

    /**
     * 区間7出発時間を取得する<br>
     * @return string 区間7出発時間<br>
     */
    public function getLegs7DepartureTime()
    {
        return $this->legs7DepartureTime;
    }

    /**
     * 区間7出発時間を設定する<br>
     * @param string $legs7DepartureTime 区間7出発時間<br>
     */
    public function setLegs7DepartureTime($legs7DepartureTime)
    {
        $this->legs7DepartureTime = $legs7DepartureTime;
    }

    /**
     * 区間7出国税を取得する<br>
     * @return string 区間7出国税<br>
     */
    public function getLegs7DepartureTaxAmount()
    {
        return $this->legs7DepartureTaxAmount;
    }

    /**
     * 区間7出国税を設定する<br>
     * @param string $legs7DepartureTaxAmount 区間7出国税<br>
     */
    public function setLegs7DepartureTaxAmount($legs7DepartureTaxAmount)
    {
        $this->legs7DepartureTaxAmount = $legs7DepartureTaxAmount;
    }

    /**
     * 区間7チケット枚数を取得する<br>
     * @return string 区間7チケット枚数<br>
     */
    public function getLegs7ExchangeTicketNum()
    {
        return $this->legs7ExchangeTicketNum;
    }

    /**
     * 区間7チケット枚数を設定する<br>
     * @param string $legs7ExchangeTicketNum 区間7チケット枚数<br>
     */
    public function setLegs7ExchangeTicketNum($legs7ExchangeTicketNum)
    {
        $this->legs7ExchangeTicketNum = $legs7ExchangeTicketNum;
    }

    /**
     * 区間7運賃を取得する<br>
     * @return string 区間7運賃<br>
     */
    public function getLegs7FareAmount()
    {
        return $this->legs7FareAmount;
    }

    /**
     * 区間7運賃を設定する<br>
     * @param string $legs7FareAmount 区間7運賃<br>
     */
    public function setLegs7FareAmount($legs7FareAmount)
    {
        $this->legs7FareAmount = $legs7FareAmount;
    }

    /**
     * 区間7基本運賃を取得する<br>
     * @return string 区間7基本運賃<br>
     */
    public function getLegs7FareBasis()
    {
        return $this->legs7FareBasis;
    }

    /**
     * 区間7基本運賃を設定する<br>
     * @param string $legs7FareBasis 区間7基本運賃<br>
     */
    public function setLegs7FareBasis($legs7FareBasis)
    {
        $this->legs7FareBasis = $legs7FareBasis;
    }

    /**
     * 区間7手数料を取得する<br>
     * @return string 区間7手数料<br>
     */
    public function getLegs7FeesAmount()
    {
        return $this->legs7FeesAmount;
    }

    /**
     * 区間7手数料を設定する<br>
     * @param string $legs7FeesAmount 区間7手数料<br>
     */
    public function setLegs7FeesAmount($legs7FeesAmount)
    {
        $this->legs7FeesAmount = $legs7FeesAmount;
    }

    /**
     * 区間7フライトナンバーを取得する<br>
     * @return string 区間7フライトナンバー<br>
     */
    public function getLegs7FlightNumber()
    {
        return $this->legs7FlightNumber;
    }

    /**
     * 区間7フライトナンバーを設定する<br>
     * @param string $legs7FlightNumber 区間7フライトナンバー<br>
     */
    public function setLegs7FlightNumber($legs7FlightNumber)
    {
        $this->legs7FlightNumber = $legs7FlightNumber;
    }

    /**
     * 区間7制限を取得する<br>
     * @return string 区間7制限<br>
     */
    public function getLegs7Restrictions()
    {
        return $this->legs7Restrictions;
    }

    /**
     * 区間7制限を設定する<br>
     * @param string $legs7Restrictions 区間7制限<br>
     */
    public function setLegs7Restrictions($legs7Restrictions)
    {
        $this->legs7Restrictions = $legs7Restrictions;
    }

    /**
     * 区間7途中下車許可を取得する<br>
     * @return string 区間7途中下車許可<br>
     */
    public function getLegs7StopOverAllowed()
    {
        return $this->legs7StopOverAllowed;
    }

    /**
     * 区間7途中下車許可を設定する<br>
     * @param string $legs7StopOverAllowed 区間7途中下車許可<br>
     */
    public function setLegs7StopOverAllowed($legs7StopOverAllowed)
    {
        $this->legs7StopOverAllowed = $legs7StopOverAllowed;
    }

    /**
     * 区間7税を取得する<br>
     * @return string 区間7税<br>
     */
    public function getLegs7TaxAmount()
    {
        return $this->legs7TaxAmount;
    }

    /**
     * 区間7税を設定する<br>
     * @param string $legs7TaxAmount 区間7税<br>
     */
    public function setLegs7TaxAmount($legs7TaxAmount)
    {
        $this->legs7TaxAmount = $legs7TaxAmount;
    }

    /**
     * 区間7チケット番号を取得する<br>
     * @return string 区間7チケット番号<br>
     */
    public function getLegs7TicketNumber()
    {
        return $this->legs7TicketNumber;
    }

    /**
     * 区間7チケット番号を設定する<br>
     * @param string $legs7TicketNumber 区間7チケット番号<br>
     */
    public function setLegs7TicketNumber($legs7TicketNumber)
    {
        $this->legs7TicketNumber = $legs7TicketNumber;
    }

    /**
     * 区間8航空会社名を取得する<br>
     * @return string 区間8航空会社名<br>
     */
    public function getLegs8AirlineName()
    {
        return $this->legs8AirlineName;
    }

    /**
     * 区間8航空会社名を設定する<br>
     * @param string $legs8AirlineName 区間8航空会社名<br>
     */
    public function setLegs8AirlineName($legs8AirlineName)
    {
        $this->legs8AirlineName = $legs8AirlineName;
    }

    /**
     * 区間8航空会社コードを取得する<br>
     * @return string 区間8航空会社コード<br>
     */
    public function getLegs8AirlineCode()
    {
        return $this->legs8AirlineCode;
    }

    /**
     * 区間8航空会社コードを設定する<br>
     * @param string $legs8AirlineCode 区間8航空会社コード<br>
     */
    public function setLegs8AirlineCode($legs8AirlineCode)
    {
        $this->legs8AirlineCode = $legs8AirlineCode;
    }

    /**
     * 区間8到着空港を取得する<br>
     * @return string 区間8到着空港<br>
     */
    public function getLegs8ArrivalAirport()
    {
        return $this->legs8ArrivalAirport;
    }

    /**
     * 区間8到着空港を設定する<br>
     * @param string $legs8ArrivalAirport 区間8到着空港<br>
     */
    public function setLegs8ArrivalAirport($legs8ArrivalAirport)
    {
        $this->legs8ArrivalAirport = $legs8ArrivalAirport;
    }

    /**
     * 区間8到着国を取得する<br>
     * @return string 区間8到着国<br>
     */
    public function getLegs8ArrivalCountry()
    {
        return $this->legs8ArrivalCountry;
    }

    /**
     * 区間8到着国を設定する<br>
     * @param string $legs8ArrivalCountry 区間8到着国<br>
     */
    public function setLegs8ArrivalCountry($legs8ArrivalCountry)
    {
        $this->legs8ArrivalCountry = $legs8ArrivalCountry;
    }

    /**
     * 区間8到着日を取得する<br>
     * @return string 区間8到着日<br>
     */
    public function getLegs8ArrivalDate()
    {
        return $this->legs8ArrivalDate;
    }

    /**
     * 区間8到着日を設定する<br>
     * @param string $legs8ArrivalDate 区間8到着日<br>
     */
    public function setLegs8ArrivalDate($legs8ArrivalDate)
    {
        $this->legs8ArrivalDate = $legs8ArrivalDate;
    }

    /**
     * 区間8到着時間を取得する<br>
     * @return string 区間8到着時間<br>
     */
    public function getLegs8ArrivalTime()
    {
        return $this->legs8ArrivalTime;
    }

    /**
     * 区間8到着時間を設定する<br>
     * @param string $legs8ArrivalTime 区間8到着時間<br>
     */
    public function setLegs8ArrivalTime($legs8ArrivalTime)
    {
        $this->legs8ArrivalTime = $legs8ArrivalTime;
    }

    /**
     * 区間8会社コードを取得する<br>
     * @return string 区間8会社コード<br>
     */
    public function getLegs8CarrierCode()
    {
        return $this->legs8CarrierCode;
    }

    /**
     * 区間8会社コードを設定する<br>
     * @param string $legs8CarrierCode 区間8会社コード<br>
     */
    public function setLegs8CarrierCode($legs8CarrierCode)
    {
        $this->legs8CarrierCode = $legs8CarrierCode;
    }

    /**
     * 区間8サービスクラスを取得する<br>
     * @return string 区間8サービスクラス<br>
     */
    public function getLegs8ClassOfService()
    {
        return $this->legs8ClassOfService;
    }

    /**
     * 区間8サービスクラスを設定する<br>
     * @param string $legs8ClassOfService 区間8サービスクラス<br>
     */
    public function setLegs8ClassOfService($legs8ClassOfService)
    {
        $this->legs8ClassOfService = $legs8ClassOfService;
    }

    /**
     * 区間8クーポン番号を取得する<br>
     * @return string 区間8クーポン番号<br>
     */
    public function getLegs8CouponNumber()
    {
        return $this->legs8CouponNumber;
    }

    /**
     * 区間8クーポン番号を設定する<br>
     * @param string $legs8CouponNumber 区間8クーポン番号<br>
     */
    public function setLegs8CouponNumber($legs8CouponNumber)
    {
        $this->legs8CouponNumber = $legs8CouponNumber;
    }

    /**
     * 区間8出発空港を取得する<br>
     * @return string 区間8出発空港<br>
     */
    public function getLegs8DepartureAirport()
    {
        return $this->legs8DepartureAirport;
    }

    /**
     * 区間8出発空港を設定する<br>
     * @param string $legs8DepartureAirport 区間8出発空港<br>
     */
    public function setLegs8DepartureAirport($legs8DepartureAirport)
    {
        $this->legs8DepartureAirport = $legs8DepartureAirport;
    }

    /**
     * 区間8出発国を取得する<br>
     * @return string 区間8出発国<br>
     */
    public function getLegs8DepartureCountry()
    {
        return $this->legs8DepartureCountry;
    }

    /**
     * 区間8出発国を設定する<br>
     * @param string $legs8DepartureCountry 区間8出発国<br>
     */
    public function setLegs8DepartureCountry($legs8DepartureCountry)
    {
        $this->legs8DepartureCountry = $legs8DepartureCountry;
    }

    /**
     * 区間8出発日を取得する<br>
     * @return string 区間8出発日<br>
     */
    public function getLegs8DepartureDate()
    {
        return $this->legs8DepartureDate;
    }

    /**
     * 区間8出発日を設定する<br>
     * @param string $legs8DepartureDate 区間8出発日<br>
     */
    public function setLegs8DepartureDate($legs8DepartureDate)
    {
        $this->legs8DepartureDate = $legs8DepartureDate;
    }

    /**
     * 区間8出発時間を取得する<br>
     * @return string 区間8出発時間<br>
     */
    public function getLegs8DepartureTime()
    {
        return $this->legs8DepartureTime;
    }

    /**
     * 区間8出発時間を設定する<br>
     * @param string $legs8DepartureTime 区間8出発時間<br>
     */
    public function setLegs8DepartureTime($legs8DepartureTime)
    {
        $this->legs8DepartureTime = $legs8DepartureTime;
    }

    /**
     * 区間8出国税を取得する<br>
     * @return string 区間8出国税<br>
     */
    public function getLegs8DepartureTaxAmount()
    {
        return $this->legs8DepartureTaxAmount;
    }

    /**
     * 区間8出国税を設定する<br>
     * @param string $legs8DepartureTaxAmount 区間8出国税<br>
     */
    public function setLegs8DepartureTaxAmount($legs8DepartureTaxAmount)
    {
        $this->legs8DepartureTaxAmount = $legs8DepartureTaxAmount;
    }

    /**
     * 区間8チケット枚数を取得する<br>
     * @return string 区間8チケット枚数<br>
     */
    public function getLegs8ExchangeTicketNum()
    {
        return $this->legs8ExchangeTicketNum;
    }

    /**
     * 区間8チケット枚数を設定する<br>
     * @param string $legs8ExchangeTicketNum 区間8チケット枚数<br>
     */
    public function setLegs8ExchangeTicketNum($legs8ExchangeTicketNum)
    {
        $this->legs8ExchangeTicketNum = $legs8ExchangeTicketNum;
    }

    /**
     * 区間8運賃を取得する<br>
     * @return string 区間8運賃<br>
     */
    public function getLegs8FareAmount()
    {
        return $this->legs8FareAmount;
    }

    /**
     * 区間8運賃を設定する<br>
     * @param string $legs8FareAmount 区間8運賃<br>
     */
    public function setLegs8FareAmount($legs8FareAmount)
    {
        $this->legs8FareAmount = $legs8FareAmount;
    }

    /**
     * 区間8基本運賃を取得する<br>
     * @return string 区間8基本運賃<br>
     */
    public function getLegs8FareBasis()
    {
        return $this->legs8FareBasis;
    }

    /**
     * 区間8基本運賃を設定する<br>
     * @param string $legs8FareBasis 区間8基本運賃<br>
     */
    public function setLegs8FareBasis($legs8FareBasis)
    {
        $this->legs8FareBasis = $legs8FareBasis;
    }

    /**
     * 区間8手数料を取得する<br>
     * @return string 区間8手数料<br>
     */
    public function getLegs8FeesAmount()
    {
        return $this->legs8FeesAmount;
    }

    /**
     * 区間8手数料を設定する<br>
     * @param string $legs8FeesAmount 区間8手数料<br>
     */
    public function setLegs8FeesAmount($legs8FeesAmount)
    {
        $this->legs8FeesAmount = $legs8FeesAmount;
    }

    /**
     * 区間8フライトナンバーを取得する<br>
     * @return string 区間8フライトナンバー<br>
     */
    public function getLegs8FlightNumber()
    {
        return $this->legs8FlightNumber;
    }

    /**
     * 区間8フライトナンバーを設定する<br>
     * @param string $legs8FlightNumber 区間8フライトナンバー<br>
     */
    public function setLegs8FlightNumber($legs8FlightNumber)
    {
        $this->legs8FlightNumber = $legs8FlightNumber;
    }

    /**
     * 区間8制限を取得する<br>
     * @return string 区間8制限<br>
     */
    public function getLegs8Restrictions()
    {
        return $this->legs8Restrictions;
    }

    /**
     * 区間8制限を設定する<br>
     * @param string $legs8Restrictions 区間8制限<br>
     */
    public function setLegs8Restrictions($legs8Restrictions)
    {
        $this->legs8Restrictions = $legs8Restrictions;
    }

    /**
     * 区間8途中下車許可を取得する<br>
     * @return string 区間8途中下車許可<br>
     */
    public function getLegs8StopOverAllowed()
    {
        return $this->legs8StopOverAllowed;
    }

    /**
     * 区間8途中下車許可を設定する<br>
     * @param string $legs8StopOverAllowed 区間8途中下車許可<br>
     */
    public function setLegs8StopOverAllowed($legs8StopOverAllowed)
    {
        $this->legs8StopOverAllowed = $legs8StopOverAllowed;
    }

    /**
     * 区間8税を取得する<br>
     * @return string 区間8税<br>
     */
    public function getLegs8TaxAmount()
    {
        return $this->legs8TaxAmount;
    }

    /**
     * 区間8税を設定する<br>
     * @param string $legs8TaxAmount 区間8税<br>
     */
    public function setLegs8TaxAmount($legs8TaxAmount)
    {
        $this->legs8TaxAmount = $legs8TaxAmount;
    }

    /**
     * 区間8チケット番号を取得する<br>
     * @return string 区間8チケット番号<br>
     */
    public function getLegs8TicketNumber()
    {
        return $this->legs8TicketNumber;
    }

    /**
     * 区間8チケット番号を設定する<br>
     * @param string $legs8TicketNumber 区間8チケット番号<br>
     */
    public function setLegs8TicketNumber($legs8TicketNumber)
    {
        $this->legs8TicketNumber = $legs8TicketNumber;
    }

    /**
     * 区間9航空会社名を取得する<br>
     * @return string 区間9航空会社名<br>
     */
    public function getLegs9AirlineName()
    {
        return $this->legs9AirlineName;
    }

    /**
     * 区間9航空会社名を設定する<br>
     * @param string $legs9AirlineName 区間9航空会社名<br>
     */
    public function setLegs9AirlineName($legs9AirlineName)
    {
        $this->legs9AirlineName = $legs9AirlineName;
    }

    /**
     * 区間9航空会社コードを取得する<br>
     * @return string 区間9航空会社コード<br>
     */
    public function getLegs9AirlineCode()
    {
        return $this->legs9AirlineCode;
    }

    /**
     * 区間9航空会社コードを設定する<br>
     * @param string $legs9AirlineCode 区間9航空会社コード<br>
     */
    public function setLegs9AirlineCode($legs9AirlineCode)
    {
        $this->legs9AirlineCode = $legs9AirlineCode;
    }

    /**
     * 区間9到着空港を取得する<br>
     * @return string 区間9到着空港<br>
     */
    public function getLegs9ArrivalAirport()
    {
        return $this->legs9ArrivalAirport;
    }

    /**
     * 区間9到着空港を設定する<br>
     * @param string $legs9ArrivalAirport 区間9到着空港<br>
     */
    public function setLegs9ArrivalAirport($legs9ArrivalAirport)
    {
        $this->legs9ArrivalAirport = $legs9ArrivalAirport;
    }

    /**
     * 区間9到着国を取得する<br>
     * @return string 区間9到着国<br>
     */
    public function getLegs9ArrivalCountry()
    {
        return $this->legs9ArrivalCountry;
    }

    /**
     * 区間9到着国を設定する<br>
     * @param string $legs9ArrivalCountry 区間9到着国<br>
     */
    public function setLegs9ArrivalCountry($legs9ArrivalCountry)
    {
        $this->legs9ArrivalCountry = $legs9ArrivalCountry;
    }

    /**
     * 区間9到着日を取得する<br>
     * @return string 区間9到着日<br>
     */
    public function getLegs9ArrivalDate()
    {
        return $this->legs9ArrivalDate;
    }

    /**
     * 区間9到着日を設定する<br>
     * @param string $legs9ArrivalDate 区間9到着日<br>
     */
    public function setLegs9ArrivalDate($legs9ArrivalDate)
    {
        $this->legs9ArrivalDate = $legs9ArrivalDate;
    }

    /**
     * 区間9到着時間を取得する<br>
     * @return string 区間9到着時間<br>
     */
    public function getLegs9ArrivalTime()
    {
        return $this->legs9ArrivalTime;
    }

    /**
     * 区間9到着時間を設定する<br>
     * @param string $legs9ArrivalTime 区間9到着時間<br>
     */
    public function setLegs9ArrivalTime($legs9ArrivalTime)
    {
        $this->legs9ArrivalTime = $legs9ArrivalTime;
    }

    /**
     * 区間9会社コードを取得する<br>
     * @return string 区間9会社コード<br>
     */
    public function getLegs9CarrierCode()
    {
        return $this->legs9CarrierCode;
    }

    /**
     * 区間9会社コードを設定する<br>
     * @param string $legs9CarrierCode 区間9会社コード<br>
     */
    public function setLegs9CarrierCode($legs9CarrierCode)
    {
        $this->legs9CarrierCode = $legs9CarrierCode;
    }

    /**
     * 区間9サービスクラスを取得する<br>
     * @return string 区間9サービスクラス<br>
     */
    public function getLegs9ClassOfService()
    {
        return $this->legs9ClassOfService;
    }

    /**
     * 区間9サービスクラスを設定する<br>
     * @param string $legs9ClassOfService 区間9サービスクラス<br>
     */
    public function setLegs9ClassOfService($legs9ClassOfService)
    {
        $this->legs9ClassOfService = $legs9ClassOfService;
    }

    /**
     * 区間9クーポン番号を取得する<br>
     * @return string 区間9クーポン番号<br>
     */
    public function getLegs9CouponNumber()
    {
        return $this->legs9CouponNumber;
    }

    /**
     * 区間9クーポン番号を設定する<br>
     * @param string $legs9CouponNumber 区間9クーポン番号<br>
     */
    public function setLegs9CouponNumber($legs9CouponNumber)
    {
        $this->legs9CouponNumber = $legs9CouponNumber;
    }

    /**
     * 区間9出発空港を取得する<br>
     * @return string 区間9出発空港<br>
     */
    public function getLegs9DepartureAirport()
    {
        return $this->legs9DepartureAirport;
    }

    /**
     * 区間9出発空港を設定する<br>
     * @param string $legs9DepartureAirport 区間9出発空港<br>
     */
    public function setLegs9DepartureAirport($legs9DepartureAirport)
    {
        $this->legs9DepartureAirport = $legs9DepartureAirport;
    }

    /**
     * 区間9出発国を取得する<br>
     * @return string 区間9出発国<br>
     */
    public function getLegs9DepartureCountry()
    {
        return $this->legs9DepartureCountry;
    }

    /**
     * 区間9出発国を設定する<br>
     * @param string $legs9DepartureCountry 区間9出発国<br>
     */
    public function setLegs9DepartureCountry($legs9DepartureCountry)
    {
        $this->legs9DepartureCountry = $legs9DepartureCountry;
    }

    /**
     * 区間9出発日を取得する<br>
     * @return string 区間9出発日<br>
     */
    public function getLegs9DepartureDate()
    {
        return $this->legs9DepartureDate;
    }

    /**
     * 区間9出発日を設定する<br>
     * @param string $legs9DepartureDate 区間9出発日<br>
     */
    public function setLegs9DepartureDate($legs9DepartureDate)
    {
        $this->legs9DepartureDate = $legs9DepartureDate;
    }

    /**
     * 区間9出発時間を取得する<br>
     * @return string 区間9出発時間<br>
     */
    public function getLegs9DepartureTime()
    {
        return $this->legs9DepartureTime;
    }

    /**
     * 区間9出発時間を設定する<br>
     * @param string $legs9DepartureTime 区間9出発時間<br>
     */
    public function setLegs9DepartureTime($legs9DepartureTime)
    {
        $this->legs9DepartureTime = $legs9DepartureTime;
    }

    /**
     * 区間9出国税を取得する<br>
     * @return string 区間9出国税<br>
     */
    public function getLegs9DepartureTaxAmount()
    {
        return $this->legs9DepartureTaxAmount;
    }

    /**
     * 区間9出国税を設定する<br>
     * @param string $legs9DepartureTaxAmount 区間9出国税<br>
     */
    public function setLegs9DepartureTaxAmount($legs9DepartureTaxAmount)
    {
        $this->legs9DepartureTaxAmount = $legs9DepartureTaxAmount;
    }

    /**
     * 区間9チケット枚数を取得する<br>
     * @return string 区間9チケット枚数<br>
     */
    public function getLegs9ExchangeTicketNum()
    {
        return $this->legs9ExchangeTicketNum;
    }

    /**
     * 区間9チケット枚数を設定する<br>
     * @param string $legs9ExchangeTicketNum 区間9チケット枚数<br>
     */
    public function setLegs9ExchangeTicketNum($legs9ExchangeTicketNum)
    {
        $this->legs9ExchangeTicketNum = $legs9ExchangeTicketNum;
    }

    /**
     * 区間9運賃を取得する<br>
     * @return string 区間9運賃<br>
     */
    public function getLegs9FareAmount()
    {
        return $this->legs9FareAmount;
    }

    /**
     * 区間9運賃を設定する<br>
     * @param string $legs9FareAmount 区間9運賃<br>
     */
    public function setLegs9FareAmount($legs9FareAmount)
    {
        $this->legs9FareAmount = $legs9FareAmount;
    }

    /**
     * 区間9基本運賃を取得する<br>
     * @return string 区間9基本運賃<br>
     */
    public function getLegs9FareBasis()
    {
        return $this->legs9FareBasis;
    }

    /**
     * 区間9基本運賃を設定する<br>
     * @param string $legs9FareBasis 区間9基本運賃<br>
     */
    public function setLegs9FareBasis($legs9FareBasis)
    {
        $this->legs9FareBasis = $legs9FareBasis;
    }

    /**
     * 区間9手数料を取得する<br>
     * @return string 区間9手数料<br>
     */
    public function getLegs9FeesAmount()
    {
        return $this->legs9FeesAmount;
    }

    /**
     * 区間9手数料を設定する<br>
     * @param string $legs9FeesAmount 区間9手数料<br>
     */
    public function setLegs9FeesAmount($legs9FeesAmount)
    {
        $this->legs9FeesAmount = $legs9FeesAmount;
    }

    /**
     * 区間9フライトナンバーを取得する<br>
     * @return string 区間9フライトナンバー<br>
     */
    public function getLegs9FlightNumber()
    {
        return $this->legs9FlightNumber;
    }

    /**
     * 区間9フライトナンバーを設定する<br>
     * @param string $legs9FlightNumber 区間9フライトナンバー<br>
     */
    public function setLegs9FlightNumber($legs9FlightNumber)
    {
        $this->legs9FlightNumber = $legs9FlightNumber;
    }

    /**
     * 区間9制限を取得する<br>
     * @return string 区間9制限<br>
     */
    public function getLegs9Restrictions()
    {
        return $this->legs9Restrictions;
    }

    /**
     * 区間9制限を設定する<br>
     * @param string $legs9Restrictions 区間9制限<br>
     */
    public function setLegs9Restrictions($legs9Restrictions)
    {
        $this->legs9Restrictions = $legs9Restrictions;
    }

    /**
     * 区間9途中下車許可を取得する<br>
     * @return string 区間9途中下車許可<br>
     */
    public function getLegs9StopOverAllowed()
    {
        return $this->legs9StopOverAllowed;
    }

    /**
     * 区間9途中下車許可を設定する<br>
     * @param string $legs9StopOverAllowed 区間9途中下車許可<br>
     */
    public function setLegs9StopOverAllowed($legs9StopOverAllowed)
    {
        $this->legs9StopOverAllowed = $legs9StopOverAllowed;
    }

    /**
     * 区間9税を取得する<br>
     * @return string 区間9税<br>
     */
    public function getLegs9TaxAmount()
    {
        return $this->legs9TaxAmount;
    }

    /**
     * 区間9税を設定する<br>
     * @param string $legs9TaxAmount 区間9税<br>
     */
    public function setLegs9TaxAmount($legs9TaxAmount)
    {
        $this->legs9TaxAmount = $legs9TaxAmount;
    }

    /**
     * 区間9チケット番号を取得する<br>
     * @return string 区間9チケット番号<br>
     */
    public function getLegs9TicketNumber()
    {
        return $this->legs9TicketNumber;
    }

    /**
     * 区間9チケット番号を設定する<br>
     * @param string $legs9TicketNumber 区間9チケット番号<br>
     */
    public function setLegs9TicketNumber($legs9TicketNumber)
    {
        $this->legs9TicketNumber = $legs9TicketNumber;
    }

    /**
     * 区間10航空会社名を取得する<br>
     * @return string 区間10航空会社名<br>
     */
    public function getLegs10AirlineName()
    {
        return $this->legs10AirlineName;
    }

    /**
     * 区間10航空会社名を設定する<br>
     * @param string $legs10AirlineName 区間10航空会社名<br>
     */
    public function setLegs10AirlineName($legs10AirlineName)
    {
        $this->legs10AirlineName = $legs10AirlineName;
    }

    /**
     * 区間10航空会社コードを取得する<br>
     * @return string 区間10航空会社コード<br>
     */
    public function getLegs10AirlineCode()
    {
        return $this->legs10AirlineCode;
    }

    /**
     * 区間10航空会社コードを設定する<br>
     * @param string $legs10AirlineCode 区間10航空会社コード<br>
     */
    public function setLegs10AirlineCode($legs10AirlineCode)
    {
        $this->legs10AirlineCode = $legs10AirlineCode;
    }

    /**
     * 区間10到着空港を取得する<br>
     * @return string 区間10到着空港<br>
     */
    public function getLegs10ArrivalAirport()
    {
        return $this->legs10ArrivalAirport;
    }

    /**
     * 区間10到着空港を設定する<br>
     * @param string $legs10ArrivalAirport 区間10到着空港<br>
     */
    public function setLegs10ArrivalAirport($legs10ArrivalAirport)
    {
        $this->legs10ArrivalAirport = $legs10ArrivalAirport;
    }

    /**
     * 区間10到着国を取得する<br>
     * @return string 区間10到着国<br>
     */
    public function getLegs10ArrivalCountry()
    {
        return $this->legs10ArrivalCountry;
    }

    /**
     * 区間10到着国を設定する<br>
     * @param string $legs10ArrivalCountry 区間10到着国<br>
     */
    public function setLegs10ArrivalCountry($legs10ArrivalCountry)
    {
        $this->legs10ArrivalCountry = $legs10ArrivalCountry;
    }

    /**
     * 区間10到着日を取得する<br>
     * @return string 区間10到着日<br>
     */
    public function getLegs10ArrivalDate()
    {
        return $this->legs10ArrivalDate;
    }

    /**
     * 区間10到着日を設定する<br>
     * @param string $legs10ArrivalDate 区間10到着日<br>
     */
    public function setLegs10ArrivalDate($legs10ArrivalDate)
    {
        $this->legs10ArrivalDate = $legs10ArrivalDate;
    }

    /**
     * 区間10到着時間を取得する<br>
     * @return string 区間10到着時間<br>
     */
    public function getLegs10ArrivalTime()
    {
        return $this->legs10ArrivalTime;
    }

    /**
     * 区間10到着時間を設定する<br>
     * @param string $legs10ArrivalTime 区間10到着時間<br>
     */
    public function setLegs10ArrivalTime($legs10ArrivalTime)
    {
        $this->legs10ArrivalTime = $legs10ArrivalTime;
    }

    /**
     * 区間10会社コードを取得する<br>
     * @return string 区間10会社コード<br>
     */
    public function getLegs10CarrierCode()
    {
        return $this->legs10CarrierCode;
    }

    /**
     * 区間10会社コードを設定する<br>
     * @param string $legs10CarrierCode 区間10会社コード<br>
     */
    public function setLegs10CarrierCode($legs10CarrierCode)
    {
        $this->legs10CarrierCode = $legs10CarrierCode;
    }

    /**
     * 区間10サービスクラスを取得する<br>
     * @return string 区間10サービスクラス<br>
     */
    public function getLegs10ClassOfService()
    {
        return $this->legs10ClassOfService;
    }

    /**
     * 区間10サービスクラスを設定する<br>
     * @param string $legs10ClassOfService 区間10サービスクラス<br>
     */
    public function setLegs10ClassOfService($legs10ClassOfService)
    {
        $this->legs10ClassOfService = $legs10ClassOfService;
    }

    /**
     * 区間10クーポン番号を取得する<br>
     * @return string 区間10クーポン番号<br>
     */
    public function getLegs10CouponNumber()
    {
        return $this->legs10CouponNumber;
    }

    /**
     * 区間10クーポン番号を設定する<br>
     * @param string $legs10CouponNumber 区間10クーポン番号<br>
     */
    public function setLegs10CouponNumber($legs10CouponNumber)
    {
        $this->legs10CouponNumber = $legs10CouponNumber;
    }

    /**
     * 区間10出発空港を取得する<br>
     * @return string 区間10出発空港<br>
     */
    public function getLegs10DepartureAirport()
    {
        return $this->legs10DepartureAirport;
    }

    /**
     * 区間10出発空港を設定する<br>
     * @param string $legs10DepartureAirport 区間10出発空港<br>
     */
    public function setLegs10DepartureAirport($legs10DepartureAirport)
    {
        $this->legs10DepartureAirport = $legs10DepartureAirport;
    }

    /**
     * 区間10出発国を取得する<br>
     * @return string 区間10出発国<br>
     */
    public function getLegs10DepartureCountry()
    {
        return $this->legs10DepartureCountry;
    }

    /**
     * 区間10出発国を設定する<br>
     * @param string $legs10DepartureCountry 区間10出発国<br>
     */
    public function setLegs10DepartureCountry($legs10DepartureCountry)
    {
        $this->legs10DepartureCountry = $legs10DepartureCountry;
    }

    /**
     * 区間10出発日を取得する<br>
     * @return string 区間10出発日<br>
     */
    public function getLegs10DepartureDate()
    {
        return $this->legs10DepartureDate;
    }

    /**
     * 区間10出発日を設定する<br>
     * @param string $legs10DepartureDate 区間10出発日<br>
     */
    public function setLegs10DepartureDate($legs10DepartureDate)
    {
        $this->legs10DepartureDate = $legs10DepartureDate;
    }

    /**
     * 区間10出発時間を取得する<br>
     * @return string 区間10出発時間<br>
     */
    public function getLegs10DepartureTime()
    {
        return $this->legs10DepartureTime;
    }

    /**
     * 区間10出発時間を設定する<br>
     * @param string $legs10DepartureTime 区間10出発時間<br>
     */
    public function setLegs10DepartureTime($legs10DepartureTime)
    {
        $this->legs10DepartureTime = $legs10DepartureTime;
    }

    /**
     * 区間10出国税を取得する<br>
     * @return string 区間10出国税<br>
     */
    public function getLegs10DepartureTaxAmount()
    {
        return $this->legs10DepartureTaxAmount;
    }

    /**
     * 区間10出国税を設定する<br>
     * @param string $legs10DepartureTaxAmount 区間10出国税<br>
     */
    public function setLegs10DepartureTaxAmount($legs10DepartureTaxAmount)
    {
        $this->legs10DepartureTaxAmount = $legs10DepartureTaxAmount;
    }

    /**
     * 区間10チケット枚数を取得する<br>
     * @return string 区間10チケット枚数<br>
     */
    public function getLegs10ExchangeTicketNum()
    {
        return $this->legs10ExchangeTicketNum;
    }

    /**
     * 区間10チケット枚数を設定する<br>
     * @param string $legs10ExchangeTicketNum 区間10チケット枚数<br>
     */
    public function setLegs10ExchangeTicketNum($legs10ExchangeTicketNum)
    {
        $this->legs10ExchangeTicketNum = $legs10ExchangeTicketNum;
    }

    /**
     * 区間10運賃を取得する<br>
     * @return string 区間10運賃<br>
     */
    public function getLegs10FareAmount()
    {
        return $this->legs10FareAmount;
    }

    /**
     * 区間10運賃を設定する<br>
     * @param string $legs10FareAmount 区間10運賃<br>
     */
    public function setLegs10FareAmount($legs10FareAmount)
    {
        $this->legs10FareAmount = $legs10FareAmount;
    }

    /**
     * 区間10基本運賃を取得する<br>
     * @return string 区間10基本運賃<br>
     */
    public function getLegs10FareBasis()
    {
        return $this->legs10FareBasis;
    }

    /**
     * 区間10基本運賃を設定する<br>
     * @param string $legs10FareBasis 区間10基本運賃<br>
     */
    public function setLegs10FareBasis($legs10FareBasis)
    {
        $this->legs10FareBasis = $legs10FareBasis;
    }

    /**
     * 区間10手数料を取得する<br>
     * @return string 区間10手数料<br>
     */
    public function getLegs10FeesAmount()
    {
        return $this->legs10FeesAmount;
    }

    /**
     * 区間10手数料を設定する<br>
     * @param string $legs10FeesAmount 区間10手数料<br>
     */
    public function setLegs10FeesAmount($legs10FeesAmount)
    {
        $this->legs10FeesAmount = $legs10FeesAmount;
    }

    /**
     * 区間10フライトナンバーを取得する<br>
     * @return string 区間10フライトナンバー<br>
     */
    public function getLegs10FlightNumber()
    {
        return $this->legs10FlightNumber;
    }

    /**
     * 区間10フライトナンバーを設定する<br>
     * @param string $legs10FlightNumber 区間10フライトナンバー<br>
     */
    public function setLegs10FlightNumber($legs10FlightNumber)
    {
        $this->legs10FlightNumber = $legs10FlightNumber;
    }

    /**
     * 区間10制限を取得する<br>
     * @return string 区間10制限<br>
     */
    public function getLegs10Restrictions()
    {
        return $this->legs10Restrictions;
    }

    /**
     * 区間10制限を設定する<br>
     * @param string $legs10Restrictions 区間10制限<br>
     */
    public function setLegs10Restrictions($legs10Restrictions)
    {
        $this->legs10Restrictions = $legs10Restrictions;
    }

    /**
     * 区間10途中下車許可を取得する<br>
     * @return string 区間10途中下車許可<br>
     */
    public function getLegs10StopOverAllowed()
    {
        return $this->legs10StopOverAllowed;
    }

    /**
     * 区間10途中下車許可を設定する<br>
     * @param string $legs10StopOverAllowed 区間10途中下車許可<br>
     */
    public function setLegs10StopOverAllowed($legs10StopOverAllowed)
    {
        $this->legs10StopOverAllowed = $legs10StopOverAllowed;
    }

    /**
     * 区間10税を取得する<br>
     * @return string 区間10税<br>
     */
    public function getLegs10TaxAmount()
    {
        return $this->legs10TaxAmount;
    }

    /**
     * 区間10税を設定する<br>
     * @param string $legs10TaxAmount 区間10税<br>
     */
    public function setLegs10TaxAmount($legs10TaxAmount)
    {
        $this->legs10TaxAmount = $legs10TaxAmount;
    }

    /**
     * 区間10チケット番号を取得する<br>
     * @return string 区間10チケット番号<br>
     */
    public function getLegs10TicketNumber()
    {
        return $this->legs10TicketNumber;
    }

    /**
     * 区間10チケット番号を設定する<br>
     * @param string $legs10TicketNumber 区間10チケット番号<br>
     */
    public function setLegs10TicketNumber($legs10TicketNumber)
    {
        $this->legs10TicketNumber = $legs10TicketNumber;
    }


}
