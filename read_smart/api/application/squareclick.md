# 首页应用平台点击动作

- URL：sr.blogchina.com/api/square/squareclick

- HTTP请求方式：post

- 是否登陆：是/否

- 请求参数：

```
	'pid':xxx,	//平台id 必传参数
    "deviceid" : "xxxx",  //设备号   必传参数 
    'token':xxx,//非必传参数
``` 
 

- 返回结果：
 

```json

    {
        "meta" :{
            "code" : 200/400/401/500,//成功/参数错误/token失效/服务器错误
            "message" : "xxx",
        },
         
    } 
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)