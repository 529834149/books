# 用户名片

- URL：evapi.blogcore.cn/api/user/card

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "uid" : "xxxx"    //必传参数
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message": "OK"
    }
    "data":{
        "realname" :"小高高",  //用户名
        "company" : "博客中国",  //公司
        "position" : "产品经理",  //职位
        "avatar": "http://avatar.blogchina.com/HeadPic/df180ec376b3d26b1340607288428d28",  //头像
        "reward_number" : 2546  //点赞数
    }
    
}
```