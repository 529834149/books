# 反馈

- URL:api/v1/user/feedback

- HTTP请求方式：POST
   
- 请求参数：
 
```
{
    content:反馈的啥啊  //反馈内容
    nickname:leileilei  // 反馈者昵称
    contact:123456789  //联系方式
    userid:24           //用户id  
    device:86587202   //设备号   
    model:HUAWEI G750-T01 //手机型号
    releasenum:4.4.4        //系统版本号
    phonetype:1         //系统类别 1 android 2 ios
}

Header {
        "Authorization" : token  // 登录状态
        }
```

- 返回结果：

```
{
    "code": 0,
    "data": 1,
    "msg": "请求成功"
}

```

