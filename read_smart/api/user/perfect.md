# 首次登录用户完善注册

- URL：sr.blogchina.com/api/user/perfect

- HTTP请求方式：post

- 是否登陆：是

- 请求参数：

```json 
    "deviceid" : "xxxx",  //设备号   必传参数 
    'token':xxx,//必传参数
``` 

- 返回结果：

- 正确


```json 
    "meta" :{
        "code" : 200,
        "message" : "ok",
    },
    "data"{  
          "platform_count":0//403具有同样结构 
    }         
```
- 错误

```json 
    "meta" :{
        "code" : 400/401/403/409/500,  参数错误/没有权限/以绑定设备/切换帐号 禁止绑定 /服务器错误
        "message" : "xxx",
    }  
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)