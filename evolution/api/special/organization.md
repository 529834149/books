#支持机构展示 
- URL：api/user/organization

- HTTP请求方式：GET
 

- 请求参数：无
 

- 返回结果：
```
{
    "meta": {
        "code": 200,
        "message": "OK"
    },
    "data": [
        { 
            "o_name": "xx",//机构名称
            "o_url": "http://www.baidu.com"//外链
        },
        { 
            "o_name": "xx",
            "o_url": "http://tangtangtang.blogchina.com"
        }
    ]
} 
```