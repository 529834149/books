# 收藏列表或收藏与点评之差

- URL：bot.blogchina.com/api/collection

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
    "token" : "xxxx",
    differ : NumberLong(1)或NumberLong(0)//1为查询差集 0为查询收藏列表
    //当differ为0时传下面的参数
    "first_time": 1490778000000, //first_time为下滑时第一条数据的时间,last_time为上拉时最后一条的时间
    "page": 1,  //
    "limit": 10,
    "load": "slip" //加载方式可以不传,默认为滑动加载slip，分页加载page
```

 

- 返回结果：

```json
//差集
{
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "data": {
        "count": 100//收藏但未点评的数量
    }

}

```

```
列表
{
    "meta": {
        "code": 200,    //结果码，必需
        "message": "ok"
    },
    "data": {
        "items":
        [
            {
                "_id": "58fecf62f229d116e4006733",
                "url": "http://tool.chinaz.com/Tools/unixtime.aspx",//抓取前的url
                "add_time": 1493093943000,
                "update_time": 1493093943000,
                "ip": "172.16.10.212",
                "last_ip": "172.16.10.212",
                "user": {
                  "user_id": 485567030,
                  "nickname": "klaklakl",
                  "avatar": "kakakka.alajlal"
                },
                "article": {
                  "c_id": 521858057,
                  "title": "【篮球体能】球场上最亮的星——锋卫摇摆人",
                  "describe": " 一个全明星级别的锋卫摇摆人是可遇而不可求的",
                  "article_img": "xxx",
                  "url": "xxx",
                  'is_suregrab' : '',
                  'is_havesource' : '',
                  'articlesource' : '',
                  'msg_from' : ''
                },
                "status": "normal",//normal 收藏  cancel 为取消收藏
                "from": "app",
                "agent": "xxx",
                "updated_at": "2017-04-25 12:42:38",
                "created_at": "2017-04-25 12:24:02",
                "common": 0//收藏未点评
              },
              {
                "_id": "58fecf62f229d116e4006733",
                "url": "http://tool.chinaz.com/Tools/unixtime.aspx",
                "add_time": 1493093943000,
                "update_time": 1493093943000,
                "ip": "172.16.10.212",
                "last_ip": "172.16.10.212",
                "user": {
                  "user_id": 485567030,
                  "nickname": "klaklakl",
                  "avatar": "kakakka.alajlal"
                },
                "article": {
                  "c_id": 521858057,
                  "title": "【篮球体能】球场上最亮的星——锋卫摇摆人",
                  "describe": " 一个全明星级别的锋卫摇摆人是可遇而不可求的",
                  "article_img": "xxx",
                  "url": "xxx",
                  'is_suregrab' : 'y', // y 抓取 n 未抓取
                  'is_havesource' : 'y', // y 有资源 n 没有资源
                  'articlesource' : 'xxx',//当有资源时,来源取这个
                  'msg_from' : ''//当没有资源时,这个是推荐人
                },
                "status": "normal",//normal 收藏  cancel 为取消收藏
                "from": "app",
                "agent": "xxx",
                "updated_at": "2017-04-25 12:42:38",
                "created_at": "2017-04-25 12:24:02",
                "common": 0//收藏未点评
              }
        ],
        "count" : 100
    }
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)