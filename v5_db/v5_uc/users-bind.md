# users_bind
用户绑定

### 数据结构

```json

{
    "_id" : ObjectId("5673639ab79cfe401900002c"),
    "openid" : "630975496",
    "u_id" : "630975496",
    "platform" : "blogchina",
    "token" : "",
    "nickname" : "retert",
    "is_mainuser" : "n"
}

```

### 索引信息

```
db.users_bind.ensureIndex({"u_id":1},{"background":true}); 


```