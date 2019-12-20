# 发现

- URL:/api/v1/recite/discover/{recitetypeid}/{lastid}/{datacountid}

- HTTP请求方式：get
   
- 请求参数：
 
```
{
      "lastid": 0 //  最后一首朗诵的id  默认为0
      "recitetypeid"  0: // 1 新作、2热播、3方言、4儿童
      "datacountid"  0: // 热播诵读已加载条数  recitetypeid为 2 时需要
}
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "backgroundimg": "/poetry_bokee/common/6.jpg",
            "commentcount": 0,
            "listencount": 3,
            "poetryid": 9291,
            "poetrytitle": "一颗开花的树",
            "reciteid": 289,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2018-06-28 14:47:16",
            "url": "/poetry_test/mic/62/20170224113816.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "/poetry_bokee/common/6.jpg",
            "commentcount": 0,
            "listencount": 0,
            "poetryid": 9291,
            "poetrytitle": "一颗开花的树",
            "reciteid": 288,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2018-06-21 11:39:18",
            "url": "/poetry_test/mic/62/20170224113816.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "/poetry_bokee/common/6.jpg",
            "commentcount": 0,
            "listencount": 0,
            "poetryid": 9291,
            "poetrytitle": "一颗开花的树",
            "reciteid": 287,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2018-06-21 11:39:18",
            "url": "/poetry_test/mic/62/20170224113816.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "/poetry_bokee/common/6.jpg",
            "commentcount": 0,
            "listencount": 0,
            "poetryid": 9291,
            "poetrytitle": "一颗开花的树",
            "reciteid": 286,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2018-06-21 11:39:18",
            "url": "/poetry_test/mic/62/20170224113816.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "/poetry_bokee/common/6.jpg",
            "commentcount": 0,
            "listencount": 0,
            "poetryid": 9291,
            "poetrytitle": "一颗开花的树",
            "reciteid": 285,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2017-02-24 11:39:18",
            "url": "/poetry_test/mic/62/20170224113816.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "/poetry_bokee/common/8.jpg",
            "commentcount": 0,
            "listencount": 0,
            "poetryid": 9292,
            "poetrytitle": "再别康桥",
            "reciteid": 284,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2017-02-23 11:08:01",
            "url": "/poetry_test/mic/62/20170223110554.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "/poetry_bokee/common/7.jpg",
            "commentcount": 0,
            "listencount": 0,
            "poetryid": 9290,
            "poetrytitle": "雨巷",
            "reciteid": 283,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2017-02-23 10:56:31",
            "url": "/poetry_test/mic/62/20170223105543.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "/poetry_bokee/common/11.jpg",
            "commentcount": 0,
            "listencount": 0,
            "poetryid": 9291,
            "poetrytitle": "一颗开花的树",
            "reciteid": 282,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2017-02-23 10:55:34",
            "url": "/poetry_test/mic/62/20170223105455.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "/poetry_bokee/common/10.jpg",
            "commentcount": 0,
            "listencount": 0,
            "poetryid": 9292,
            "poetrytitle": "再别康桥",
            "reciteid": 281,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2017-02-23 10:54:50",
            "url": "/poetry_test/mic/62/20170223105416.wav",
            "zanCount": 0
        },
        {
            "backgroundimg": "/poetry_bokee/common/2.jpg",
            "commentcount": 0,
            "listencount": 0,
            "poetryid": 9286,
            "poetrytitle": "春晓",
            "reciteid": 280,
            "recitenickname": "博客中国因你而变",
            "reciteuserid": 62,
            "uploadtime": "2017-02-22 15:27:08",
            "url": "/poetry_test/mic/62/20170222152631.wav",
            "zanCount": 0
        }
    ],
    "msg": "请求成功"
}```

