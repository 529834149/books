# 收藏列表

- URL:/api/v1/user/poetry/collectionList/{userid}/{lastid}

- HTTP请求方式：GET
   
- 请求参数：
 
```
{
    "userid"  :2  // 用户id   
    "lastid" ： 1 //最后一条collectid
}
Header {
        "Authorization" : token  // 登录状态
        }
```

- 返回结果：

```
{
    "code": 0,
    "data": [
        {
            "collectCount": 3,
            "collectid": 47,
            "content": "它让荒原长满风\n它被慌乱推动\n天外，一场要来的雨\n包围了天空\n那些眺望的眼睛\n那些躲避的表情\n和那些长长的闪电相遇\n有一种错觉\n有一种错误\n站在高大的建筑上\n他几乎与闪电一个高度\n他挥舞的手上\n握着闪光的长鞭\n乌云，这头狂奔的猛兽\n不断地把自己撕开\n世界在有限的雨巷里\n彷徨，走近人类\n石头被迫跪下\n睁开一双双玩具眼睛的天边\n鲜血在他们的皮肤里流动\n并且消化、吸收\n没有信仰的祖国\n他的太阳\n也在瑟瑟发抖\n他的词汇成为仇恨",
            "createtime": "2016-11-18 15:14:57",
            "objectid": 9182,
            "recitecount": 0,
            "title": "长满风的荒原"
        },
        {
            "collectCount": 3,
            "collectid": 46,
            "content": "评论点点红",
            "createtime": "2016-11-18 15:14:57",
            "objectid": 9180,
            "recitecount": 0,
            "title": "评论"
        },
        {
            "collectCount": 3,
            "collectid": 45,
            "content": "这里\n境界的天\n舒坦的心情\n它来自远古的水\n就是今天都没有停止\n它还自生生不息的自然\n一块石头\n就是一望无际的大山\n绵延着这里的故事\n一种草药\n就是心境的开启\n张仲景采药的手\n紧紧抓住\n这里的草药\n把境与界\n留到了现在\n但没有人理会\n只能在这里\n孤独的生长",
            "createtime": "2016-11-18 15:14:57",
            "objectid": 9181,
            "recitecount": 0,
            "title": "境界"
        }
    ],
    "msg": "请求成功"
}

```

