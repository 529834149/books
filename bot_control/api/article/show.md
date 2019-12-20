# 文章详情

- URL：bot.blogchina.com/api/article/882559488

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "aid": 614198272, //文章ID
}
```

 

- 返回结果：

```
{
    
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "data": {
        "firstpush": "好神奇",  //首推人
        "from": "blogchina" ,  //来源平台
        "content": "<p>博客中国,每天五分钟</p>" ,  //文章内容
        "pushtime": "2017-03-22",  //推荐时间
        "title" : "博客中国",    //文章标题
        "msg_url": "http://images.blogchina.com/wx_bot/58d8b041aa80a1490595905.jpg!m240",  //图片地址
        "view": 345,     //文章浏览量
        "pushtotal": 896,  //推荐人数   
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
