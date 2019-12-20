
# 手机号码绑定

- URL：sr.blogcore.cn/api/user/bind_mobile;       

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：

```
{
    'mobile' : 'required',	//手机号码
    'code' : 'required',//客服端ip
    'uid' : 'required', //   
}
```

 

- 返回结果：

```
{
    
    'meta': {
        'code': 200/404/500,    //结果码，操作成功/验证码code错误/服务器错误
        'message': 'ok'
    },
    'data':{
    	'token':'xxxxxxxxxxx'
    }  
    
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
