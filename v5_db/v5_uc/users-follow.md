# users_follow
用户关系

### 数据结构

```json

{
    "_id" : ObjectId("5666b37c46d81294840041b3"),
    "fans_uid" : NumberLong(614132744),
    "friend_uid" : NumberLong(39),
    "ip" : "127.0.0.1",
    "add_time" : NumberLong(1449571196),
    "updated_at" : ISODate("2015-12-08T10:39:56.780Z"),
    "created_at" : ISODate("2015-12-08T10:39:56.780Z")
}

```

### 索引信息

```
db.users_follow.ensureIndex({"fans_uid":1,"add_time":-1},{"background":true}); 
db.users_follow.ensureIndex({"friend_uid":1,"add_time":-1},{"background":true}); 


```