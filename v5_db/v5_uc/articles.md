# articles
博客文章

### 数据结构

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "aid" : 12345,
    "auto_aid" : 12,
    "user_id" : 52,
    "notebook_id":1, //人个分类
    "channel_id": 23,
    "title" : "xxx",
    "subtitle":"xxx",
    "summary" : "xxx",
    "body":"xxx",
    "insert_time":"xxx",//第一次入库成草稿的时间，
    "add_time" : 1417663213,//第一次发表时间 按此字段排序
    "publish_time" : 1417663213,//最后一次发表时间
    "update_time" : 1417663213,//更新时间
    "from":"blogchina",//blogchina|ywt
    "word_count" : 1432,
    
    "pics" : {
        "exists":"y",
        "url":['xxx/1.jpg','xxx/2.jpg'],
    },
    "videos" : {
        "exists":"y",
        "url":['xxx/1.flv','xxx/2.flv'],
    },
    "tag" : ['w3c','nodejs'],
    
    "ip" : "10.10.4.244",
    "last_ip" : "10.10.4.244",
    "visiable":"public",//public:公开的 private:私有的 protected:仅fans可见
    //"state":"draft",//publish:已发布 draft:草稿箱 recyle:回收站 delete:从回收站删除
    // state的方式不太好记录从什么地方删除到回收站
    "is_publish":"y", //y 已发布，n在草稿箱
    "is_recyle":"y",  //y 在回收站，n正常
    "is_del":"y",  //y,彻底删除（等于物理删除），n正常  
    
    "is_recommend":"n",//y,被编辑推到首页
    "top":{
        "is":"n",//y置顶
        "time":1435432234 //置顶时间，置顶顺序

    },

    "allow":{
        "comment" : "y",
        "reward" : "n",
        "love" : "y",
    },
    "support_uids":[1,2],
    "oppose_uids":[1,3],
    "monitor" : {
        "is_audit" : "y",
        "is_pending" : "n",
        "hidden" : {
            "is":"n",//n未被监管隐藏
            "allow_edit":"y",//是否允许编辑
            //"how_many_times":3,//剩余申诉次数 
            //"why":["第一次申诉理由","第二次申诉理由"],//申诉理由
            //"last_time":1437654765,//最近一次申诉时间

        },
        "del" :{
            "is":"n",//n未被监管删除
            "allow_edit":"n",//默认n不允许编辑&&永远不允许编辑
            //"how_many_times":3,
            //"why":["第一次申诉理由","第二次申诉理由"],//申诉理由
            //"last_time":1437654765,//最近一次申诉时间
        }
    },
    
}

```

### 索引信息

```
db.articles.ensureIndex({"aid":1},{unique:true},{"background":true}); //设置唯一
db.articles.ensureIndex({"user_id":1,"add_time":-1},{"background":true});
db.articles.ensureIndex({"notebook_id":1,"add_time":-1},{"background":true});
db.articles.ensureIndex({"channel_id":1,"add_time":-1},{"background":true});
db.articles.ensureIndex({"tag":1,"add_time":-1},{"background":true});
db.articles.ensureIndex({"add_time":-1},{"background":true});
```












