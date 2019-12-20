#前辈接口 
- URL：api/user/predecessor

- HTTP请求方式：GET
 

- 返回结果：
```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": [
        {
            "realname": "xxx",//真实姓名		
            "avatar": "xx",//头像
            "intro": "xxx",//简介
        },
        {
            "realname": "石新焕",
            "avatar": "http://images.blogchina.com/ev_image/f37373e2e7ae99bda45ef1bd12eca85f.jpeg",
            "intro": ""
        }...
    ]
} 
```