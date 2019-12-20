# 发送通知

- URL:/api/v1/user/push

- HTTP请求方式：POST
   
- 请求参数：
 
```
{
content:去请求 //  推送内容
receiver:77 //接收消息 用户id
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

