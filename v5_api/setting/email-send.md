# 验证邮件:发送邮件 
无需登录，可能注册后就发邮件了，400参数错误 500发送失败

- URL：/setting/email/confirm

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：是否必传 y

```
{
    "uid":xxx y
    "email":"xxxxx" y
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    } 
    
}


```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)