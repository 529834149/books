# 一首诗朗诵列表

- URL:/api/v1/recite/poetryReciteList/{poetryid}/{lastid}

- HTTP请求方式：get
   
- 请求参数：
 
```
{
      "lastid": 0 // 最后一首朗诵的id  默认为0
      poetryid:131 //朗诵诗id
}
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "backgroundimg": "/poetry_bokee/common/12.jpg",
            "commentcount": 0,
            "listencount": 2,
            "poetrytitle": "宿建德江",
            "reciteid": 265,
            "recitenickname": "甜夏",
            "uploadtime": "2017-01-06 20:01:05",
            "zanCount": 1
        },
        {
            "backgroundimg": "/poetry_bokee/common/12.jpg",
            "commentcount": 0,
            "listencount": 2,
            "poetrytitle": "宿建德江",
            "reciteid": 264,
            "recitenickname": "甜夏",
            "uploadtime": "2017-01-06 19:50:51",
            "zanCount": 1
        },
        {
            "backgroundimg": "/poetry_bokee/common/2.jpg",
            "commentcount": 0,
            "listencount": 1,
            "poetrytitle": "宿建德江",
            "reciteid": 263,
            "recitenickname": "甜夏",
            "uploadtime": "2017-01-06 19:28:00",
            "zanCount": 1
        },
        {
            "backgroundimg": "/poetry_bokee/common/2.jpg",
            "commentcount": 1,
            "listencount": 16,
            "poetrytitle": "宿建德江",
            "reciteid": 260,
            "recitenickname": "狐狸猫",
            "uploadtime": "2017-01-05 20:40:26",
            "zanCount": 0
        }
    ],
    "msg": "请求成功"
}

```

