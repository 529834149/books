# 单个应用列表

- URL： sr.blogcore.cn/api/column/专栏ID

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
   "token"  : 5674334,   //可选参数,如果已登录就将token传过来
   "last_time" : 1341643144521  //上拉加载需要最后一条数据时间last_time
```

 

- 返回结果：

```
   {
	"meta": {
		"code": "200",
		"message": "OK"
	},
	"data": {
		"desc": {
			"column_name": "29的专栏",
			"id": 98,
			"column_desc": "asd",
			"is_follow": "n",
			"image": ""
		},
		"list": [{
			"title": "房宁：未来改革开放，我们要关注这三个问题",
			"summary": "asdasdasdsa",
			"covers": "http:\/\/images.blogchina.com\/\/read_smart\/5c1b39228d2851545287970.jpg!s150",
			"special_id": 98,
			"add_time": 1545287970,
			"template_style": 1
		}, {
			"title": "王勇：通用电气用100年做到世界第一，沦落到存亡边缘只花了10年",
			"summary": "wdfgf",
			"covers": "",
			"special_id": 98,
			"add_time": 1545287752,
			"template_style": 1
		}]
	}
}


```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)