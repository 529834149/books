# 关注列表

- URL:/api/v1/subscribe/subscribes/{userid}/{lasttime}

- HTTP请求方式：get
   
- 请求参数：
 
```
{
     "lasttime": 0 // 最后一条关注的关注时间  默认为0
      "userid"  0: //用户id
}
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "createtime": "2018-06-07 11:16:08",
            "fsCount": 1,
            "headportrait": "/poetry_test/headPic/67C6A1E7CE56D3D6FA748AB6D9AF3FD7",
            "id": 47,
            "nickName": "狐狸猫",
            "poetrysCount": 0,
            "reciteCount": 4
        }
    ],
    "msg": "请求成功"
}

```

