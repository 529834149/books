# 获取专题下面的关注人列表

- URL：/collection/731564544/user

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "page":1
    "limit":10
}

```


- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data": [
     "c_fans": [
      {
        "uid": 471591944,
        "nickname": "Alice瞬间",
        "avatar": "http://tp2.sinaimg.cn/3052795165/180/40072726051/0",
        "add_time": "2016-01-28 18:17:07"
      },
      {
        "uid": 488369160,
        "nickname": "小茹",
        "avatar": "http://wx.qlogo.cn/mmopen/QVdLz03LNgv76LGJqzF4UIAgfv9m4XzFN30bica0ib02kAKtPJhtD1LiciazKHYrRPIoxiaGWzMUDricSUJfiahmric7BOibJSMicqdqTr/0",
        "add_time": "2016-01-28 16:56:35"
      }
    ]
    ]   
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)