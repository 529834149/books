# 修改密码

- URL：/password/update

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数(header头 Authorization:bearer token)：参数是否必传 y

```
{
    "token":"xxxxxx",//y
    "password":"123456", //y
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

