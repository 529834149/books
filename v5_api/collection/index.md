# 获取专题广场列表

- URL：/collection

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
    {
      "cid": 731564544,
      "user_id": 463203336,
      "name": "关于中国扼杀女权的外媒看法",
      "summary": "当然是真的漏",
      "cover": "78/e4/6d/0_0.28118100 1453977276.jpg",
      "allow_contribute": "y",
      "need_audit": "y",
      "add_time": 1453977275,
      "color": "#cccccc",
      "collection_nums": {
        "c_article": "2",
        "c_fans": 0
      }
    },
    {
      "cid": 656141320,
      "user_id": 614198272,
      "name": "韩国男星卸妆吓死一个算一个 鹿晗李准基都是假脸",
      "summary": "刘芸与郑钧虽然是低调恋爱结婚，但郑钧已有一女而刘芸即将步入后妈的生活还是依然倍受关注和争议。歌手郑钧和华谊“小郡主”刘芸结婚，不久患有身孕的刘芸和郑钧被目击赴机场准备出国。办理完行李托运后，郑钧刘芸在家人的陪伴下走到了登记入口，分别时郑钧刘芸与家人一一拥抱告别，这时他们的情绪都有些伤感，刘芸和父母的眼睛湿润了，郑钧女儿哭个不停，扎在郑钧刘芸的怀里舍不得离开。",
      "cover": "2b/f6/c9/0_0.93340100 1453975714.jpg",
      "allow_contribute": "n",
      "need_audit": "n",
      "add_time": 1453975716,
      "color": "#cccccc",
      "collection_nums": {
        "c_article": 0,
        "c_fans": 0
      }
    },
    ]   
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)