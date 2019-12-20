
# 添加订阅

- URL：sr.blogchina.com/api/special_sub/专栏ID;      //专栏ID必传参数

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数：

```
{
    'pid':xxx,     //专栏id 必须参数 
}
```

 

- 返回结果：

```
{
    
    'meta': {
        'code': 200/400/401//500,    //结果码，必需/参数错误/token失效/服务器错误
        'message': 'ok/参数错误/token失效/服务器错误'
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
