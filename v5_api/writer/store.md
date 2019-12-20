# 发表文章
供编辑器使用，编辑器第一次自动保存执行insert操作
waring：不提供给第三方（比如博客搬家）使用，如第三方需使用，另行开发


- URL：/writer 

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数：

```
{
    "token" : "XXXXXXXXX",
    "title": "xxx", 
    "body": "xxx",
    "from":"",//可选
    "ip":"",  //可选
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
        "aid": ""，
        "user_id":""
    }
    
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)


