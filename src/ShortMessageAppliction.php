<?php
/**
 * Created by PhpStorm.
 * User: zsx
 * Date: 2019-12-13
 * Time: 19:23
 */

namespace Shuzu\ShortMessage;


use Shuzu\Common\exception\ShuzuApplicationException;
use Shuzu\Common\ShuzuCommonApplication;
use Shuzu\ShortMessage\Request\SendMessageRequest;
use Shuzu\ShortMessage\Response\SendMessageResponse;

class ShortMessageAppliction extends ShuzuCommonApplication
{
    private $smsUrl;

    public function __construct($appid, $appSecret, $url,$smsUrl)
    {
        parent::__construct($appid, $appSecret, $url);
        $this->smsUrl = $smsUrl;
    }


    public function sendMessage(SendMessageRequest $sendMessageRequest){
        $fullUrl = rtrim($this->smsUrl,'/') . "/sms-center/sms/sendSmsV2";

        $json_resp = $this->doPostJson($fullUrl,$sendMessageRequest);

        if($json_resp['code'] !== '00000000'){
            throw new ShuzuApplicationException($json_resp['description']);
        }

        $resp = new SendMessageResponse();
        $resp->setTaskId($json_resp['data']['taskId']);

        return $resp;
    }




}