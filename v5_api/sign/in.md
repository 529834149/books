# 登录

- URL：/sign/in 

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：

```
{
    "accout": "tangtangtang", 
    "password": "123456",  
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,   //结果码，必需。客户端应首先根据此项结果进行相应处理。
        "message":"OK"
    },
    "data": {
        "user_bind": [
        "blogchina",
        "weibo",
    ],
    "uid": 59200265,
    "name": "tangtangtang",
    "nickname": "糖糖糖",
    "avatar": "http://avatar.blogchina.com/v5_avatar/5799660a945181469670922.jpg",
    "group_id": 200,
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOjU5MjAwMjY1LCJleHAiOjE0ODgyNzM5NDMsImlhdCI6MTQ4Njk3Nzk0MywianRpIjoiMTQ4Njk3Nzk0MzQ2MjYiLCJkYXRhIjp7InVpZCI6NTkyMDAyNjV9fQ.VDVxXKwaZkhZDSiXPdlk0s6AkP8lzAQzThLNnEUY3zg"
  } 
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)


