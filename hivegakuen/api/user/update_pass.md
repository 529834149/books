# 修改密码

- URL:/api/updatepass

- HTTP请求方式：PUT

- 是否登陆：是

- 请求参数：
 
```
{
    "token": xxxxxx//必传参数
    "password":oxxxxxxx//必传参数，修改的密码
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    }
}

```
- 返回的错误结果：

````

{
"meta":{"code":400,4015,500//正则不通过//密码不能和上次密码相同//服务器端错误
        "message":"Bad Request"
       }
 }

````