# 用户所有收藏文章ID

- URL：sr.blogchina.com/api/user/collected

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
    "token" : "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOjUxMjc2NTk4NCwi",   //必须参数
```

 

- 返回结果：

```
    {
        "meta" :{
            "code" : 200,
            "message" : "ok",
        },
        "data"{ 
            "items"[
                        {
                            'aid':661866,
                            'time':'2017-07-03'
                        },
                        {
                            'aid':538744,
                            'time':'2017-07-05'
                        }
                    ]   
        }        
    }


```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)