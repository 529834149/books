# 单个大咖列表

- URL:api/dern/1  大咖id

- HTTP请求方式：get
   
- 请求参数：
 
```
{
	"token" : xxx //必传
    "last_time":0//用于分页 当前页最后一条数据时间戳 第一次请求默认为0
    "limit" : 10 可不传递  默认为10
}
```

- 返回结果：

```
{
	"meta": {
		"code": 200/404 //正常 /大咖没找到
		"message": "OK"
	},
	"data": {
		"dern": {							//当last_time为0时 dern数据出现 否则不出现
			"nickname": "方兴东",
			"position": "互联网",
			"avatar": "http:\/\/images.blogchina.com\/hive_image\/4a5241e8fe19f62e79ec76d8d4ce986f.jpeg!m150",
			"did": 1075843080
		},
		"list": [{
			"_id": "5a7268a82539441a20001eea",
			"article_title": "超级月食 - 简书",
			"article_url": "https:\/\/www.jianshu.com\/p\/b8ee55034fdc",
			"introduction_second": "速度速度速度上",
			"publish_time": 1517461677
		},{
			"_id": "5a7268a82539441a20001eea",
			"article_title": "超级月食 - 简书",
			"article_url": "https:\/\/www.jianshu.com\/p\/b8ee55034fdc",
			"introduction_second": "速度速度速度上",
			"publish_time": 1517461677
		},{
			"_id": "5a7268a82539441a20001eea",
			"article_title": "超级月食 - 简书",
			"article_url": "https:\/\/www.jianshu.com\/p\/b8ee55034fdc",
			"introduction_second": "速度速度速度上",
			"publish_time": 1517461677
		}...]
	}
}

```

