# 消息通知

- URL:api/v1/user/psersonMessage/{lastid}

- HTTP请求方式：get
   
- 请求参数：
 
```
{
   lastid:283 //最后一条消息id
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
            "content": "订阅了您",
            "createtime": "2018-07-02 14:13:01",
            "messageid": 384,
            "pushnickname": "青椒",
            "pushuserid": 69,
            "state": 1,
            "type": 3
        },
        {
            "content": "订阅了您",
            "createtime": "2017-02-22 11:14:56",
            "messageid": 383,
            "pushnickname": "青椒",
            "pushuserid": 69,
            "state": 1,
            "type": 3
        },
        {
            "content": "赞了您的诗歌咏鹅",
            "createtime": "2017-01-11 15:27:11",
            "messageid": 377,
            "pushnickname": "海杨",
            "pushuserid": 63,
            "state": 1,
            "type": 1
        }
    ],
    "msg": "请求成功"
}
```

