# 个人列表页---数量统计

- URL：bot.blogchina.com/api/page/number

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
    "uid" : 653335599   //用户id ，必传参数
```

 

- 返回结果：

```json
{
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "num": {
        "remark" : 25,  //点评数量
        "recommend" : 21  //推荐数量
        "praise" : 32   //获得点赞的数量
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)