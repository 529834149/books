#名帅展示 
- URL：api/user/marshal

- HTTP请求方式：GET
 

- 请求参数：路由见参 
 ```
{  
    "limit":xx,//获取条数 可传可不传 
    "last_time":0//时间戳 第一次访问为0
}
```

- 返回结果：
```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": [
        {
            "realname": "付磊",//真实姓名
            "position": "WebJava",//职位
            "avatar": "http://images.blogchina.com/image/111.jpeg"//头像
        },
        {
            "realname": "魏海",
            "position": "Java",
            "avatar": "http://images.blogchina.com/ev_image/aab4e63cad7619e22a9529121a77501b.jpeg"
        }...
    ]
}
```