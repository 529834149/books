#点评详情接口

- URL：/api/reviews/details

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "article_id" ："xxxx",//当前文章id //测试文章id :630901248  //
    "user_id" :2,//测试数据:article_id=597355520&user_id=2
    "rid" : "1245" //新增点评id
}
```

- 返回结果：
```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": {
        "body": "这条评论是星期一发的。",
        "addtime": 1507882012,
        "point_num": 0,//点赞数
        "common_num": 0,//回复总个数
        "is_click": "y"//当前用户是否对当前文章进行点评点赞过 y/n
        "rid" ：12345,
        "user": {
            "userid" :"userid"
            "realname": "huoih",
            "company": "chfgcvu22",
            "position": "`cycvu",
            "avatar": "image/2.jpg"
        },
        "article": {
            "article_id": 622521352,
            "lead_image_url": "http://images.blogchina.com/wx_bot/59e01743545871507858243.jpg",
            "title": "花费百万整20次成范冰冰，称要继续整下去，男朋友一上场全场惊住",
            "msg_url": "https://feed.baidu.com/feed/data/box/landingreact?cmd=157&pageType=1&context=%7B%22nid%22%3A%22news_9595024361618071704%22%2C%22sourceFrom%22%3A%22bjh%22%7D"
        },
       
    }
}
```