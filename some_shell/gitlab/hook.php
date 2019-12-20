<?php
// 为了安全，不让其它有向此接口提交数据使用
$valid_token = 'v5docblogchina';
$valid_ip = array('127.0.0.1','219.238.250.40');
$client_token = $_GET['token'];
$client_ip = $_SERVER['REMOTE_ADDR'];
$fs = fopen('./logs/hook.log', 'a');
fwrite($fs, 'Request on ['.date("Y-m-d H:i:s").'] from ['.$client_ip.']'.PHP_EOL);
// 认证 token
if ($client_token !== $valid_token)
{
    echo "error 10001";
    fwrite($fs, "Invalid token [{$client_token}]".PHP_EOL);
    exit(0);
}
// 认证 ip
if ( ! in_array($client_ip, $valid_ip))
{
    echo "error 10002";
    fwrite($fs, "Invalid ip [{$client_ip}]".PHP_EOL);
    //exit(0);
}
$json = file_get_contents('php://input');
$data = json_decode($json, true);
//fwrite($fs, 'Data: '.print_r($data, true).PHP_EOL);
fwrite($fs, 'Data: '.$data['user_name'].'提交信息：'.$data['commits'][0]['message'].'，提交时间：'.$data['commits'][0]['timestamp'].PHP_EOL);

fwrite($fs, '======================================================================='.PHP_EOL);
$fs and fclose($fs);
// 執行上面所述的 update.sh
exec("./gitpull.sh");