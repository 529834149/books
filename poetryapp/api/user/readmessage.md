# 阅读通知

- URL:/api/v1/user/readMessage/{messageid}

- HTTP请求方式：PATCH
   
- 请求参数：
 
```
{
    messageid:384 //通知id
}
Header {
        "Authorization" : token  // 登录状态
        }
```

- 返回结果：

```
{
    "code": 0,
    "msg": "请求成功"
}
```

