# 博客搬家



- URL：/moving

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：

```
{
    "user_id" : 3,//integer(11)
    "title": "xxx", //string
    "body": "xxx", // string
    "add_time":1498763245,//integer(10)
    "from":"ywt",//可选 in:ywt or blogchina
    
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
        "aid": 12345,
        "user_id":3
    }
    
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)


