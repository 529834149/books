# 文章下的评论列表


- URL：/article/34/discuss

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "" : "", 
    
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
   "data":[
    {
        "article":{
        
            "aid":33, //文章在评论平台的id
            "title":"xxxxxxx",
            "url":"xxxxxx",
            "author_id":xx,//文章发布者id
        }
        
        "discuss":{
            "auto_did":2,
            "did":43, //评论id
            "fids":[1,8], //评论父id
            "body":"",//评论内容
            "add_time" : 1417663213,//第一次插入时间
            "update_time" : 1417663213,//更新时间
            "ip" : "10.10.4.244",
            "last_ip" : "10.10.4.244",
            "like":{
                "total":3,  //喜欢总数
                "user_ids":[2,4,8],//有那些人喜欢
            },
            "anonymous" : "y",
            "user":{ 
                "user_id":xx,//评论者用户id
                "nick":"xxx", //马甲
                "avatar":"xxx",
                
            },
            "status": "publish", //评论状态： publish：正常, pending：待验证, spam：垃圾，delete：已被删除 (非必选，默认是正常评论)
            "agent":"",
        ｝  
    
    },
    {
        "article":{
        
            "aid":33, //文章在评论平台的id
            "title":"xxxxxxx",
            "url":"xxxxxx",
            "author_id":xx,//文章发布者id
        }
        
        "discuss":{
            "auto_did":2,
            "did":43, //评论id
            "fids":[1,8], //评论父id
            "body":"",//评论内容
            "add_time" : 1417663213,//第一次插入时间
            "update_time" : 1417663213,//更新时间
            "ip" : "10.10.4.244",
            "last_ip" : "10.10.4.244",
            "like":{
                "total":3,  //喜欢总数
                "user_ids":[2,4,8],//有那些人喜欢
            },
            "anonymous" : "y",
            "user":{ 
                "user_id":xx,//评论者用户id
                "nick":"xxx", //马甲
                "avatar":"xxx",
                
            },
            "status": "publish", //评论状态： publish：正常, pending：待验证, spam：垃圾，delete：已被删除 (非必选，默认是正常评论)
            "agent":"",
        ｝  
    
    },

}]
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)


