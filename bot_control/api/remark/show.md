# 某人的点评列表

- URL：bot.blogchina.com/api/remark/{uid}

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
    "first_time": 1490778000000, //first_time为下滑时第一条数据的时间,last_time为上拉时最后一条的时间
    "page": 1,  //
    "limit": 10,
    "load": "slip" //加载方式可以不传,默认为滑动加载slip，分页加载page
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
                "rid" : "58fc4768e3d11e6e276c2711",   //点评id
                "score" : 5,
                "body" : "点了一下，居然发了两遍，— —|||",
                "add_time" : NumberLong(1343842713000),
                "ip" : "119.255.34.130",
                "like" : {
                    "total" : NumberLong(0),
                    "user_ids" : [],
                    "nickname": 'xiaoB,xiao名'
                },
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
                }，
                "praise" : {
                    "num" : 100,
                    "is" : y, // y 为点赞, n 为未点赞
                },
                "status" : "publish",
                "agent" : ""
            },
            {
                "rid" : "58fc4768e3d11e6e276c2711",   //点评id
                "score" : 5,
                "body" : "点了一下，居然发了两遍，— —|||",
                "add_time" : NumberLong(1343842713000),
                "ip" : "119.255.34.130",
                "like" : {
                    "total" : NumberLong(0),
                    "user_ids" : [],
                    "nickname": 'xiaoB,xiao名'
                },
                "user" : {
                    "user_id" : NumberLong(0),
                    "nickname" : "xiao名",
                    "avatar" : ""
                },
                "article" : {
                    "c_id" : 521915393,   //文章id
                    "title" : "xxxx",
                    "describe" : "xxxxx",
                    "article_img" : "xxxx",
                    "url" : "xxxx",
                }，
                "praise" : {
                    "num" : 100,
                    "is" : y, // y 为点赞, n 为未点赞
                },
                "status" : "publish",
                "agent" : ""
            }
        ],
        "count" : 100
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)