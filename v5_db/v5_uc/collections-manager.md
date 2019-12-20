# collections_manager
专题-管理员

### 数据结构

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "c_id":123, //专题id
    "m_id" : 52,//管理员id
    "is_owner":"y",//y|n 是否是专题创建者
    "add_time" : 1450668800,
}

```

### 索引信息

```
db.collections_manager.ensureIndex({"c_id":1},{"background":true}); 
```