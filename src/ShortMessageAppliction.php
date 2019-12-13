<?php
/**
 * Created by PhpStorm.
 * User: zsx
 * Date: 2019-12-13
 * Time: 19:23
 */

namespace Shuzu\ShortMessage;


use GuzzleHttp\Client;
use Shuzu\Common\exception\ShuzuApplicationException;
use Shuzu\Common\ShuzuCommonApplication;
use Shuzu\ShortMessage\request\SendMessageRequest;
use Shuzu\ShortMessage\response\SendMessageResponse;

class ShortMessageAppliction extends ShuzuCommonApplication
{
    private $smsUrl;
    private $token;

    public function __construct($appid, $appSecret, $url,$smsUrl)
    {
        parent::__construct($appid, $appSecret, $url);
        $this->smsUrl = $smsUrl;
    }




    /**
     * @param mixed $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    public function sendMessage(SendMessageRequest $sendMessageRequest){
        $fullUrl = rtrim($this->smsUrl,'/') . "/sms-center/sms/sendSmsV2";

        $client = new Client([
            'timeout' => 10
        ]);

        $body = json_encode($sendMessageRequest);
        $time = time();
        $response = $client->post($fullUrl, [
            'headers' => [
                'Content-Type' => 'application/json',
                'Date' => $time,
                'AppId' => $this->getAppid(),
                'Content-MD5' => base64_encode(md5($body.$time.$this->token))
            ],
            'body' => $body
        ]);

        if($response->getStatusCode() != '200'){
            throw new ShuzuApplicationException("请求数族短信平台失败");
        }

        $json_resp = json_decode($response->getBody(),true);
        if($json_resp == null){
            throw new ShuzuApplicationException("返回数据异常");
        }

        if($json_resp['code'] !== '00000000'){
            throw new ShuzuApplicationException($json_resp['description']);
        }

        $resp = new SendMessageResponse();
        $resp->setTaskId($json_resp['data']['taskId']);

        return $resp;
    }




}