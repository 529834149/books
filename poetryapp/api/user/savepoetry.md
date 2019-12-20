# 发表诗歌

- URL:/api/v1/user/poetry/addpoetry

- HTTP请求方式：post
   
- 请求参数：
 
```
Header {
        "Authorization" : token  // 登录状态
        }
{
userid:26   //注意大小写
title:绝句
content:两个黄鹂鸣翠柳
dynasty:唐代
address:天涯海阁
nickname:芳芳
author:麻老师
type:1,2     //诗歌类型：1：古代诗  2：现代诗  3：外文诗 4 儿童诗
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

