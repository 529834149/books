
# 下发短信

- URL：sr.blogcore.cn/api/chuanglansms;       

- HTTP请求方式：POST

- 是否登陆：否

- 请求参数：

```
{
    'mobile' : 'required',	//手机号码
    'ip' : 'required',//客服端ip
    'flag' : 'required', //flag=code 这里为固定值
    'geetest_challenge' : 'required', //纪元验证码参数
    'geetest_validate' : 'required',//纪元验证码参数
    'geetest_seccode' : 'required'//纪元验证码参数
}
```

 

- 返回结果：

```
{
    
    'meta': {
        'code': 200/400/4014,    //结果码，必需/参数错误/手机号码已存在绑定了
        'message': 'ok'
    }
	'data':{
		'verification':'xxx',//验证码
		'data' : 'xxx' //状态码 参考创蓝状态码   为0 正常下发 
	}
	
	


}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
