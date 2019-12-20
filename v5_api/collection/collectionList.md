# 获取文章详情页的专题列表

- URL：/collectionlist 

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数(header头 Authorization:bearer token)：

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
    {
      "cid": 731564544,
      "user_id": 463203336,
      "name": "关于中国扼杀女权的外媒看法",
      "cover": "78/e4/6d/0_0.28118100 1453977276.jpg",
      "nickname": "小冬瓜"
    },
    {
      "cid": 639364104,
      "user_id": 463203336,
      "name": "小伙子 你够可以的呀",
      "cover": "78/e4/6d/0_0.68429800 1453973984.jpg",
      "nickname": "小冬瓜"
    },
    ]   
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)