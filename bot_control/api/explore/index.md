# 发现

- URL：bot.blogchina.com/api/explore

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "load": "slip",  //页面加载方式，分为滑动slip，分页page，默认为滑动加载,可以不传
    "first_time": 1490778000,  //滑动加载时，下拉刷新需要第一条数据时间first_time,上拉加载时需要最后一条数据时间last_time，初始化时可不传
    "limit": 10  //滑动或分页加载时,每次加载条数，初始化可不传，默认为10条
    "page": 3   //分页加载时需要，初始化时可不传，默认第1页
}

```
 
- 返回结果：

```
滑动返回结果:
{
    
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    
    "data": {
        //数据信息
        "items" [{
                "title": "如何真正掌握品牌思维？发现身边的案例，并进行刻意练习",
                "add_time": "2017-03-22",
                "nick_name": "好神奇",
                "lead_image_url": "http://images.blogchina.com/wx_bot/58d4f1e0d57421490350560.jpg!m240",
                "c_id": 739953152,
                "sort_time": 1490092441346,  //滑动加载时返回每条文章的排序时间
                "is_suregrab" : 'y/n',    //y抓取  n未抓取
                "is_havesource" : 'y/n',  //是否有资源
                "articlesource" : '经济日报',  //当有资源时,来源平台
                "msg_from" : 'http://mp.weixin.qq.com/s?__biz=MzAwNDMyMDg0NA'  //没有资源,原文地址
            },
            {
                "title": "Android 开发者预览版终于推出啦！官方介绍新特性",
                "add_time": "2017-03-27",
                "nickname": "唐启胤",
                "lead_image_url": "http://images.blogchina.com/wx_bot/58d8765add48a1490581082.jpg!m240",
                "c_id": 748415488,
                "sort_time": 1490581082898,
                "is_suregrab" : 'y/n',    //y抓取  n未抓取
                "is_havesource" : 'y/n',  //是否有资源
                "articlesource" : '经济日报',  //当有资源时,来源平台
                "msg_from" : 'http://mp.weixin.qq.com/s?__biz=MzAwNDMyMDg0NA'  //没有资源,原文地址
            },
        ],
    }
}

```

```
分页返回结果:
{
    "meta":{
        "code": 200,   //返回码
        "message": "ok"
    }
    "data":{
        "items": [{
                    "title": "Android 开发者预览版终于推出啦！官方介绍新特性",
                    "add_time": "2017-03-27",
                    "nickname": "nickname": "唐启胤",
                    "lead_image_url": "http://images.blogchina.com/wx_bot/58d8765add48a1490581082.jpg!m240",
                    "c_id": 748415488,
                    "sort_time": 1490581082898
                },
                {
                    "title": "如何真正掌握品牌思维？发现身边的案例，并进行刻意练习",
                    "add_time": "2017-03-22",
                    "nick_name": "好神奇",
                    "lead_image_url": "http://images.blogchina.com/wx_bot/58d4f1e0d57421490350560.jpg!m240",
                    "c_id": 748415488,
                    "sort_time": 1490581082898
                }
            ],
         //分页信息
         "page": {
                "page": 3,  //当前页码
                "limit": 10,
                "total": 500  //总条数
            }
    }
}
```
- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
