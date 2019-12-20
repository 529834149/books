# 更改点赞

- URL：bot.blogchina.com/api/praises

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：

```
    "rid" : "59094ea1e3d11eee296c275f",   //点评id，必传参数
    "mime" : "xxxxxx",  //设备mime
    "add_time" : NumberLong(1343842713000),
    "ip" : "119.255.34.130",
    "status" : "normal",//normal 点赞  cancel 为取消点赞
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