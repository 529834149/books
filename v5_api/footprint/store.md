# 脚印访问添加

- URL：/footprint 

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数 

```
{
    "fid":11111111, //等宽脚印id
    "auto_fid":1232 //redis生成的脚印id
    "user_id" : 52,//用户id  
    "which":'home/article/notebook/date/follow',//访问页面
    "loginstate":"y/n",//是否登录
    "referer":"http://xxx.xxx.com"//记录上一个页面
    "uuid":111111111,//客户端唯一标识
    "ip":"127.0.0.1"//IP
    "data":{
       "to_user_id":54/0,//访问者 0是未登录用户
      # "aid":111,//根据访问页面添加该项 article
      # "nid":1111,//根据访问页面添加该项 notebook
    },
    "add_time" : 1417663213,
    'referer':'http://www.baidu.com'//来自的平台
    "state":"a",//用户自己操作a正常b隐藏 c删除 
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

- uuid生成
使用帆布指纹：

```
{
    参考地址：
http://www.cnblogs.com/xiezhengcai/p/4252008.html
http://blog.csdn.net/huangm_fat/article/details/38522939

}

```





- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
