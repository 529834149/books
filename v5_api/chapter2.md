# 2.设置
### 2.1 判断邮箱是否验证
- URL：/setting/email/{email}/confirm 

- HTTP请求方式：GET

- 返回结果：

```
{
    "meta":{
        "code": "200",   //结果码，必需。客户端应首先根据此项结果进行相应处理。
        "message":"success"
    },
    "data": {
        'is_valid_email'=>'N' //N->邮箱未验证  Y->邮件已验证
    }
}
```

### 2.2 发送验证邮件

- URL：/setting/email/confirm 

- HTTP请求方式：POST

- 请求参数：

```
{
    "email": "entere@126.com",   
}
```

- 返回结果：

```
{
    "meta":{
        "code": "200",   //结果码，必需。客户端应首先根据此项结果进行相应处理。
        "message":"success"
    },
    
}
```
