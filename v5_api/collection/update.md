# 跟新专题

- URL：/collection/639364104

- HTTP请求方式：PUT

- 是否登陆：是

- 请求参数(header头 Authorization:bearer token)：

```
{
    "user_id" : 52,
    "name" : "xxx",
    "summary" : "xxx",
    "cover":"xxx",//封面
    "color" : "#cccccc",
}
```
- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)