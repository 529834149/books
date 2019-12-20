# 添加订单

- URL:http://hiveapi.blogchina.com/api/asynconsume/orderAdd

- HTTP请求方式：post

- 是否登陆：是

- 请求参数：
 
```
{ 	
	token:xxx 必传参数
    spbill_create_ip 客户端ip 
	nickname :用户昵称
	amount 订单金额
	time_buying 购买年限 默认1年
	result 支付状态//1-等待支付，2-支付成功，10-用户取消
	pay_channel 支付渠道 weixin 
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200, 200/500/5000 正常/服务器错误/第三方错误信息
        "message": "OK" //当为ERROR_FC 初始化第三方错误  为其他代码见第三方文档说明  微信：https://pay.weixin.qq.com/wiki/doc/api/app/app.php?chapter=9_1
    } 
    
    "data":{
    	"appid" => xxx,
		"noncestr" => xxx,
		"packages"=>"Sign=WXPay",
		"prepayid"=>xxx,
		"partnerid"=>xxx,
		"timestamp" => xxx,
		"sign" : xxx
    }
}
```