# 修改个人分类

- URL：/notebook/111

- HTTP请求方式：put

- 是否登陆：是

- 请求参数 必传参数 y

```
{
    "token" : "XXXXXXXXX",   //y
    "name" : "xxx", //y
    "n_id":123, //见路由 y
    "serial_number" : 1425478547,//排序号 时间戳
    "add_time" : 1417663213,
    "update_time" : 1417663213, 
    "state":"a",//用户自己操作a正常 b隐藏 c删除 
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n"
    },
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    } 
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
