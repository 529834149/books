# 发送红包

- URL：bot.blogchina.com/api/sendredpacket

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：

```
    "openid" : "obHnZs9ya8DowJn9rrUewps_CkP8",
    "aid" : 123456,
    "agent" : "xxxxxx",
```

 

- 返回结果：

```json
{
      "meta": {
        "code": 200,
        "message": "ok"
      },
      "data": "发放成功"
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)