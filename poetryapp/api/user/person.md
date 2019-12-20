# 用户信息

- URL:/api/v1/user/person //登录状态获取用户信息
      /api/v1/person/{uid}      //未登录获取用户信息

- HTTP请求方式：get
   
- 请求参数：
 
```
{
    "uid":'49'//必传参数 用户id
}

Header {
        "Authorization" : token  // 登录状态
        }
```

- 返回结果：

```

{
    "code":0,
    "msg":"请求成功",
    "data":{"birthplace":"",  //出生地
         "followCount":0,     // 粉丝数量
          "headportrait":"",  // 头像
          "nickname":"一点红", //昵称
          "poetrysCount":0,   // 诗歌数量
          "reciteCount":1,    //朗诵数量
          "selfintroduction":"", //个人简介
          "subCount": 1,    //订阅数
          "userid":49}          // 用户id
}


```

