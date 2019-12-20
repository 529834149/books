# feeds
我的订阅


### 数据结构
订阅的类型有如下几种：

|type|说明|
|:---|:---------|
|article_publish |偶像有新发专栏|
|article_support |偶像喜欢了专栏文章|
|article_comment |偶像评论了专栏文章|



各类型数据结构：

```json

{
    "offset":123,//这条数据，在消息队列中的id
    "sender_id":123,//feed 发送者
    "receiver_id" : 597346824,//feed接收者
    "template" : "article_publish",
    "created_at" : 1450662531,//数据入库时间
    "is_del":"n",
    "data" : {
        "article":
        { 
            "title":"xxx",
            "url":"",
            "image":"",
            "summary":"",
            "created_by": 100,//文章作者id
            "created_at":1450662531 //文章创建时间
        }
        
    },
    
}






```

### 索引信息

```
db.feeds.ensureIndex({"uid":1,"created_at":-1},{"background":true}); 


```