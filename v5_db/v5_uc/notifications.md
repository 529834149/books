# notifications
通知


### 数据结构

```
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824,//你
    "type" : "follow_user",
    "data" : {
        "who":123,// who关注了uid
        ……
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
}

```

### 索引信息

```
db.notifications.ensureIndex({"uid":1},{"background":true}); 


```