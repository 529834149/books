# 个人列表页--点评数据

- URL：bot.blogchina.com/api/page/remark

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
    "first_time": 1490778000000, //first_time为下滑时第一条数据的时间,last_time为上拉时最后一条的时间
    "page": 1,  //
    "limit": 10,
    "load": "slip",//加载方式可以不传,默认为滑动加载slip，分页加载page
    "uid" : 653335599   //用户id ，必传参数
    "mime" : "99000815011318"   //设备号
```

 

- 返回结果：

```json
{
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "data": {
        "items":
        [
            {
                "rid": "58fecf62f229d116e4006733",
                "url": "http://tool.chinaz.com/Tools/unixtime.aspx",
                "score" : 5,
                "body" : "点了一下，居然发了两遍，— —|||",
                "add_time": 1493093943000,
                "pretty_time" : "两天前",  //处理后的时间
                "ip": "172.16.10.212",
                "last_ip": "172.16.10.212",
                "user" : {
                    "user_id" : NumberLong(0),
                    "nickname" : "xiao名",
                    "avatar" : ""
                },
                "article" : {
                    "c_id" : 521915393,  //文章id
                    "title" : "xxxx",
                    "describe" : "xxxxx",
                    "article_img" : "xxxx",
                    "url" : "xxxx",
                    'is_suregrab' : '',
                    'is_havesource' : '',
                    'articlesource' : '',
                    'msg_from' : ''
                },
                "praise" : {
                     "num" : 100,   //该评论被点赞的总数
                     "is" : "y"  //该设备是否以对该点评点过赞  y已点过赞  n未点赞
                }
                "status" : "publish",
                "from": "app",
                "agent": "xxx",
                "updated_at": "2017-04-25 12:42:38",
                "created_at": "2017-04-25 12:24:02"
            },
            {
                "rid": "58fecf62f229d116e4006733",
                "url": "http://tool.chinaz.com/Tools/unixtime.aspx",
                "score" : 5,
                "body" : "点了一下，居然发了两遍，— —|||",
                "add_time": 1493093943000,
                "update_time": 1493093943000,
                "ip": "172.16.10.212",
                "last_ip": "172.16.10.212",
                "user" : {
                    "user_id" : NumberLong(0),
                    "nickname" : "xiao名",
                    "avatar" : ""
                },
                "article" : {
                    "c_id" : 521915393,  //文章id
                    "title" : "xxxx",
                    "describe" : "xxxxx",
                    "article_img" : "xxxx",
                    "url" : "xxxx",
                    'is_suregrab' : '',
                    'is_havesource' : '',
                    'articlesource' : '',
                    'msg_from' : ''
                }
                "status" : "publish",
                "from": "app",
                "agent": "xxx",
                "updated_at": "2017-04-25 12:42:38",
                "created_at": "2017-04-25 12:24:02"
            }
        ],
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)