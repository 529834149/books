# 找回密码:重置密码

- URL：/password/reset

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：是否必传 y

```
{ 
    "code":"xxx",//y
    "password":"xxxxxx",//y
    "password_confirmation" =>"xxxxxx",//y
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    } 
    
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)

