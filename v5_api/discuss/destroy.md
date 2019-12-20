# 删除评论
删除自己发布的评论

- URL：/article/123/discuss/34

- HTTP请求方式：delete

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
        "aid":"xx"
        "did":"xx",
        "user_id":"xx"
    }
    
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)


