# 日期归档

- URL：/archive 

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数 

```
{
    "token":"xxxxx"
    'uid':11111,
    'times':1424521232,
    'article_flag'=>'newarticle',//newarticle添加一篇文章 deletearticle 删除一篇文章到回收站  newarticle从回收站恢复一篇文章   
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    } 
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
