#名将展示 
- URL:api/user/star 
- HTTP请求方式:GET  
- 请求参数:
```
{   
	"last_time" : "xxxx",//当前列表最大时间戳  	 第一次为0可传可不传  
    "limit":xx,//获公司取条数 可传可不传 
    "star_limit":xx//获公司下名将取条数 可传可不传 
}
```

- 返回结果：
```
{
    "meta": {
        "code": 200,
        "message": "OK",
    },
    "data": [
        { 
            "company_id": 5,//公司id
            "company_name": "xxx",//公司名称
            "company_image": "xxx",//公司logo
            "star_list": [
                {
                    "realname": "xxx",//公司下的名将
                    "avatar": "xxx"//公司下的名将的logo
                },
                {
                    "realname": "胡晓炜",
                    "avatar": "http://images.blogchina.com/ev_image/94e0781366e830cfc89ea82095cc4db7.jpeg"
                }
            ]
        },
        { 
            "company_id": xx,
            "company_name": "xxx",
            "company_image": "xxx",
            "star_list": []
        }...
    ]
}
```

-返回失败结果
```
{"meta":{"code":400,"message":"Bad Request"}}
```