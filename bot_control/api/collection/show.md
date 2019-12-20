# 是否收藏

- URL：bot.blogchina.com/api/collection/10000

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：
```
"token" : "xxxx",
"url" : "xxxx",//encode编码
```
 

- 返回结果：

```json
{
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "data": {"status" : "normal"}//normal 为收藏  cancel 为取消收藏  没有数据则为空

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)