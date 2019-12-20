# 精选

- URL:/api/v1/recommendation/getRecommendations/{uid}

- HTTP请求方式：get
   
- 请求参数：
 
```
{
    "uid":'49'// 用户id
}
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "author": "徐志摩",
            "backgroundimg": "/poetry_bokee/common/8.jpg",
            "listencount": 0,
            "poetrytitle": "再别康桥",
            "reciteid": 284,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62
        },
        {
            "author": "骆宾王",
            "backgroundimg": "/poetry_bokee/common/11.jpg",
            "listencount": 10,
            "poetrytitle": "咏鹅",
            "reciteid": 261,
            "recitenickname": "狐狸猫",
            "reciteuserid": 47
        },
        {
            "author": "孟浩然",
            "backgroundimg": "/poetry_bokee/common/2.jpg",
            "listencount": 16,
            "poetrytitle": "宿建德江",
            "reciteid": 260,
            "recitenickname": "狐狸猫",
            "reciteuserid": 47
        },
        {
            "author": "李白",
            "backgroundimg": "/poetry_bokee/common/3.jpg",
            "listencount": 11,
            "poetrytitle": "夜宿山寺",
            "reciteid": 259,
            "recitenickname": "狐狸猫",
            "reciteuserid": 47
        }
    ],
    "msg": "请求成功"
}
```

