# 粉丝列表

- URL:/api/v1/user/subscribe/sublist/{userid}/{lasttime}

- HTTP请求方式：GET
   
- 请求参数：
 
```
{
    "userid":'47' //用户id
    "lasttime"  :2017-02-22 11:14:18  // 最后一条关注时间 默认为0
}
Header {
        "Authorization" : token  // 登录状态
        }
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "createtime": "2017-02-08 11:43:48",
            "fsCount": 2,
            "headportrait": "/poetry_test/headPic/44F683A84163B3523AFE57C2E008BC8C",
            "id": 62,
            "nickName": "博客中国因你而变",
            "poetrysCount": 16,
            "reciteCount": 16
        },
        {
            "createtime": "2017-01-13 16:00:31",
            "fsCount": 0,
            "headportrait": "/poetry_test/headPic/F457C545A9DED88F18ECEE47145A72C0",
            "id": 49,
            "nickName": "一点红",
            "poetrysCount": 0,
            "reciteCount": 1
        }
    ],
    "msg": "请求成功"
}
```

