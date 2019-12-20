# 取消收藏

- URL:api/v1/user/collection/{cid}

- HTTP请求方式：delete
   
- 请求参数：
 
```
{
cid:260 // 收藏id
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

