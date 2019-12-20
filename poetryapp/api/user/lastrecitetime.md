# 最后一次朗诵时间

- URL:/api/v1/user/poetry/lastrecitetime/{poetryid}

- HTTP请求方式：PATCH
   
- 请求参数：
 
```
{
    "poetryid" ： 1 //被朗诵诗歌id
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

