# users_log
日志

### 数据结构 base

```json

{
    "_id" : ObjectId("56775a83b79cfe0814000029"),
    "uid" : 597346824,
    "type" : "xxx" ,
    "contoller": "xxx",
    "action":"xxx",
    "desc": "xxx",
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    
    "agent" : "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.101 Safari/537.36",
    "updated_at" : ISODate("2015-12-21T01:48:51.000Z"),
    "created_at" : ISODate("2015-12-21T01:48:51.000Z")
}

 
           

```
## 索引信息

```
db.users_log.ensureIndex({"uid":1,"type":1,"add_time":-1},{"background":true}); 


```