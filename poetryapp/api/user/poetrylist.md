# 诗歌列表

- URL:/api/v1/poetry/poetrys/{userid}/{lastid}

- HTTP请求方式：get
   
- 请求参数：
 
```
{
    "lastid": 0 // 最后一首诗的id  默认为0
    "userid"  0: //用户id
}
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "collectCount": 0,
            "commentcount": 0,
            "createtime": "2018-06-14",
            "poetryid": 9293,
            "recitecount": 0,
            "title": "再别康桥"
        },
        {
            "collectCount": 1,
            "commentcount": 0,
            "createtime": "2017-02-23",
            "poetryid": 9292,
            "recitecount": 11,
            "title": "再别康桥"
        },
        {
            "collectCount": 2,
            "commentcount": 0,
            "createtime": "2017-02-23",
            "poetryid": 9291,
            "recitecount": 7,
            "title": "一颗开花的树"
        },
        {
            "collectCount": 0,
            "commentcount": 0,
            "createtime": "2017-02-23",
            "poetryid": 9290,
            "recitecount": 1,
            "title": "雨巷"
        },
        {
            "collectCount": 0,
            "commentcount": 0,
            "createtime": "2017-02-22",
            "poetryid": 9288,
            "recitecount": 0,
            "title": "我这是"
        },
        {
            "collectCount": 0,
            "commentcount": 0,
            "createtime": "2017-01-31",
            "poetryid": 9286,
            "recitecount": 1,
            "title": "春晓"
        },
        {
            "collectCount": 0,
            "commentcount": 0,
            "createtime": "2017-02-14",
            "poetryid": 9285,
            "recitecount": 1,
            "title": "初心"
        },
        {
            "collectCount": 0,
            "commentcount": 0,
            "createtime": "2017-02-08",
            "poetryid": 9283,
            "recitecount": 0,
            "title": "还好"
        },
        {
            "collectCount": 0,
            "commentcount": 0,
            "createtime": "2017-02-07",
            "poetryid": 9282,
            "recitecount": 0,
            "title": "就叫"
        },
        {
            "collectCount": 0,
            "commentcount": 0,
            "createtime": "2017-02-07",
            "poetryid": 9279,
            "recitecount": 0,
            "title": "ha"
        }
    ],
    "msg": "请求成功"
}```

