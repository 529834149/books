# duscuss
评论/讨论

### 数据结构1 关系型

```json

{
    
    "auto_did":43,
    "article":{
    
        "aid":33, //文章在评论平台的id
        "title":"xxxxxxx",
        "url":"xxxxxx",
        "author_id":xx,//文章发布者id
    }
    
    "discuss":{
       
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
        "anonymous":"n",//是否匿名
        "user":{ 
            "user_id":xx,//评论者用户id
            "nick":"xxx", //马甲
            "avatar":"xxx",
            
        },
        "status": "publish", //评论状态： publish：正常, pending：待验证, spam：垃圾，delete：已被删除 (非必选，默认是正常评论)
        "agent":"",
    }
    
    
    
    
}

```
### 索引信息

```
db.discusses.ensureIndex({"article.aid":1,"discuss.add_time":-1},{"background":true}); //文章下的评论
db.discusses.ensureIndex({"article.author_id":1,"discuss.add_time":-1},{"background":true}); //我收到的全部评论

```


### 数据结构2 文档型

```json

{
    
    
    
    "article":{

        "id":33,
        "title":"xxxxxxx",
        "url":"xxxxxx",
        "u_id":xx,//文章发布者id
    },
    
    "discusses":[
        
        {
            "id":43, //评论id
            "fids":[2,4], //评论父id
            "body":"",//评论内容
            "add_time" : 1417663213,//第一次插入时间
            "update_time" : 1417663213,//更新时间
            "ip" : "10.10.4.244",
            "last_ip" : "10.10.4.244",
            "like":{
                "total":3,  //喜欢总数
                "user_id":[2,4,8],//有那些人喜欢
            },
            "user":{ 
                "id":xx,//评论者用户id
                "nick":"xxx", //马甲
                "email":"xxx",
                "avatar":"xxx",
            },
            "status": "publish", //评论状态： publish：正常, pending：待验证, spam：垃圾，delete：已被删除 (非必选，默认是正常评论)
            "agent":"",
        },

        {
            "id":43, //评论id
            "fid":[2,4], //评论父id
            "body":"",//评论内容
            "add_time" : 1417663213,//第一次插入时间
            "update_time" : 1417663213,//更新时间
            "ip" : "10.10.4.244",
            "last_ip" : "10.10.4.244",
            "like":{
                "total":3,  //喜欢总数
                "user_id":[2,4,8],//有那些人喜欢
            },
            "user":{ 
                "id":xx,//评论者用户id
                "nick":"xxx", //马甲
                "email":"xxx",
                "avatar":"xxx",
            },
            "status": "publish", //评论状态： publish：正常, pending：待验证, spam：垃圾，delete：已被删除 (非必选，默认是正常评论)
            "agent":"",
        }
           
    ],
    
}

```