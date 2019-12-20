# 所有大咖列表

- URL:api/dern

- HTTP请求方式：get
   
- 请求参数：
 
```
{
	"token": xxx //非必传 当token为空 is_click为y 
    "last_time":0//用于分页 当前页最后一条数据时间戳 第一次请求默认为0
    "limit" : 10 可不传递  默认为10
}
```

- 返回结果：

```
{
	"meta": {
		"code": 200/404,//成功/暂无大咖信息
		"message": "OK"
	},
	"data": [{
		"nickname": "方兴东",
		"position": "互联网",
		"avatar": "http:\/\/images.blogchina.com\/hive_image\/4a5241e8fe19f62e79ec76d8d4ce986f.jpeg",
		"did": 1075843080,//大咖id
		"sort_time" : xxx //排序时间
		"is_click": "n" //是否访问过大咖  n 请求 添加小红点接口 还未访问 /y 已访问过或是未登录用户（前端需判定token 是否添加小红点记录）
	},{
		"nickname": "方兴东",
		"position": "互联网",
		"avatar": "http:\/\/images.blogchina.com\/hive_image\/4a5241e8fe19f62e79ec76d8d4ce986f.jpeg",
		"did": 1075843080,
		"sort_time" : xxx //排序时间
		"is_click": "n" 
	},{
		"nickname": "方兴东",
		"position": "互联网",
		"avatar": "http:\/\/images.blogchina.com\/hive_image\/4a5241e8fe19f62e79ec76d8d4ce986f.jpeg",
		"did": 1075843080,
		"sort_time" : xxx //排序时间
		"is_click": "n" 
	}...
	]
}

```

