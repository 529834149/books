# collections

### 描述

收藏

### 数据结构

```json
{
    "_id" : ObjectId("57724e99897e84a801297cea"),
    "url" : 'http://xxxxxxxx',//抓取前url
    "add_time" : NumberLong(1343842713000),
    "update_time" : NumberLong(1343842713000),
    "ip" : "119.255.34.130",
    "last_ip" : "119.255.34.130",
    "user" : {
        "user_id" : NumberLong(0),
        "nickname" : "xxxx",
        "avatar" : "xxxx"
    },
    "article" : {
        "c_id" : NumberLong(1),//文章id
        "title" : "xxxx",
        "describe" : "xxxxx",
        "article_img" : "xxxx",
        "url" : "xxxx",
        'is_suregrab' : 'y', // y 抓取 n 未抓取
        'is_havesource' : 'y', // y 有资源 n 没有资源
        'articlesource' : 'xxx',//当有资源时,来源取这个
        'msg_from' : ''//当没有资源时,这个是推荐人
    },
    "status" : "normal",//normal 收藏  cancel 为取消收藏
    "from" : "app",//app 来自app   web 来自web
    "agent" : ""
}

```

### 索引信息

```json

```