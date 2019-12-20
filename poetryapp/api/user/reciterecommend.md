# 朗诵推荐（搜索下）

- URL:/api/v1/recite/recommend/{userId}

- HTTP请求方式：get
    
- 请求参数：    
```
{
    "userId"  0: //用户id
}
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "collectionCount": 0,
            "fenCount": 2,
            "headportrait": "http://poetryapp.blogchina.com/poetry_test/headPic/44F683A84163B3523AFE57C2E008BC8C",
            "isSubscribe": 0,
            "reciteCount": 1,
            "reciteid": 290,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62
        },
        {
            "collectionCount": 0,
            "fenCount": 0,
            "headportrait": "http://poetryapp.blogchina.com/poetry_test/headPic/28DD2C7955CE926456240B2FF0100BDE",
            "isSubscribe": 0,
            "reciteCount": 9,
            "reciteid": 293,
            "recitenickname": "糖糖糖",
            "reciteuserid": 77
        }
    ],
    "msg": "请求成功"
}

```

