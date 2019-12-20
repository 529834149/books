# 发表评论(fid:0)/回复评论(fid!=0 && at!=y)/at(at=y)
发表评论和回复评论不一样的地方在于：发表文章fid : 0
当at = y时，fid 只存被at的评论id


- URL：/article/34/discuss

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数：

```
{
    "token" : "xxxx",
    "title" : "xxx",
    "url" : "xxx",
    "author_id" : "xxx", //文章所属用户id
    "fid" : "xxx", // 0
    "body" : "xxx",
    "anonymous":"n", //n为不匿名
    "nick":"xx", 
    "avatar":"xx"
    "at":"n", // y and n
    "status":"in:publish,pending,spam,delete",
    
    
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,   //结果码，必需。客户端应首先根据此项结果进行相应处理。
        "message":"OK"
    },
    "data": {
        "did":"xx",
        "aid": "xx",
        "author_id":"xx",
        "user_id":"xx"
    }
    
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)


