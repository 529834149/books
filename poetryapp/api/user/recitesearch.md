# 搜索朗诵者

- URL:/api/v1/recite/search

- HTTP请求方式：get
   
- 请求参数：
 
```
{
   "userid": 0//  用户id 默认为0
   "condition": "猫"//  检索条件
   datacountid:0  //当前加载条数
}
```

- 返回结果：

```
{
	"code": 0,
	"data": [{
		"fenCount": 3,
		"reciteCount": 4,
		"reciteid": 272,
		"recitenickname": "狐狸猫",
		"reciteuserid": 47
	}],
	"msg": "请求成功"
}
```

