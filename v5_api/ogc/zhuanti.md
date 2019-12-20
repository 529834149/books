# 获取专题

- URL：/w/articles/dissertationcenter

- HTTP请求方式：GET

- 是否登陆：否

```
WEB: //浏览器请求
{ } //不需要穿参数

APP: //app请求
{
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
    "count": 5,
    "list": [
      [
        {
          "id": 1563,
          "article_id": 0,
          "article_title": "欧公投  黑色星期五？",
          "article_link": "http://zt.blogchina.com/2016zt/yinggongtou/",
          "user_nick": "",
          "article_summary": "6月23日，英国将公投是否退出欧盟，这将对欧盟前途产生重大影响。英国主张退出欧盟的一方认为，退出欧盟将使英国获得更大的经济利益，留在欧盟会遭受经济损失，而主张留在欧盟的一方则认为恰恰相反。",
          "article_pubdate": 1466675491,
          "article_pic": "http://images.blogchina.com/admin/paltform/6d0643f6-1995-92c1-96e7-42c47eba96cc.jpg",
          "editor_id": 30,
          "editor_name": "guojinxin",
          "editor_time": 1466675504,
          "is_del": 0,
          "is_publish": 1,
          "is_recommend": 0,
          "order_by": 0
        },
        {
          "id": 1562,
          "article_id": 0,
          "article_title": "影响中国百年百位诗人评选",
          "article_link": "http://pingxuan.blogchina.com/2016poem",
          "user_nick": "",
          "article_summary": "中国的诗歌经历了漫长的发展与演变过程，从文言文到白话文是中国文化的一次非常重要的历史性变革，每个时代的文化变革，诗歌的作用都举足轻重，具有领航的关键作用。今天，博客中国没有忘记诗歌这一非常重要的语言表达形式，没有忘记那些影响几代人的诗歌阶层，更没有忘记胡适、鲁迅、戴望舒、徐志摩、艾青这些在中国文学史上熠熠生辉的名字，博客中国在倡导全民读书的同时，也开始梳理着具有生命性、创造性与进步意义的精彩生命与思想。",
          "article_pubdate": 1466674940,
          "article_pic": "http://images.blogchina.com/admin/paltform/03f2044f-716f-4ce3-73dc-801c5c52a346.jpg",
          "editor_id": 30,
          "editor_name": "guojinxin",
          "editor_time": 1466674955,
          "is_del": 0,
          "is_publish": 1,
          "is_recommend": 0,
          "order_by": 0
        }
      ]
    ]
  }
}

```