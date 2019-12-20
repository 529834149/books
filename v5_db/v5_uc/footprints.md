# footprints
最来访问，登录后访问主页和文章详情页时记录，其它页暂不记录

### 数据结构


```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "fid":3432344,
    "auto_fid" : 12,
    "user_id" : 52,
    "which":"article",//home|article 主页还是详情页
    "referer":"",//来源url，从哪儿来
    "data":[
        "to_user_id":54,//访问了谁
        "to_article_id":485747372,
    ],
    "add_time" : 1417663213,
    "state":"a",//用户自己操作a正常 b隐藏 c删除 
    "monitor" : { //监管操作
        "is_hidden" : "n",
        "is_del" : "n"
    },  
}

```

### 索引信息

```
db.footprints.ensureIndex({"user_id":1,"add_time":-1},{"background":true}); 
db.footprints.ensureIndex({"data.tu_user_id":1,"add_time":-1},{"background":true}); 

```