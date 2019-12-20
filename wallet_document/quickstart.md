# server
php响应ping++ 

```php

<?php
    public function getPingview(Request $request){ 
		$code = $request->input('code','');  
		if(!isset($code) || empty($code) || $code == NULL){ 
			$url = 'http://wallet.blogchina.com/demo/pingview'; //微信回调地址以及授权目录
			$code_url = \Pingpp\WxpubOAUth::createOauthUrlForCode('微信公众平台的app_id',$url,false);   //响应微信网页授权 获取code 
			header("Location:".$code_url); die;
		}   
		return view('default.zhifu.pingview',compact('code'));//因为在微信网页授权获取的的code是可变的  所以可以分配到支付页面
	} 
?>
关于 open_id（微信公众号授权用户唯一标识）先跳转到微信获取授权 code，地址由下方代码生成，$app_id 是你的微信公众号应用唯一标识，$redirect_url 是用户确认授权后跳转的地址，用来接收 code。


public function postCharge(Request $request){   
	$app_id = '微信公众平台的app_id';
	$app_secret = "微信公众平台上的app_secret";   
	\Pingpp\Pingpp::setApiKey('ping++平台上的apikey'); //可操作是test还是live 
	
	$code = $request->input('code');   
	$open_id = \Pingpp\WxpubOAUth::getOpenid($app_id, $app_secret, $code);  
	$data = \Pingpp\Charge::create(array(
		'order_no'  => date('YmdHis') . (microtime(true) % 1) * 1000 . mt_rand(0, 9999).uniqid(),//商户订单号，适配每个渠道对此参数的要求，必须在商户系统内唯一
		'amount'    => $request->input('amount',8),//订单总金额, 人民币单位：分（如订单总金额为 1 元，此处请填 100）
		'app'       => array('id' => 'ping++平台上的app_id'),//支付使用的  app 对象的  id
		'channel'   => $request->input('channel'),//支付使用的第三方支付渠道 https://www.pingxx.com/api#支付渠道属性值
		'currency'  => 'cny',//三位 ISO 货币代码，目前仅支持人民币  cny 。
		'client_ip' => \Request::ip(),//发起支付请求客户端的 IPv4 地址，如: 127.0.0.1。
		'subject'   => $request->input('subject','subject'),//商品的标题，该参数最长为 32 个 Unicode 字符，
		'body'      => $request->input('body','body'),//商品的描述信息，该参数最长为 128 个 Unicode 字符
		'extra'		=> [
			'limit_pay'=>'no_credit', 
			'open_id' => $open_id, 
		])//特定渠道发起交易时需要的额外参数，以及部分渠道支付成功返回的额外参数
	);
	  
	return $data;
}



```


### Webhooks	
```php
//回调地址在ping++平台上设置 操作信息https://www.pingxx.com/docs/webhooks/webhooks
public function postPingresult(Request $request){
	 	\Pingpp\Pingpp::setApiKey('ping++平台上的apikey');//可操作是test还是live 
	 	$raw_data = file_get_contents('php://input');//php://input可以读取没有处理过的POST数据。
	 	$event = json_decode($raw_data, true);
		if ($event['type'] == 'charge.succeeded') {
		    $charge = $event['data']['object'];
		    $data = \Pingpp\Charge::retrieve($charge['id']);//单条查询  可根据业务自行处理
		    $r = \Pingpp\Charge::all(array('limit' => 5, 'app' => array('id' => $charge['app'])));//多个查询 可根据业务自行处理
		    \Log::info($r);
		    
		    // ...
		    http_response_code(200); // PHP 5.4 or greater
		} elseif ($event['type'] == 'refund.succeeded') {
		    $refund = $event['data']['object'];
		    // ...
		    http_response_code(200); // PHP 5.4 or greater
		} else {
		    /**
		     * 其它类型 ...
		     * - summary.daily.available
		     * - summary.weekly.available
		     * - summary.monthly.available
		     * - transfer.succeeded
		     * - red_envelope.sent
		     * - red_envelope.received
		     * ...
		     */
		    http_response_code(200);
		
		    // 异常时返回非 2xx 的返回码
		    // http_response_code(400);
		}
	 	 
	 }




```

# client
```bash
<script src="。/js/jquery.min.js"></script>
<script src="。/js/pingpp.js" type="text/javascript"></script> //引入client端的sdk包上的pingpp.js 
function wap_pay(channel) { 
	var allowajax = true;  
	var amount = $.trim($('#amount').val()); 
	if(allowajax){
		allowajax = false;  
	    $.ajax({
			type:'post',
			url:'http://wallet.blogchina.com/demo/charge',  
			dataType:"json", 
			data:{amount:amount,channel:channel,subject:'测试标题',body:'测试摘要',code:$.trim($('#code').val())},
			success:function(msg){   
				 pingpp.createPayment(msg, function(result, err) { 		//调起微信支付控件 进行支付
					  if (result=="success") {
					    // payment succeeded支付成功后的回调函数
					    window.location.href='http://wallet.blogchina.com/demo/pingview'+"?id="+10000*Math.random();//成功跳转到指定地址
					  } else { 
					  	window.location.href='http://wallet.blogchina.com/demo/pingview'+"?id="+10000*Math.random();//失败或关闭了支付控件 做对应处理
					    console.log(result+" "+err.msg+" "+err.extra);
					  }
				});
			},
			error:function(){
		 		console.log('请求是否关注信息失败'); 
		 	}, 
		}); 
	}
}    
```