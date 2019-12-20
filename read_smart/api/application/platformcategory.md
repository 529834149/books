
# 应用平台广场

- URL： sr.blogcore.cn/api/special_column

- HTTP请求方式：get

- 是否登陆：否/是

- 请求参数：

```
{
    'last_time':0,     // 非必须参数上拉时间戳1545356158
    'token':'xxx',  //非必须参数 主要用于判定该用户登录还是未登录的应用平台
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
      "column_name": "糖糖糖的专栏",
      "column_id": 122,
      "update_time": 1545356158, //给我这个时间戳就行
      "images": "",
      "is_follow": "n"
    },
    {
      "column_name": "小何儿的专栏",
      "column_id": 120,
      "update_time": 1545298406,
      "images": "",
      "is_follow": "n"
    },
    {
      "column_name": "29的专栏",
      "column_id": 98,
      "update_time": 1545289620,
      "images": "",
      "is_follow": "n"
    },
    {
      "column_name": "自由飞翔的专栏",
      "column_id": 26,
      "update_time": 1540975478,
      "images": "",
      "is_follow": "n"
    }
  ]
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
