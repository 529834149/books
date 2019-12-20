# 创建点评

- URL：bot.blogchina.com/api/remark

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数：

```
    "token" : "xxx",
    "c_id" : NumberLong(1),//文章id
    "score" : 5,//评分数,没有就为0
    "body" : "点了一下，居然发了两遍，— —|||",//点评内容，没有就为空
    "add_time" : NumberLong(1343842713000),
    "ip" : "119.255.34.130",
    "user_id" : NumberLong(0),
    "nickname" : "xiao名",
    "avatar" : "",
    "status" : "publish",
    "from" : "app",//app 来自app   web 来自web
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