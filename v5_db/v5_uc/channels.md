# channels
频道

### 数据结构

#方案一

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "name":中国,
    "category" : [
    {
        "_id":,
        "name":湖北,
        "add_time": 1417663213,
        "category": [{
            "_id":,
            "name":武昌,
            "add_time":1417663213
            "category":[{

            }],
            
        },{
            "_id":,
            "name":汉口,
            "add_time":1417663213
            "category":[{

            }],

        }],
        
    },
    {
        "_id":,
        "name":河北,
        "add_time": 1417663213,
        "category": [{
            "_id":,
            "name":邢台,
            "add_time":1417663213
            "category":[{

            }],
            
        },{
            "_id":,
            "name":廊坊,
            "add_time":1417663213
            "category":[{

            }],

        }],
        
    },],
    
    
    
    
}

```

＃方案二
```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "cid": 1
    "name":中国,
    "fid":0,
    "navigation":[中国],
    "add_time":145643576
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n"
    }, 
   
}

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "cid": 2
    "name":湖北,
    "fid":1,
    "navigation":[中国,湖北]
    "add_time":145643576
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n"
    }, 
   
}

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "cid": 3
    "name":武汉,
    "fid":2,
    "navigation":[中国,湖北,武汉]
    "add_time":145643576
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n"
    }, 
   
}

```

### 索引信息

