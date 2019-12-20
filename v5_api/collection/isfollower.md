# 获取用户关注专题列表

- URL：/isfollower 

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数(header头 Authorization:bearer token)：

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data": [
     {
      "c_id": 521923592
     },
    ]   
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)