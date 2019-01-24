<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/24
 * Time: 15:46
 */
require_once ('../vendor/autoload.php');

use glj\aliyun\sms\App;

//开发者KEY 密钥
$accessKeyId            = '';
$accessKeySecret        = '';

$phone                  = '';   //手机号
$temp_id                = '';   //模板ID
$sign                   = '';   //签名
$param                  = [
    'code'      => '',          //验证码
    'product'   => ''           //事件说明
];

$param                  = json_encode($param);

$client                 = new App($accessKeyId, $accessKeySecret);

$response   = $client->sendSms($phone, $sign, $temp_id, $param);
echo "发送短信(sendSms)接口返回的结果:\n";
print_r($response);

