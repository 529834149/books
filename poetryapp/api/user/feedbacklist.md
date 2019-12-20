# 反馈列表

- URL:/api/v1/user/feedbacks/lastid

- HTTP请求方式：get
   
- 请求参数：
 
```
{
    "lastid":'47' //反馈id
}
Header {
        "Authorization" : token  // 登录状态
        }
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "content": "57867867867h",
            "createtime": "16小时前",
            "endtime": "",
            "id": 18,
            "nickname": "leileilei",
            "opinion": "处理完了  ",
            "state": 1
        },
        {
            "content": "57867867867h",
            "createtime": "16小时前",
            "endtime": "",
            "id": 17,
            "nickname": "leileilei",
            "state": 1
        },
        {
            "content": "57867867867h",
            "createtime": "16小时前",
            "endtime": "",
            "id": 16,
            "nickname": "leileilei",
            "state": 1
        }
    ],
    "msg": "请求成功"
}```

