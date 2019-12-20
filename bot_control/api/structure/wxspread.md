# 微信文章分享追踪

- URL：bot.blogchina.com/api/sharetrack/spread  或    bot.blogchina.com/honey/relationmap?cid=463203329

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
    "aid" : 630909441,  //必传参数,文章id
    "uid" : 745347623,  //必传参数,用户id
    "layer" : 5          //可选参数,关系层数
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
                "nid":"2",
                "avatar":"http://avatar.blogchina.com/HeadPic/63b840f87ad10e0f47ef9a6e57cc02e1",
                "nickname":"A"
            },
            {
                "nid":"3",
                "avatar":"http://avatar.blogchina.com/v5_avatar/578cacf0d44111468837104.jpg",
                "nickname":"B"
            }
        ],
        "edges" :[
            {
                "source":1,
                "target":3,
                "relation":"SPREAD1"
            },
            {
                "source":3,
                "target":5,
                "relation":"SPREAD1"
            }
        ],
        "rels" :[
            {
                "source": "文章2",
                "target": "G",
                "relation": "SPREAD2"
            },
            {
                "source": "文章2",
                "source": "F",
                "source": "SPREAD2",
             }
        ]
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)