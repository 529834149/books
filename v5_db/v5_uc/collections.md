# collections
专题

### 数据结构

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "cid":123,
    "auto_cid" : 12,
    "user_id" : 52,
    "name" : "xxx",
    "summary" : "xxx",
    "cover":"xxx",//封面
    "color" : "#cccccc",
    "add_time" : 1450668800,
    "update_time" : 1417663213,
    
    "allow_contribute":"y",//是否允许投稿
    "need_audit":"n",//是否需要审核
    "manager":[1,2,3,4],  
    "state":"a",//用户自己操作a正常 b隐藏 c删除 
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n"
    },
}

```

### 索引信息

```
db.collections.ensureIndex({"user_id":1,"add_time":-1},{"background":true}); 
```