# 用户timeline列表

- URL：sr.blogchina.com/api/user/59469462/timeline

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
    "token" : "1546467545",   //必须参数，用户id，用户登录才能看到
    "first_time" : 1341643144521  //可选参数，初始化时可以不传，下拉刷新需要第一条数据时间first_time,上拉加载需要最后一条数据时间last_time
```

 

- 返回结果：

```
    {
        "meta" :{
            "code" : 200,
            "message" : "ok",
        },
        "data"{ 
            "items"[
                {
                    "desc" :{
                        "appid" : 31,
                        "name" : "知乎日报",
                        "column" : "top15",
                        "icon" : "http://a_icon_haoqixin.jpg",
                        "update_time" : "30分钟前"
                    },
                    "list" :[
                        {
                               "aid" : 1646467446,
                               "title" : "看图：这里是过去24小时内发生的重要的事",
                               "summary" : "我们每天都会摘取重要的新闻图片",
                               "column" : "城市",
                               "add_time" : 1497569414787,
                               "from_url" : "http://www.qdaily.com/articles/41224.html",
                               "collection_num" : 24,
                               "is_collection" : "normal/cancel",  //normal:收藏  cancel:未收藏
                               "template_style" : 1,   //template_style  1表示大图  2表示小图  3表示没图  4表示图集  5表示视频
                               "article_img" :{
                                    "url" : "http://img.qdaily.com/uploads/20170525131023parSl8hcud0txQq1.jpg-WebpWebW640",
                                    "height" : "150px",
                                    "width" : "80px"
                                }
                        }
                    ]
                },
                {
                    "desc" :{
                        "appId" : "eyepetizer",
                        "name" : "开眼Eyepetizer",
                        "column" : "生活",
                        "icon" : "http://a_icon_haoqixin.jpg",
                        "update_time" : "1小时前",
                    },
                    "list" :[
                        {
                                "aid" : 1643413458,
                                "title" : "阿汤哥的《美国制造》首曝预告",
                                "summary" : "这一次，不那么酷帅",
                                "column" : "娱乐",
                                "add_time" : 1497569414787,
                                "from_url" : "http://www.qdaily.com/articles/41693.html",
                                "collection_num" : 57,   //收藏人数
                                "is_collection" : "normal/cancel",  //当前用户是否收藏
                                "template_style" : 1,   //template_style  1表示大图  2表示小图  3表示没图  4表示图集  5表示视频
                                "article_img" :{
                                    "url" : "http://img.qdaily.com/uploads/20170606161525Mkod57BQwtWbKDG4.jpg-WebpWebW640",
                                    "height" : "200px",
                                    "width" : "300px",
                                }
                        },
                        {
                                "aid" : 1643467378,
                                "title" : "在《猩球崛起3》上映前，你先能看到前传小说和漫画",
                                "summary" : "填充第二、三部剧情之间的两年时间差",
                                "column" : "娱乐",
                                "add_time" :1497569414787,
                                "from_url" : "http://www.qdaily.com/articles/41693.html",
                                "collection_num" : 43,
                                "is_collection" : "normal/cancel",
                                "template_style" : 1,   //template_style  1表示大图  2表示小图  3表示没图  4表示图集  5表示视频
                                "article_img" : {
                                    "url" : "http://img.qdaily.com/uploads/20170606161525Mkod57BQwtWbKDG4.jpg-WebpWebW640",
                                    "height" : "200px",
                                    "width" : "300px",
                                }
                        }
                    ]
                }
            ]
        }        
    }


```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)