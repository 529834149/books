#公司名将详情页
- URL：api/user/companyStar/1

- HTTP请求方式：GET
 

- 请求参数：路由见参 
 ```
{
	'company_id':xxx,//路由见参demo:1
    "last_time" ："xxxx",//当前列表最大时间戳
}
```

- 返回结果：
```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": {
        "company_source": { 
            "company_id": 5,//公司id
            "company_name": "测试2",//公司名称
            "company_intro": "我是测试2的简介",//公司简介
            "company_image": "ev_image/2bd660a75e25ea2a614c8a00c88febc3.jpeg"//公司logo
        },
        "star_list": [
            {
                "realname": "唐启胤",//名将姓名
                "position": "php工程师",//名将职位
                "avatar": "http://images.blogchina.com/ev_image/47c2cea206f049967ab88e4eeb3f1025.jpeg",//名将logo
                "intro": ""//名将简介
            },
            {
                "realname": "胡晓炜",
                "position": "WEB前端",
                "avatar": "http://images.blogchina.com/ev_image/94e0781366e830cfc89ea82095cc4db7.jpeg",
                "intro": "小伟大牛"
            }
        ]
    }
}
```
-返回失败结果
```
{"meta":{"code":404,"message":"Not Found"}}
```