# 实时抓取URL

- URL：bot.blogchina.com/bee/javareadability

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：

```
    "uid" : xxx,
    "nickname" : "xxx",
    "from" : "japp",
    "url" : "xxx", 
```

 

- 返回结果：

```json
{
	"meta":
		{
			"code":200,
			"message":"OK"
		},
	"data":513468929
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)