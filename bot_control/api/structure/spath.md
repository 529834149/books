# 获取最短路径

- URL：bot.blogchina.com/api/structure/spath

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
    "source": "唐启胤",  //必传参数
    "target": "好神奇"   //必传参数
```

 

- 返回结果：

```json
{
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "data": {
        "nodes" : [
            {
                "nid": "71485",
                "uid": 67823,
                "name": "hfhuobing",
                "nickname": "博弈弈",
                "avatar": "http://avatar.blogchina.com/HeadPic/63b840f87ad10e0f47ef9a6e57cc02e1"
            },
            {
                "nid": "73046",
                "uid": 394335,
                "name": "haoshenqi",
                "nickname": "好神奇",
                "avatar": "http://avatar.blogchina.com/v5_avatar/578cacf0d44111468837104.jpg"
            },
        ],
        "edges" :[
            {
                "source": 0,
                "target": 1,
                "relation": "HAS_FANS"
            },
            {
                "source": 1,
                "target": 2,
                "relation": "HAS_FANS"
            }
        ]
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)