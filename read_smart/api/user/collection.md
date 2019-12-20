# 用户收藏列表

- URL：sr.blogchina.com/api/user/collection

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
    "token" : "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOjUxMjc2NTk4NCwi",   //必须参数
    "aids" : "538718,538731,661866"  //有收藏文章id拼接成的字符串
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
                        "aid" : 31,  //文章id
                        "category" : "娱乐", //文章所属栏目
                        "title" : "无人驾驶AI战略提振百度收涨2% 引领中概股信息技术板块",  //文章题目
                        "summary" : "在周三举办的2017年百度AI开发者大会上，百度视频展现了自动驾驶技术的成果",  //文章摘要
                        "pretty_time" : "三天前",
                        "template_style" : 3,  //1-5与单个应用列表相同含义
                        "platform_id" :32,   //平台id
                        "platform_name" :"爱范儿",  //平台名称
                        "platform_icon" : "http://avatar.blogchina.com/v5_avatar/578cacf0d44111468837104.jpg",  //平台icon
                        "collection_num" : 3 //收藏数
                },
                {
                        "aid" : 31,  //文章id
                        "category" : "娱乐", //文章所属栏目
                        "title" : "无人驾驶AI战略提振百度收涨2% 引领中概股信息技术板块",  //文章题目
                        "summary" : "在周三举办的2017年百度AI开发者大会上，百度视频展现了自动驾驶技术的成果",  //文章摘要
                        "pretty_time" : "三天前",
                        "template_style" : 1,  //1-5与单个应用列表相同含义
                        "article_img" :{
                            "url":"http://img.qdaily.com/uploads/20170525131023parSl8hcud0txQq1.jpg-WebpWebW640"
                        },
                        "platform_id" :32,   //平台id
                        "platform_name" :"爱范儿",  //平台名称
                        "platform_icon" : "http://avatar.blogchina.com/v5_avatar/578cacf0d44111468837104.jpg",  //平台icon
                        "collection_num" : 3 //收藏数
                }
            ]
        }        
    }


```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)