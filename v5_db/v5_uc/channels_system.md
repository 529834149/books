# channels_system
频道

### 数据结构

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "channels_system_id": 1
    "name":中国,
    "pid":0,
    "navigation": [0,1],
    "add_time":145643576
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n",
        "is_chose": "y" //"y":发文时可选 "n":发文时不可选
    }, 
   
}

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "channels_system_id": 2
    "name":湖北,
    "pid":1,
    "navigation":[1,2]
    "add_time":145643576
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n",
        "is_chose": "y" //"y":发文时可选 "n":发文时不可选
    }, 
   
}

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "channels_system_id": 3
    "name":武汉,
    "pid":2,
    "navigation":[1,2,3]
    "add_time":145643576
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n",
        "is_chose": "y" //"y":发文时可选 "n":发文时不可选
    }, 
   
}

```

### 索引信息