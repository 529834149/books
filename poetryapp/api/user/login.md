# 登录

- URL:/api/v1/login

- HTTP请求方式：post
   
- 请求参数：
 
```
{
     authid: 59200265// 第三方授权ID                                第三方登录传递
     gender: 0   // 性别 0：不详 1：男 2：女 3：儿童                第三方登录传递
     unionid:oialWt2pf5fpAgSsL0yTDnXps_b4   // 微信unionid          微信登录传递
     username:reginah  //  用户名   第三方登录不需要传              博客中国登录传递
     password:     // 密码   第三方登录不需要传                     博客中国登录传递
     nickname: 一点红 // 昵称                                       第三方登录传递
     avatar :       //头像
     registerfrom:  3 // 注册来源 1：微信 2：微博  3：博客中国      都要传递
}
```

- 返回结果：

`````

{
    "code": 0,
    "data": {
        "headportrait":"",
        "nickname": "屋里都是小虫",
        "selfintroduction": "",
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1aWQiOiI1MSIsImFpZCI6IjU3NjY1MDI1NjEiLCJleHAiOjE1MzMwMDQwNTQsIm5iZiI6MTUzMjM5OTI1NH0.tLmXzBOo643yal7m2rqrVDD08UeVbNxnPrU7lcQsW_E",
        "userid": 51,
        "telephone":13022406361
    },
    "msg": "请求成功"
}

```

