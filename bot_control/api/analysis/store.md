# 创建数据

- URL：bot.blogchina.com/api/analysis

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数：

```
    "token" : "xxxx",
    //批量传入
    "data" : "",//json的格式
    //单次传入
    "user_id" : NumberLong(0),
    "nickname" : "xxxx",
    "avatar" : "xxxx"
    "c_id" : NumberLong(1),//文章id
    "type" : "科技",//文章类型
    "subject" : "人工智能", //话题
    "from" : "新浪",//来源自哪
    "from_type" : "web",//来源类型 web为来源自网站 chat为来自公众号
    "start_time" : NumberLong(1343842713000),//开始阅读时间
    "end_time" : NumberLong(1343842713000),//结束阅读时间
    "date_length" : NumberLong(13000),//阅读时长
    "word_num" : NumberLong(1300),//阅读字数
    "platform" : "web",//阅读平台 web为web端 app为app端
    "ip" : "119.255.34.130",
    "agent" : ""
```

 

- 返回结果：

```json
{
    "meta": {
        "code": 200,    //200 成功， 400 失败 401 未登录
        "message": "ok"
    }
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)