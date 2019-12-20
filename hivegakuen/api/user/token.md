# 验证token

- URL： api/token

- HTTP请求方式：get

- 请求参数：
 
```
{ 
   
    "token":xxxxxxxxxx，//必传参数
     
}

```

- 返回结果：

```

{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": {
        "status": 0,
        "expire": 0,
        "payment": "",
        "payment_time": 0
    }
}


```


````

{
    "meta": {
        "code": 4010, token 过期/错误/
        "message": "Unauthorized"
    }
}

````