# 是否关注

- URL:/api/v1/subscribe/isSubscribe/{userId}/{subUserId}

- HTTP请求方式：GET
   
- 请求参数：
 
```
{
    userId ：0 当前登录用户ID
    subUserId：0  被关注用户ID
}
```

- 返回结果：

```
{
    "code": 0,
    "data": false, //未关注
    "msg": "请求成功"
}
```

