# 手机号码是否绑定判定

- URL:http://hiveapi.blogchina.com/api/user/isMobileBind

- HTTP请求方式：get

- 是否登陆：否

- 请求参数：
 
```
{ 
    "mobile":xxxxxxxxxx//必传参数， 手机号码 
}
```

- 返回结果：

```
{
    "meta": {
        "code": 400, 400/4014/404 参数错误或手机号码格式不正确/手机号码找到 不能操作该手机号码/数据库里没有找到该手机号 该手机号码可以做业务处理 
        "message": "xxx"
    } 
}
```