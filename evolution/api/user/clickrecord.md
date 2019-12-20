#公共交流页面标红点击

- URL：evapi.blogcore.cn/api/clickrecord/squareclick

- HTTP请求方式：post
 
- 请求参数：

```
{
    "uid" : "xxxx"    //用户id、
    "aid":xxx //文章id
    "type":'remark/comment',//类型 以,拼接
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK",
    } 
}
```
