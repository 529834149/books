# 登录

- URL:http://hiveapi.blogchina.com/api/setting/platformBind

- HTTP请求方式：post

- 是否登陆：是

- 请求参数：
 
```
{ 
	"reg_from" :xxxxxxxxxx//必传， //来源平台 weibo微博,weixinweb微信  
	"openid" :xxxxx //必传
    "token" :xxxxxxxxxx//必传，  
    "openid" :xxx 	必传
    "nickname" : xxx 非必传
    "avatar" :xxx 非必传
    "intro" : xxx 非必传 
    "unionid":xxx 平台为weixinweb时 字段unionid必传 
}
```

- 返回结果：

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