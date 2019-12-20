# 添加收藏

- URL:api/v1/user/collection

- HTTP请求方式：post
   
- 请求参数：
 
```
{
objectid:260 // 添加诗歌或朗诵id
type:1   //1为诗歌  2为朗诵
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

