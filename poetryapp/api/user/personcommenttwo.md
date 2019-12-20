# 评论管理 - 个人被评论列表

- URL:/api/v1/user/personcommentTwo/{userid}/{lastid}

- HTTP请求方式：get
   
- 请求参数：
 
```
{
   userid:62 //用户id
   lastid:283 //最后一条评论id 默认为0
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
            "backgroundImg": "/poetry_bokee/common/12.jpg",
            "commentid": 282,
            "content": "fff",
            "createtime": "2017-02-06 15:26:56",
            "headportrait": "/poetry_test/headPic/44F683A84163B3523AFE57C2E008BC8C",
            "nickname": "博客中国因你而变",
            "title": "第四首",
            "userid": 62
        },
        {
            "backgroundImg": "/poetry_bokee/common/2.jpg",
            "commentid": 277,
            "content": "哇，好棒啊",
            "createtime": "2017-01-10 15:40:43",
            "headportrait": "/poetry_test/headPic/44F683A84163B3523AFE57C2E008BC8C",
            "nickname": "博客中国因你而变",
            "title": "宿建德江",
            "userid": 62
        }
    ],
    "msg": "请求成功"
}

```

