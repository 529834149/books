# 首页初始化注册 app首页展示与第三方登录用户完善注册

- URL：sr.blogchina.com/api/square

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
    "deviceid" : "xxxx",  //设备号   必传参数
    'token':xxx,//非必传参数
``` 

- 返回结果：

```
    {
        "meta" :{
            "code" : 200,
            "message" : "ok",
        },
        "data"{ 
            "items":[
                     {
                        "_id" => ObjectID {#214}
				        "pid" => 16,//平台id
				        "image" => "http://ifanr-cdn.b0.upaiyun.com/wp-content/themes/ifanr-4.0/static/images/ifanr/top-nav-down-logo.png",//平台图标
				        "name" => "爱范儿",//平台名称 
				        "pretty_time" => 格式化时间（刚刚）,//平台更新时间
				        "is_standardred" => "y",//是否显示红点 即是否阅读
                     },
                     {
                        "_id" => ObjectID {#214}
				        "pid" => 16,//平台id
				        "image" => "http://g.hiphotos.baidu.com/baike/w%3D268%3Bg%3D0/sign=014eb1dc8fd6277fe912353e1003780d/5d6034a85edf8db14d5c59030123dd54564e7462.jpg",//平台图标
				        "name" => "华尔街见闻",//平台名称 
				        "pretty_time" => 格式化时间（刚刚）,//平台更新时间
				        "is_standardred" => "n",//是否显示红点 即是否阅读
                     }...
                ]
        }        
    }


```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)