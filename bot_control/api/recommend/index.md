# 我的推荐

- URL：bot.blogchina.com/api/recommend

- HTTP请求方式：GET

- 是否登陆：否

- 滚动加载请求参数：

```
//说明：下拉刷新时传first_time，加载更多时传last_time 
{
    "uid": 614198272,            //必传参数,uid(int)可换成uname(string)
    "first_time": 1490778000000, //first_time为下滑时第一条数据的时间
    "last_time": 1490698030000,  //last_time为上拉时最后一条的时间
    "load": "slip"               //加载方式可以不传,默认为滑动加载slip，分页加载page
} 

``` 

- 滚动加载返回结果：

```
{  
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "data":{ 
        //数据信息
        "items": 
        [
            { 
                "title": "博客中国",
                "add_time": "2017-03-22",
                "nickname": "好神奇",
                "lead_image_url": "http://images.blogchina.com/wx_bot/58d4f1e0d57421490350560.jpg!m240",
                "c_id": 739953152,
                "sort_time": 1490092441346  //滑动加载时返回每条文章的排序时间
            },
            {
                "title": "Android O开发者预览版终于推出啦！官方介绍新特性",
                "add_time": "2017-03-27",
                "nickname": "唐启胤",
                "lead_image_url": "http://images.blogchina.com/wx_bot/58d8765add48a1490581082.jpg!m240",
                "c_id": 748415488,
                "sort_time": 1490581082898
            }
        ],
    }
}

```
    
- 分页加载请求参数：

```
{
    "uid": 614198272,        //必传参数,uid(int)可换成uname(string)
    "page": 5,              //请求页数,分页加载时需要,初始化可以不传,默认第1页
    "limit": 10,          
} 

``` 

- 分页加载返回结果：

```
{ 
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    }, 
    "data":{ 
        //分页信息
        "page": {
            "limit": 10,   
            "total": 500,
            "page": 1
        }
        //数据信息
        "items": 
        [
            { 
                "title": "博客中国",
                "add_time": "2017-03-22",
                "nickname": "好神奇",
                "lead_image_url": "http://images.blogchina.com/wx_bot/58d4f1e0d57421490350560.jpg!m240",
                "c_id": 739953152,
                "sort_time": 1490092441346  //滑动加载时返回每条文章的排序时间
            },
            {
                "title": "Android O开发者预览版终于推出啦！官方介绍新特性",
                "add_time": "2017-03-27",
                "nickname": "唐启胤",
                "lead_image_url": "http://images.blogchina.com/wx_bot/58d8765add48a1490581082.jpg!m240",
                "c_id": 748415488,
                "sort_time": 1490581082898
            }
        ]
    }
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
