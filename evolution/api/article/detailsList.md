#点评详情的评论列表,显示回复第一条数据

- URL：api/detailslist

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "article_id" ："xxxx",//当前文章id   测试id :630901248
    "last_time": 1490778000000, //传入当前与我相关栏目被点击的时间
    "user_id" : 488303617,//当前登录的用户信息article_id=597355520&last_time=0&user_id=488303617
    "rid" : 45415 //新增点评id
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
            "did": 150,
            "add_time": 1508143215,
            "point_num": 0,
            "is_click": "y",//当前登录用户是否对当前评论进行点击过y/n
            "is_self_del" :"y" //当前登录用户是否可以删除当前帖子y/n
            "aid": 597355520,
            "rid" :123456
            "article": {
                "title": "互联网最新创业资讯_36氪",
                "lead_image_url": "",
                "article_url": "http://36kr.com/p/5096631.html"
            },
            "discuss": {
                "body": "我对当前文章进行了评论123111122334"
            },
            "user": {
                "user_id": 2,
                "avatar": "image/1.jpg",
                "realname": "博士",
                "company": "新浪技术部",
                "position" :""//职位
            },
            "is_reply": "y",//是否存在回复y/n
            "is_show": "y",//是否显示查看更多
            "reply_list": [
                {
                    "reply_id": 151,
                    "aid": 597355520,
                    "discuss": {
                        "body": "我对当前文章进行了评论1231111223343434343434回复"
                    },
                    "user": {
                        "user_id": 2,
                        "avatar": "image/1.jpg",
                        "realname": "博士",
                        "company": "新浪技术部",
                        "position" :""//职位
                    },
                    "add_time": 1508143682
                },
            ]
        },
        {
            "did": 86,
            "add_time": 1507865317,
            "point_num": 0,
            "is_click": "y",//当前登录用户是否对当前评论进行点击过y/n
            "aid": 597355520,
            "article": {
                "title": "互联网最新创业资讯_36氪",
                "lead_image_url": "",
                "article_url": "http://36kr.com/p/5096631.html"
            },
            "discuss": {
                "body": "48对文章59进行了评论"
            },
            "user": {
                "user_id": 488303617,
                "avatar": "image/1.jpg",
                "realname": "马云",
                "company": "阿里巴巴",
                 "position" :""//职位
            },
            "is_reply": "n",
            "reply_list": [],
            "is_show": "n"
        },
        {
            "did": 85,
            "add_time": 1507865304,
            "point_num": 0,
            "is_click": "y",//当前登录用户是否对当前评论进行点击过y/n
            "aid": 597355520,
            "article": {
                "title": "互联网最新创业资讯_36氪",
                "lead_image_url": "",
                "article_url": "http://36kr.com/p/5096631.html"
            },
            "discuss": {
                "body": "48对文章59进行了评论"
            },
            "user": {
                "user_id": 488303617,
                "avatar": "image/1.jpg",
                "realname": "马云",
                "company": "阿里巴巴",
                 "position" :""//职位
            },
            "is_reply": "n",//是否存在评论
            "reply_list": [],
            "is_show": "n"//是否显示更多y/n
        }
    ]
}
//数据为空时
{
    "meta": {
        "code": 200,
        "message": "OK:评论为空"
    },
    "data": []
}

```