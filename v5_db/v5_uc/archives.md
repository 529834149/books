# archives
日期归档 

### 数据结构

```json

{
    "_id" : ObjectId("56a9e258b79cfe601600002b"), 
    "user_id":int(614198272),
    "year_lists":{
        [
            "year":'2016',
            "china_year":"丙申年",
            "afteryearNum":6,
            "month_lists":[
                   [
                    "month":01,
                    "aftermonthNum":2, 
                   ],
                   [
                    "month":02,
                    "aftermonthNum":2, 
                   ],
                   [
                    "month":03,
                    "aftermonthNum":2, 
                   ],
                    
            ],
        
        ],
     "updated_at":"2016-02-17 15:54:08",
     "created_at":"2016-01-28 17:41:44"
}

```

### 索引

```
db.archives.ensureIndex({"user_id":1},{"background":true});

```