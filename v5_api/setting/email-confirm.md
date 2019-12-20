# 验证邮箱code
无需登录 

- URL：/setting/email/confirm/xxxxxxxxxxxxxxxxxxx

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：是否必传 y

```
{
    "code":"xxxxx" //y
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    } 
    "data":{
    	"uid":xxx //用户id
    }
    
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)