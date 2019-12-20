# notebooks
个人分类

### 数据结构

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "nid":"xxx",
    "auto_nid" : 12,
    "name" : "xxx",
    "user_id" : 52,
    "serial_number" : 1,//排序号
    "add_time" : 1417663213,
    "update_time" : 1417663213,
    
    "state":"a",//用户自己操作a正常 b隐藏 c删除 
    "is_default":"n",//是不是默认栏目
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n"
    },
    
}

```

### 索引信息

```
db.notebooks.ensureIndex({"user_id":1,"add_time":-1},{"background":true}); 
db.notebooks.ensureIndex({"nid":1},{"background":true}); 

```