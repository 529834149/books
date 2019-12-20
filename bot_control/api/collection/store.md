# 创建收藏

- URL：bot.blogchina.com/api/collection

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数：

```
    "token" : "xxxx",
    "c_id" : NumberLong(1),//文章id
    "add_time" : NumberLong(1343842713000),
    "ip" : "119.255.34.130",
    "user_id" : NumberLong(0),
    "nickname" : "xiao名",
    "avatar" : "",
    "status" : "normal",//normal 收藏  cancel 为取消收藏
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