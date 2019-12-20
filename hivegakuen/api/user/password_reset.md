# 密码重置

- URL:http://hiveapi.blogchina.com/api/setting/resetpassword

- HTTP请求方式：post

- 是否登陆：否

- 请求参数：
 
```
{ 
    "mobile":xxxxxxxxxx//必传参数， 手机号码
    "verification_code":'xxxxxx' //  验证码
    "password":xxx //密码
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200/400/4013/404/4015/4017/500, 成功/传参错误/验证码错误/用户不存在/新密码与旧密码一致/验证码过期/服务器错误 
        "message": "OK"
    } 
	
}
```