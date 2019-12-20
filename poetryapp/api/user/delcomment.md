# 删除评论

- URL:/api/v1/user/comment/{commentid}

- HTTP请求方式：delete
   
- 请求参数：
 
```
{
   commentid:超级三  //评论id
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

