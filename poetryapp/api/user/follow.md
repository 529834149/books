# 关注

- URL:/api/v1/user/follow/{isfollow}/{subuserid}

- HTTP请求方式：PATCH
   
- 请求参数：
 
```
{
    "isFollow":'y' //y为订阅 n为取消订阅
    "subuserid" ： 1 //被订阅人id
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

