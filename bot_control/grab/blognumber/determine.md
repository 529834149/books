# url判定是否可抓

- URL：bot.blogchina.com/bee/javareadability

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：

```json
    "from" : 'isgrab', 
    "url" : xxx, 
```

 

- 返回结果：



成功
```json
{
	"meta":
	{
		"code":200,
		"message":"OK"
	} 
} 
```


参数错误
```json
{
	"meta":
	{
		"code":400,
		"message":"Bad Request"
	},
	"data":["The uid field is required."]等
} 
```

禁止操作
```json
{
	"meta":
	{
		"code":401,//from未传   不许操作
		"message":"Unauthorized"
	} 
}

```
参数错误
```json
{
	"meta":
	{
		"code":404,//不能抓取
		"message":"Not Found"
	} 
}
```
- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)