# 修改手机号

- URL:/api/updatemobile

- HTTP请求方式：PUT

- 是否登陆：是

- 请求参数：
 
```
{
    "token":xxxxxxxxxx//必传参数,带有UID
    "mobile":xxxxxxxxxx//必传参数，修改的手机号
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    }

```

- 返回的错误结果：

````
{
"meta":{"code":400,4013,4014,4017,500//正则验证不通过//手机验证码不相符//修改的手机号不能和原有的一样  已绑定//验证码过期//服务器端错误
        "message":"Bad Request"
       }
 }
 
````