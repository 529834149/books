# 邀请码绑定用户

- URL：evapi.blogcore.cn/api/user/binduser

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "openid" : "xxxx",    //必传参数
    "invitecode": "PGUvBzYMosO9CWa"    //必传参数
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,    //200表示绑定成功
        "message": "OK" 
    },
    "data": {
        "uid": 488303616   //绑定成功返回用户uid，绑定失败返回用户id为0
    }
}
```