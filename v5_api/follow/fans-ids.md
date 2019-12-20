# 获取用户粉丝UID列表

- URL：/follow/622586376/friends/ids

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "page":1,
    "limit": 10 
      
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data": {
        "ids":[
            1,
            2,
            3
        ]
    }  
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)