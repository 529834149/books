# 与我相关列表

- URL：evolution.blogchina.com/api/mines

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：
-注释: 
    type : "1、direct_comment/2、fabulous_comment/3、newreply_comment/4、before_comment/recomment",
    //(1.当用户推荐的文章被评论时； 
    //2.当用户的评论被点赞时； 
    //3.当用户的评论有新回复时； 
    //4.当用户之前发表过评论的文章有了新评论时；)

```
{
    "last_time": 1490778000000, //传入当前与我相关栏目被点击的时间
    "user_id":"",//当前用户标 识
    "read_status":'y/n',//y：已读取过 n：未读取
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": [
        {
            "avatar": "image/1.jpg",
            "realname": "马云",
            "userid" ：2,
            "aid":1232323,
            "add_time": 1508132315,
            "body": "488对文章597进行了评论，非常非常不错业务写完了",
            "type": "newreply_comment"
        },
        {
            "avatar": "image/1.jpg",
            "realname": "博士",
            "userid" ：2,
            "aid":1232323,
            "add_time": 1508132315,
            "body": "488对文章597进行了评论，非常非常不错业务写完了",
            "type": "fabulous_comment"
        }
    ]
}

```
