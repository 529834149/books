# 获取排行

- URL：w/articles/articlehot

- HTTP请求方式：GET

- 是否登陆：否

```
WEB: //浏览器请求 || APP: //app请求
{
    'which' => 'comment_num' || 'support_num' || 'click_num', // 评论数 || 支持数 || 点击数
    'time' => 2 || 7 || 30, // 48小时 || 7天 || 30天
}




```

 

- 返回结果：

```
{
  "code": "A0200",
  "data": {
    "count": 50,
    "list": [
      {
        "article_id": 566325786,
        "article_title": "邢台洪难：累累白骨谁来埋单？",
        "user_name": "yutanfei1",
        "user_nick": "羽谈飛",
        "user_id": 59200540,
        "article_pubdate": 1469265712,
        "supportnum": 1710,
        "user_info": {
          "_id": {},
          "avatar": "http://avatar.blogchina.com/HeadPic/e7ce9726c0f7d9497d4322e551fa0fe9",
          "avatar_by_editor": "",
          "rank": "专栏作家",
          "avatar_color": "5185e5"
        }
      },
      {
        "article_id": 943817227,
        "article_title": "老天爷为何老跟我们过不去？",
        "user_name": "caishenkun",
        "user_nick": "蔡慎坤",
        "user_id": 2602,
        "article_pubdate": 1469233770,
        "supportnum": 1040,
        "user_info": {
          "_id": {},
          "avatar": "http://avatar.blogchina.com/HeadPic/ab4ada51d09c1f26392037c4d315d1b7",
          "avatar_by_editor": "",
          "rank": "每经智库专家 信孚研究院研究员",
          "avatar_color": "5185e5"
        }
      }
    ]
  }
}

```