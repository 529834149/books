# 个人列表页--收录

- URL：bot.blogchina.com/api/page/recommend

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
    "first_time": 1490778000000, //first_time为下滑时第一条数据的时间,last_time为上拉时最后一条的时间
    "page": 1,  //
    "limit": 10,
    "load": "slip",//加载方式可以不传,默认为滑动加载slip，分页加载page
    "uid" : 653335599   //用户id ，必传参数
```

 

- 返回结果：

```json
{
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "data": {
        "items" [{
                "title": "如何真正掌握品牌思维？发现身边的案例，并进行刻意练习",
                "add_time": 1490092441346,  //滑动加载时返回每条文章的排序时间
                "pretty_time": "3天前",  //
                "nick_name": "好神奇",
                "lead_image_url": "http://images.blogchina.com/wx_bot/58d4f1e0d57421490350560.jpg!m240",
                "c_id": 739953152,
                "from" : '唐启胤'，   //推荐人
                "is_suregrab" : 'y/n',    //y抓取  n未抓取
                "is_havesource" : 'y/n',  //是否有资源
                "articlesource" : '经济日报',  //当有资源时,来源平台
                "msg_from" : 'http://mp.weixin.qq.com/s?__biz=MzAwNDMyMDg0NA'  //没有资源,原文地址
            },
            {
                "title": "Android 开发者预览版终于推出啦！官方介绍新特性",
                "add_time": 1490092441346,  //滑动加载时返回每条文章的排序时间
                "pretty_time": "3天前",  //
                "nickname": "唐启胤",
                "lead_image_url": "http://images.blogchina.com/wx_bot/58d8765add48a1490581082.jpg!m240",
                "c_id": 748415488,
                "from" : '唐启胤'，   //推荐人
                "is_suregrab" : 'y/n',    //y抓取  n未抓取
                "is_havesource" : 'y/n',  //是否有资源
                "articlesource" : '经济日报',  //当有资源时,来源平台
                "msg_from" : 'http://mp.weixin.qq.com/s?__biz=MzAwNDMyMDg0NA'  //没有资源,原文地址
            },
        ]
    }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)