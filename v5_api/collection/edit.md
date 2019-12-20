# 修改专题数据请求

- URL：/collection/731564544/edit

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数(header头 Authorization:bearer token)：

```
{
    "token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOjYyMjU4Njg4MCwiZXhwIjoxNDU0Mjk3OTQ2LCJpYXQiOjE0NTQyOTczNDYsImp0aSI6IjE0NTQyOTczNDY2NTE5IiwiZGF0YSI6eyJ1aWQiOjYyMjU4Njg4MH19.FWxW0OZJeI49AdehUEUguTKhC_KZT2Hj2ztLVDuYqlY"
}
```
- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
     "data": [
    "collection": {
      "cid": 639364104,
      "user_id": 463203336,
      "name": "小伙子 你够可以的呀",
      "summary": "不行 不行  还是要你来 ",
      "cover": "78/e4/6d/0_0.68429800 1453973984.jpg",
      "allow_contribute": "y",
      "need_audit": "y",
      "add_time": 1453973984,
      "color": "#cccccc",
      "admin": []
    }
    
    ]

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)