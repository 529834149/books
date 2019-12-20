# 转发数量

- URL:/api/v1/poetry/retransmission/{type}/{oid}

- HTTP请求方式：PATCH
   
- 请求参数：
 
```
{
    "type" ： 1 //  1 转发诗歌 2 转发朗诵
    "oid" ： 1 //  诗歌或朗诵 id
}
```

- 返回结果：

```
{
    "code": 0,
    "msg": "请求成功"
}

```

