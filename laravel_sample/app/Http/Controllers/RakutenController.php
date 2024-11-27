<?php

namespace App\Http\Controllers;

use App\Helpers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use Psr\Log\LoggerInterface;
use tgMdk\dto\RakutenAuthorizeRequestDto;
use tgMdk\dto\RakutenAuthorizeResponseDto;
use tgMdk\TGMDK_AuthHashUtil;
use tgMdk\TGMDK_Config;
use tgMdk\TGMDK_Logger;
use tgMdk\TGMDK_Transaction;

class RakutenController extends Controller
{

    public function index(): View
    {
        return view('rakuten/index')->with(
            [
                "amount" => "100",
                "orderId" => Helpers::generateOrderId(),
                "successUrl" => Config::get('sample_setting.rakuten.success_url'),
                "errorUrl" => Config::get('sample_setting.rakuten.error_url'),
                "pushUrl" => Config::get('sample_setting.rakuten.push_url')
            ]);
    }

    public function rakutenAuthorize(Request $request): View|Response
    {

        $logger = Log::channel('tgmdk')->getLogger();
        if ($logger instanceof LoggerInterface) {
            TGMDK_Logger::setLogger($logger);
        }

        $orderId = $request->request->get("orderId");
        $request_data = new RakutenAuthorizeRequestDto();
        $request_data->setAmount($request->request->get("amount"));
        $request_data->setOrderId($orderId);
        $request_data->setPayType($request->request->get("payType"));
        $request_data->setWithCapture($request->request->get("withCapture"));
        $request_data->setAccountingType($request->request->get("accountingType"));
        $request_data->setItemId($request->request->get("itemId"));
        $request_data->setItemName($request->request->get("itemName"));
        $request_data->setSuccessUrl($request->request->get("successUrl"));
        $request_data->setErrorUrl($request->request->get("errorUrl"));
        $request_data->setPushUrl($request->request->get("pushUrl"));

        $transaction = new TGMDK_Transaction();
        $response_data = $transaction->execute($request_data);

        if ($response_data instanceof RakutenAuthorizeResponseDto) {
            $responseContents = $response_data->getResponseContents();
            if (!empty($responseContents)) {
                header("Content-type: text/html; charset=UTF-8");
                return response($response_data->getResponseContents());
            } else {
                return view('rakuten/authorizeResult')->with([
                    'orderId' => $orderId,
                    'mstatus' => $response_data->getMstatus(),
                    'vResultCode' => $response_data->getVResultCode(),
                    'mErrMsg' => $response_data->getMerrMsg()
                ]);
            }
        }
        return view('rakuten/result')->with(['orderId' => $orderId]);

    }

    public function result(Request $request): View
    {
        $merchantCcId = null;
        $merchantPw = null;

        try {
            $conf = TGMDK_Config::getInstance();
            $array = $conf->getConnectionParameters();
            $merchantCcId = $array[TGMDK_Config::MERCHANT_CC_ID];
            $merchantPw = $array[TGMDK_Config::MERCHANT_SECRET_KEY];
        } catch (Exception $ex) {
            return view('rakuten/result')->with([
                'orderId' => null, 'mstatus' => null, 'vResultCode' => null, 'mErrMsg' => null,
                'message' => "マーチャントCCIDと認証鍵を取得できませんでした。"
            ]);
        }

        $array = $request->query();

        foreach ($array as $key => $value) {
            if ($value == null) {
                // 値がNullだとcheckAuthHash関数がfalseを返すため
                $array[$key] = "";
            }
        }
        $checkAuthHashResult = TGMDK_AuthHashUtil::checkAuthHash($array, $merchantCcId, $merchantPw, "UTF-8");

        $logger = Log::channel('tgmdk')->getLogger();
        if ($logger instanceof LoggerInterface) {
            TGMDK_Logger::setLogger($logger);
        }

        $message = null;
        if (!$checkAuthHashResult) {
            $message = "c";
        }

        $result = $request->result;
        if ($result == "SUCCESS") {
            $str_result = "完了";
        } else if ($result == "ERROR") {
            $str_result = "エラー";
        }

        return view('rakuten/result')->with([
            'str_result' => $str_result,
            'orderId' => $request->orderId,
            'mstatus' => $request->mstatus,
            'vResultCode' => $request->vResultCode,
            'message' => $message,
            'rakutenOrderId' => $request->rakutenOrderId,
            'gatewayOrderId' => $request->gatewayOrderId,
            'rakutenConsentOrderId' => $request->rakutenConsentOrderId,
            'customerId' => $request->customerId,
            'usedPoint' => $request->usedPoint,
            'cardBrand' => $request->cardBrand,
            'cardLast4' => $request->cardLast4,
            'cardInstallments' => $request->cardInstallments,
            'cardCvc' => $request->cardCvc,
            'card3ds' => $request->card3ds,
            'transactionDatetime' => $request->transactionDatetime,
            'cancelExpirationTime' => $request->cancelExpirationTime,
            'captureExpirationTime' => $request->captureExpirationTime,
            'updateExpirationTime' => $request->updateExpirationTime,
            'extendAuthExpirationTime' => $request->extendAuthExpirationTime
        ]);

    }

}
