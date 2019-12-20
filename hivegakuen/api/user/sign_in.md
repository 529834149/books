# 登录

- URL:http://hiveapi.blogchina.com/api/sign/in

- HTTP请求方式：post

- 是否登陆：否

- 请求参数：
 
```
{ 
    "mobile":xxxxxxxxxx//必传参数， 手机号码
    "login_mode":'password/verificationcode'//必传参数 登录方式  |in:password,verificationcode
    "password":xxx // 非必传参数  用户用手机验证码登录 则不需要密码
    "verification_code" :11111//非必传参数 只有在login_mode=verificationcode时 才必传
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200, 200/400/401/404/500/4019 正常/参数错误/没有权限 可能用户删除或被隐藏了/用户名或密码错误/服务器错误/登录频繁 3分钟内禁止登录
        "message": "OK"
    },
    "data": {
        "uid": 26,//用户id
        "nickname": "",//用户昵称
        "avatar": "",//头像
        "member": { //会员
            "status": 0,//状态 //没有订单 未下单0/已付款 会员在有效期内 正常1/会员过期 续费状态 需续费2
            "exprie": 0,//过期时间
            "payment": ""//支付方式 （qq、微信weixinweb、微博weibo） 
            "'payment_time' : 0 //购买时间
        },
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOjI2LCJleHAiOjE1MTU2NzUyOTYsImlhdCI6MTUxNTYzOTI5NiwianRpIjoiMTUxNTYzOTI5NjgxMTgiLCJkYXRhIjp7InVpZCI6MjZ9fQ.mXX7fCDuNODSMS9Fp7XZK-0iJF-E4lhUUEvLjP_Ygyk"//token
    }
}
```