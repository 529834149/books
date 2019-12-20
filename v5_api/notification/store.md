# 添加通知
提供给友赞平台

- URL：/notification 

- HTTP请求方式：POST

- 是否登陆：是

- 请求参数  是否必传 y

```
{
    "who" : 100,//谁赞赏的这篇文章,值可以为 0 //y	
    "aid" : 543278766,//文章id //y
    "title":"",//文章标题 //y
    "uid" : 52,//文章所属用户id,即seller_id //y
    "total_fee" : 200,//赞赏金额，单位(分) //y
    "type" : "reward_article",//【可选参数】
    "ip" : '127.0.0.1',//【可选参数】
    
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
