# 是否点赞

- URL:/api/v1/praiseState/{oid}/{type}/{userid}

- HTTP请求方式：GET
   
- 请求参数：
 
```
{
    "userid"  :2  
    "type" ： 1 //类型：1：诗歌 2：朗诵
    "oid" ;  123  //诗歌或者朗诵ID
}
```

- 返回结果：

```
{
    "code": 0,
    "data": false, //未点赞
    "msg": "请求成功"
}
```

