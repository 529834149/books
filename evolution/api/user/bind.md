# 用户绑定判断

- URL：evapi.blogcore.cn/api/user/isbind

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "openid" : "xxxx"    //必传参数
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,      //用户没有绑定或者没有找到用户code为404
        "message": "OK",
    }
    "data":{
        "uid": 124635463,  //用户id
        "realname": "方兴东",  //用户姓名
        "avatar": "image/ad1bb33501a3e3c6480ae8db95337d1b.jpeg",   //用户头像
        "company": "博客中国",   //公司
        "position": "CEO"       //职位
    }
}
```
