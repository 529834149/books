# 添加小红点

- URL:http://hiveapi.blogchina.com/api/clickrecord

- HTTP请求方式：post

- 是否登陆：是

- 请求参数：
 
```
{ 
	"token" : xxx //必传
    "current_did":xxxxxxxxxx//必传参数， 当前登录者id
    "did":xxx//必传参数  大咖id
    "type":'user_click' // 固定 
}
```

- 返回结果：

```
 
{
    "meta": {
        "code": 200,
        "message": "OK",
    } 
 
}
```