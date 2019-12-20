# 获取频道

- URL：w/articles/channel

- HTTP请求方式：GET

- 是否登陆：否

```
WEB: //浏览器请求 || APP: //app请求
{
    'pindao' => 1~18, //频道对应的id
    'limit' => 10,
    'page' => 1,
}

APP: //app请求
{
    'pindao' => 1~18, //频道对应的id
    'is_app' => 'y', //必须
    'uptime' => 1466346534, //下拉加载最新
    'downtime' => 1466346534, //上拉加载更多
    // uptime  downtime 至少要传一个
    'limit' => 10, 
}




```

 

- 返回结果：

```
{
  "code": "A0200",
  "data": {
    "count": 10000,
    "list": [
      {
        "id": 3833,
        "article_id": 174266,
        "user_id": 2744,
        "article_title": "企业如何加强对工人的管理",
        "article_subtitle": "",
        "article_summary": "实践证明，重复性的生产劳动，如车床工人天长日久、春去秋来地开车床；银行的职工年复一年地在顾客的存折上画几个阿拉伯数字……，尽管这对社会主义建设是完全必要的，不可缺少的，但因无限次地重复，容易使人产生厌倦，由于厌倦会使部分人产生消极怠工行为，这是一种不利现象。怎样使职工的劳动丰富化，这就应该引起领导者们的重视了。使职工工作丰富化的目的，在于对职工习惯性作业注入新的、高度挑战性的成就感，使职工对",
        "notebook_id": 1002735,
        "article_pubdate": 1157681640,
        "article_pic": "",
        "article_video": "",
        "user_name": "xiaoyii",
        "user_nick": "徐百万",
        "user_info": {
          "avatar": "http://avatar.blogchina.com/HeadPic/c039c3b885a3af0995550fbe3ecfad42",
          "avatar_by_editor": "",
          "rank": "专栏作家",
          "avatar_color": "e58951"
        }
      },
      {
        "id": 2,
        "article_id": 174258,
        "user_id": 5095,
        "article_title": "抓好小城镇建设    加快城市化进程",
        "article_subtitle": "",
        "article_summary": "作为一个城市管理者和建设者,看见日新月易的变化确实很感动!",
        "notebook_id": 1005038,
        "article_pubdate": 1157680560,
        "article_pic": "",
        "article_video": "",
        "user_name": "wuxiaobao",
        "user_nick": "筝冰",
        "user_info": {
          "avatar": "",
          "avatar_by_editor": "",
          "rank": "专栏作家",
          "avatar_color": "5185e5"
        }
      }
    ]
  }
}

```

