# 保存文章分享关系

- URL：bot.blogchina.com/api/sharetrack/spread

- HTTP请求方式：POST

- 是否登陆：是

- 注意事项:由于neo4j不支持带"-"的节点名,所以保存分享关系将微信openid中的"-"替换为"\_\_\_"(3个"_"),如"obHnZszlVe1AdUJ0-uoCicB6LRuc"替换为"obHnZszlVe1AdUJ0___uoCicB6LRuc"

- 请求参数：

```
    "source": '15431364',  //分享用户微信openid
    "target": '14634645',   //必传参数,目标用户微信openid
    "aid": '15462134',       //必传参数,分享文章id
    "source_nickname": "唐启胤",    //分享用户昵称
    "target_nickname":"好神奇",   //目标用户昵称
    "source_avatar" : "http://avatar.blogchina.com/HeadPic/63b840f87ad10e0f47ef9a6e57cc02e1",   //分享用户头像
    "target_avatar" : "http://avatar.blogchina.com/HeadPic/63b840f87ad10e0f47ef9a6e57cc02e1"    //目标用户头像
    
```

 

- 返回结果：

```json
{
    "meta": {
        "code": 200,   
        "message": "ok"
    },
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)