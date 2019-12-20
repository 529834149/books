#获取当前文章中的回复所有内容 取消
* [查看更多评论](api/article/morereply.md)  
- URL：api/replyinfo

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "r_id" ："xxxx",//当前文章id
   
}
```

- 返回结果方案一：
```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": [
        {
            "did": 42,
            "user_id": 488303616,//谁回复的
            "body": "我进行了回复呵呵呵",//回复的内容
            "avatar": "image/1.jpg",//头像
            "realname": "马云",//名称
            "company": "阿里巴巴技术总监",//公司
            'position' :''//职位
            "add_time": 1507799290//回复时间
        },
        {
            "did": 41,
            "user_id": 2,
            "body": "我进行了回复呵呵呵",
            "avatar": "image/1.jpg",
            "realname": "博士",
            "company": "新浪技术部",
            "add_time": 1507798796
        }
    ]
}

```