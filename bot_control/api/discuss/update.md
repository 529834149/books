# 修改评论

- URL：bot.blogchina.com/api/discuss/{rid}

- HTTP请求方式：PUT

- 是否登陆：是

- 请求参数：

```
"did" : NumberLong(1),
"fids" : [],
"body" : "点了一下，居然发了两遍，— —|||",
"add_time" : NumberLong(1343842713000),
"update_time" : NumberLong(1343842713000),
"ip" : "119.255.34.130",
"last_ip" : "119.255.34.130",
"like" : {
    "total" : NumberLong(0),
    "user_ids" : [],
    "nickname": 'xiaoB,xiao名'
},
"anonymous" : "n",
"user" : {
    "user_id" : NumberLong(0),
    "nickname" : "xiao名",
    "avatar" : ""
},
"status" : "publish",
"agent" : ""
```

 

- 返回结果：

```json
{
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)