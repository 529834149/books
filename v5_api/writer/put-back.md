# 文章从回收站恢复



- URL：/writer/1234/put-back

- HTTP请求方式：put

- 是否登陆：是

- 请求参数：

```
{
    "token" : "XXXXXXXXX",
    "ip":"",  //可选
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
        "aid": ""，
        "user_id":""
    }
    
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)


