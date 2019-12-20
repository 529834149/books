# 获取用户关注列表

- URL：/follow/622586376/friends

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：

```
{
    "fans_uid":参数见路由,
    "page":1,
    "limit": 10 
      
}
```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data": [
    {
        ["uid"]=>
        int(67823)
        ["accout"]=>
        string(9) "hfhuobing"
        ["email"]=>
        string(23) "hfhuobing@blogchina.com"
        ["name"]=>
        string(9) "hfhuobing"
        ["nickname"]=>
        string(9) "博弈弈"
        ["avatar"]=>
        string(68) "http://avatar.blogchina.com/HeadPic/63b840f87ad10e0f47ef9a6e57cc02e1"
        ["avatar_by_editor"]=>
        string(72) "http://avatar.blogchina.com/HeadPic/63b840f87ad10e0f47ef9a6e57cc02e11380"
        ["add_time"]=>
        int(1323792000)
        ["reg_from"]=>
        string(9) "blogchina"
        ["intro"]=>
        string(6) "nihaoa"
        ["homepage"]=>
        string(0) ""
        ["rank"]=>
        string(24) "博客中国专栏作家"
        ["blog_name"]=>
        string(6) "博弈"
        ["group_id"]=>
        int(200)
        ["avatar_color"]=>
        string(6) "e58951"
        ["user_url"]=>
        string(28) "http://hfhuobing.blogcore.cn"
        ["follow_add_time"]=>
        int(1470799287)
      },{
        ["uid"]=>
        int(100)
        ["accout"]=>
        string(8) "teamsway"
        ["email"]=>
        string(23) "gaoyining@blogchina.com"
        ["name"]=>
        string(8) "teamsway"
        ["nickname"]=>
        string(6) "甜夏"
        ["avatar"]=>
        string(68) "http://avatar.blogchina.com/HeadPic/398ef1f085dcf20554eddc2b7bfe020d"
        ["avatar_by_editor"]=>
        string(0) ""
        ["add_time"]=>
        int(0)
        ["reg_from"]=>
        string(9) "blogchina"
        ["intro"]=>
        string(180) "2003年在博客中国开专栏，2009年加入博客中国。博客中国宗旨：每天5分钟，给思想加油！致力于给思想加油的人们，请加我的微信：ibokee"
        ["homepage"]=>
        string(0) ""
        ["rank"]=>
        string(12) "专栏作家"
        ["blog_name"]=>
        string(27) "甜夏的博客中国专栏"
        ["group_id"]=>
        int(200)
        ["avatar_color"]=>
        string(6) "5185e5"
        ["user_url"]=>
        string(27) "http://teamsway.blogcore.cn"
        ["follow_add_time"]=>
        int(1470799287)
      }...
   ]   
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)