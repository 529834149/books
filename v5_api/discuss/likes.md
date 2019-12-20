# 喜欢

- URL：/discuss/34/likes

- HTTP请求方式：put

- 是否登陆：是

- 请求参数：

```
{
    "ip" : "XXXXXXXXX",
    "token": "XXXXXXX"
    
    
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,   //结果码，必需。客户端应首先根据此项结果进行相应处理。
        "message":"OK"
    },
    "data": {
        "did":"xx",
        "user_id":"xx"
    }
    
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)


