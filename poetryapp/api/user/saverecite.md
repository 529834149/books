# 发表朗诵

- URL:/api/v1/user/recite/addrecite

- HTTP请求方式：post
   
- 请求参数：
 
```
Header {
        "Authorization" : token  // 登录状态
        }
{
    poetryid:9291   //诗歌id
    url:/poetry_test/mic/62/20170224113816.wav //音频路径
    reciteuserid:62  //朗诵者ID
    poetryuserid:62  //诗歌发布者ID
    address:天涯海阁 //地理位置地址信息
    recitetime:19 //朗诵时长
    backgroundimg:/poetry_bokee/common/6.jpg //背景图
    recitenickname:博客中国因你而变 //朗诵者昵称
    poetrytitle:一颗开花的树          //朗诵诗标题
    poetrynickname:博客中国因你而变 //诗发布者昵称
    author:席慕容 //诗作者名称
    type:1  //朗诵分类：1：普通 2：方言 3：儿童
    longitude：121.642017     // 经度
    latitude：29.913989     //维度
}
```

- 返回结果：

```
{
    "code": 0,
    "msg": "请求成功"
}

```

