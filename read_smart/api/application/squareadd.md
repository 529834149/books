
# 添加平台

- URL：sr.blogchina.com/api/square/add/xxxxx;      //xxxxx为设备号 必须参数

- HTTP请求方式：POST

- 是否登陆：否/是

- 请求参数：

```
{
    'pid':xxx,     //平台id 必须参数  字符串形式传入
    'token':'xxx',  //非必须参数 主要用于判定删除的是该用户登录还是未登录的应用平台
}
```

 

- 返回结果：

```
{
    
    'meta': {
        'code': 200/400/401/500,    //结果码，必需
        'message': 'ok/参数错误/token失效/服务器错误'
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
