# collections_article
专题-文章

### 数据结构

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "c_id":123, //专题id
    "a_id" : 52,//文章id
    "add_time" : 1450668800,
}

```

### 索引信息

```
db.collections_article.ensureIndex({"c_id":1},{"background":true}); 
```