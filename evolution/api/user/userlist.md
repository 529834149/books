# 用户绑定判断

- URL：evapi.blogcore.cn/api/user/members

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：
 根据当前用户所有赞数进行排名
```
{
    "page": 1,//页码
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
            "realname": "马云1",
            "company": "阿里巴巴技术总监", //公司
            "position": "COO11",//职位
            "avatar": "image/1.jpg",
            "sort_num": 30,
            "add_time": 1505815480
            "rid" : 12245122
        },
        {
            "realname": "马云",
            "company": "阿里巴巴",
            "position": "CTO21",
            "avatar": "image/1.jpg",
            "sort_num": 21,
            "add_time": 1505821480 
             "rid" : 12245122
        },
        {
            "realname": "博士",
            "company": "新浪技术部",
            "position": "COOo",
            "avatar": "image/1.jpg",
            "sort_num": 10,
            "add_time": 1505813480
            "rid" : 12245122
        }
    ]
}
```
