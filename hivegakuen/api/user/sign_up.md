# 注册与第三方注册登录

- URL:http://hiveapi.blogchina.com/api/sign/up

- HTTP请求方式：post

- 是否登陆：否

- 请求参数：
 
```
{ 
    "reg_from":xxxxxxxxxx//必传参数， //来源平台     hive本站,weibo微博,weixinweb微信
    a,如果reg_from为hive  
    a-1 mobile : xxxxx	必传
    a-2 password : xxx	必传 
    a-3 verification_code : xxx	手机验证码必传 
    
    
    b,如果reg_from为weibo或weixinweb 
    b-1 openid:xxx 	必传
    b-2 nickname : xxx 非必传
    b-3 avatar :xxx 非必传
    b-4 intro : xxx 非必传
    b-5 ip : xxx 非必传
    b-6 unionid:xxx 平台为weixinweb时 字段unionid必传
     
}
```

- 返回结果：两种状态 

- 1，如果为本站注册
```
{
    "meta": {
        "code": 200, 200/400/4016/4017/500 正常/参数错误/没有权限 可能用户删除或被隐藏了/验证码过期/服务器错误
        "message": "OK"
    } 
}
```


- 2，第三方注册登录
```
{
    "meta": {
        "code": 200, 200/400/401/500 正常/参数错误/没有权限 可能用户删除或被隐藏了/服务器错误
        "message": "OK"
    },
    "data": {
        "uid": 26,//用户id
        "nickname": "",//用户昵称
        "avatar": "",//头像
        "member": { //会员
            "status": 0,//状态 //未付款0/付款1/续费状态2
            "exprie": 0,//过期时间
            "payment": ""//支付方式 （qq、微信weixinweb、微博weibo） 
        },
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOjI2LCJleHAiOjE1MTU2NzUyOTYsImlhdCI6MTUxNTYzOTI5NiwianRpIjoiMTUxNTYzOTI5NjgxMTgiLCJkYXRhIjp7InVpZCI6MjZ9fQ.mXX7fCDuNODSMS9Fp7XZK-0iJF-E4lhUUEvLjP_Ygyk"//token
    }
}
```