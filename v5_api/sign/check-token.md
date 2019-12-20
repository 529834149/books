# checkToken

- URL：/sign/checktoken

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数(header头 Authorization:bearer token)：

```
{
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOjE0NDY4MDI0MjcsImV4cCI6MTQ0NjgwNjI1NSwiaWF0IjoxNDQ2ODA1NjU1LCJqdGkiOiIxNDQ2ODA1NjU1MzEwNSIsImRhdGEiOnsidWlkIjoxNDQ2ODAyNDI3fX0.qQC-Dom8_HVXGnX8ZqltGoZaSaZmX9NHFGmBE9dDjUk", 
      
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
