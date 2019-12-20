# 查询交易订单
    
  - url：asynconsume/orderselect 

  - HTTP请求方式：post
  
  - 是否登陆：是
  
  - 请求参数：
  
  ````
  
  {
  "token":xxxxxxxx//必传参数，用户ID
  "last_time" :1501125125//first_time
  }
  
  ````
  
  
- 返回结果：


```

{
	"meta": {
		"code": 200,
		"message": "OK"
	},
	"data": {
		"list": [{
			"order_id": "201802011511320001",
			"uid": 45,
			"amount": "199",
			"pay_channel": "weixin",
			"time_buying": 1,
			"expire": "1549005104",
			"result": 2,
			"is_del": "n",
			"payment_time": "1516783125",
			"sort_time": 1516783706
		}],
		"total": 10
	}
}
    
```