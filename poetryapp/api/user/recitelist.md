# 朗诵列表

- URL:/api/v1/recite/recites/{reciteuserid}/{lastid}

- HTTP请求方式：get
   
- 请求参数：
 
```
{
      "lastid": 0 // 最后一首朗诵的id  默认为0
      "reciteuserid"  0: 朗诵者id
}
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "backgroundimg": "http://poetryapp.blogchina.com/poetry_bokee/common/11.jpg",
            "collectionCount": 0,
            "isSubscribe": 0,
            "listencount": 10,
            "poetrytitle": "咏鹅",
            "reciteid": 261,
            "uploadtime": "2017-01-05",
            "url": "/poetry_test/mic/47/20170105204103.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "http://poetryapp.blogchina.com/poetry_bokee/common/2.jpg",
            "collectionCount": 0,
            "isSubscribe": 0,
            "listencount": 16,
            "poetrytitle": "宿建德江",
            "reciteid": 260,
            "uploadtime": "2017-01-05",
            "url": "/poetry_test/mic/47/20170105203936.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "http://poetryapp.blogchina.com/poetry_bokee/common/3.jpg",
            "collectionCount": 0,
            "isSubscribe": 0,
            "listencount": 11,
            "poetrytitle": "夜宿山寺",
            "reciteid": 259,
            "uploadtime": "2017-01-05",
            "url": "/poetry_test/mic/47/20170105203702.wav",
            "zanCount": 1
        }
    ],
    "msg": "请求成功"
}```

