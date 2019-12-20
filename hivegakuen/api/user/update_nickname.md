# 修改昵称

- URL:/api/updatent

- HTTP请求方式：PUT

- 是否登陆：是

- 请求参数：
 
```
{
    "token":xxxxxxxxxx，//必传参数
    "nickname":xxxxxxx//必传参数，修改的昵称，
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
"meta":{"code":400,4015,500//参数错误//正则验证不通过//修改昵称不能上次的一样//服务器端错误
        "message":"Bad Request"
       }
 }
 
````

