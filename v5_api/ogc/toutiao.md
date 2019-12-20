# 获取头条或焦点

- URL：/w/articles/index

- HTTP请求方式：GET

- 是否登陆：否

```
WEB: //浏览器请求
{
    'channel' => 1 || 2 || 3,  // 1 头条 2 焦点 3 大首页头图
    'page' => 1,
    'limit' => 20, 
}

APP: //app请求
{
    'channel' => 1 || 2 || 3,  // 1 头条 2 焦点 3 大首页头图
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
        "article_id": 3063610,
        "article_title": "“中国意外车祸“和俄反对派领袖”暗杀身亡“",
        "user_id": 59200906,
        "user_name": "bloghot",
        "user_nick": "博客中国热点事件",
        "article_channel_id": 0,
        "article_channel_name": "",
        "article_pic": "http://images.blogchina.com/admin/paltform/59f0a815-0d85-1b92-9c23-beb1fa168676.jpg",
        "article_related": null,
        "article_pubdate": 1466423260,
        "article_link": "http://bloghot.blogchina.com/3063610.html",
        "link": "http://bloghot.blogchina.com/3063610.html",
        "id": 349260,
        "user_info": {
          "_id": {},
          "avatar": "http://avatar.blogchina.com/HeadPic/ff13ad2dddca644dc6484cf1f6d8b1ab",
          "avatar_by_editor": "",
          "rank": "专栏作家",
          "avatar_color": "5185e5"
        }
      },
      {
        "article_id": 3063691,
        "article_title": "王石最终会被扫地出门吗？",
        "user_id": 59199656,
        "user_name": "duanhongbin",
        "user_nick": "端宏斌",
        "article_channel_id": 0,
        "article_channel_name": "",
        "article_pic": "http://images.blogchina.com/admin/paltform/7a85bdee-6684-987b-bb5e-0e72de9ebc07.jpg",
        "article_related": null,
        "article_pubdate": 1466422540,
        "article_link": "http://duanhongbin.blogchina.com/3063691.html",
        "link": "http://duanhongbin.blogchina.com/3063691.html",
        "id": 349258,
        "user_info": {
          "_id": {},
          "avatar": "http://avatar.blogchina.com/HeadPic/3445c67cb90fcf21d7f42ae2ddf219c4",
          "avatar_by_editor": "",
          "rank": "财经作家",
          "avatar_color": "e58951"
        }
      }
    ]
  }
}

```