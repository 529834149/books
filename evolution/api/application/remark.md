# 发点评

- URL：evapi.blogcore.cn/api/recomment/createrecomment

- HTTP请求方式：POST

- 是否登陆：是 就是当前登录微信用户在我平台产生的uid

- 请求参数：

```
{
    "uid" : 216542,   //必传参数
    "aid" : 245     //文章id
    "content": "玩性价比，自然是不能与高品牌溢价的苹果相提并论"   //点评内容
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data" :111 点评id
}
```