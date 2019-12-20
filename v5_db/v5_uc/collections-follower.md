# collections_follower
专题-xxx正在关注

### 数据结构

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "c_id":123, //专题id
    "c_u_id":25,//专题所属用户id
    "u_id" : 52,//关注者id
    "add_time" : 1450668800,
}

```

### 索引信息

```
db.collections_follower.ensureIndex({"c_id":1},{"background":true}); 
```