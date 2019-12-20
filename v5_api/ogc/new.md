# 获取最新文章

- URL：/w/articles/newesthome

- HTTP请求方式：GET

- 是否登陆：否

```
WEB: //浏览器请求
{
    'page' => 1,
    'limit' => 20, 
}

APP: //app请求
{
    'is_app' => 'y', //必须
    'uptime' => 1466346534, //下拉加载最新
    'downtime' => 1466346534, //上拉加载更多
    // uptime  downtime 至少要传一个
    'limit' => 20, 
}

```

 

- 返回结果：

```
{
  "code": "A0200",
  "data": {
    "count": 20,
    "list": [
      {
        "article_id": 3063083,
        "article_title": "侠义中国人（九）",
        "user_id": 59199320,
        "user_name": "a3129704",
        "user_nick": "高士",
        "article_channel_id": 14,
        "article_channel_name": "社会",
        "article_pubdate": 1466377366,
        "id": 268168,
        "user_info": {
          "_id": {},
          "avatar": "",
          "avatar_by_editor": "",
          "rank": "专栏作家"
        }
      },
      {
        "article_id": 3063082,
        "article_title": "父亲节向球星背后的男人致敬",
        "user_id": 59199808,
        "user_name": "wfengzi",
        "user_nick": "wfengzi",
        "article_channel_id": 15,
        "article_channel_name": "杂谈",
        "article_pubdate": 1466377174,
        "id": 268171,
        "user_info": {
          "_id": {},
          "avatar": "http://avatar.blogchina.com/HeadPic/8fcd81bfa29dc544842936f4d93633e8",
          "avatar_by_editor": "",
          "rank": "专栏作家"
        }
      }
    ]
  }
}

```