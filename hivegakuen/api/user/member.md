# 用户会员

- URL:api/user/memberone

- HTTP请求方式：get
   
- 请求参数：

```
{
    token :'xxx' //必须参数
}
```

- 返回结果：

```
{
	"meta": {
		"code": 200/404/500,//正常/没有找到这个用户/服务器错误
		"message": "OK"
	},
	"data": { 
		"status": 0,//状态 ，/0没有订单 未下单/1已付款 会员在有效期内 正常/2会员过期 续费状态 需续费
        "exprie": 0,//过期时间
        "payment": ""//支付方式 （qq、微信weixinweb、微博weibo） 
        "'payment_time' : 0 //购买时间
	}
}

```

