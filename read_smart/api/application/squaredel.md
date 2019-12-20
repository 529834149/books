# 取消订阅

- URL：sr.blogchina.com/api/special_sub专栏ID,//专栏ID必传参数

- HTTP请求方式：delete

- 是否登陆：是

- 请求参数：

``` 
    "token":xxx,//token必须参数 
``` 

- 返回结果：

```
    {
        "meta" :{
            "code" : 200/400/401/500,	//成功/参数错误/token失效/删除即更新失败 服务器错误
            "message" : "xxxxx",
        } 
    }


```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)