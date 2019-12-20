# v5_channel_1(1, 2, 3...)
频道

### 数据结构

```json
{
    "id" : 1,
    "aid" : 12345,
    "user_id" : 52,
    "notebook_id":1, //人个分类
    "title" : "xxx",
    "subtitle":"xxx",
    "summary" : "xxx",
    "insert_time":"xxx",//第一次入库成草稿的时间，
    "add_time" : 1417663213,//第一次发表时间 按此字段排序
    "publish_time" : 1417663213,//最后一次发表时间
    "update_time" : 1417663213,//更新时间
    "from":"blogchina",//blogchina|ywt
    "pics" : 'xxx/1.jpg',
    "videos" : 'xxx/1.flv',
    "tag" : 'w3c,nodejs',
    "is_del": 'y' //'y':显示 'n':不显示
    
}

```

### 索引信息

```
aid, user_id, add_time 
```