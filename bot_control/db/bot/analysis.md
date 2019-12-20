# analysis

### 描述

数据分析

### 数据结构

```json
{
    "_id" : ObjectId("57724e99897e84a801297cea"),
    "user" : {
        "user_id" : NumberLong(0),
        "nickname" : "xxxx",
        "avatar" : "xxxx"
    },
    "article" : {
        "c_id" : NumberLong(1),//文章id
        "type" : "科技",//文章类型
        "subject" : "人工智能", //话题
        "from" : "新浪",//来源自哪
        "from_type" : "web",//来源类型 web为来源自网站 chat为来自公众号
    },
    "add_time" : NumberLong(1343842713000),//入库时间
    "start_time" : NumberLong(1343842713000),//开始阅读时间
    "end_time" : NumberLong(1343842713000),//结束阅读时间
    "date_length" : NumberLong(13000),//阅读时长
    "word_num" : NumberLong(1300),//阅读字数
    "platform" : "web",//阅读平台 web为web端 app为app端
    "ip" : "119.255.34.130",
    "agent" : ""
}

```

### 索引信息

```json

```