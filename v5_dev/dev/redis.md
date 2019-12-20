# redis
业务中使用到`redis`的地方

`redis`中`key`：

|key               |  类型        |  描述 |
|:--------         | :---------|:------|
|v5:auto:uid|set|自增用户id|
|v5:auto:aid|set|自增文章id|
|v5:auto:nid|set|自增个人分类id|
|v5:auto:cid|set|自增专题id|
|v5:auto:did|set|自增评论id|
|*              |   |        |
|v5:name:xx|set|name与uid对应关系|
|*              |   |        |
|v5:jwt:uid:xx:iat:xx|set|用户登录产生新jwt,多终端退出登录互不影响|
|v5:jwt:md5:xx |hash|uid和创建时间,退出登陆会清理此key |
|*              |   |        |
|v5:num:uid:xx|hash|用户各数量|
|v5:num:aid:xx|hash|文章各数量|
|v5:num:nid:xx|hash|分类各数量|
|v5:num:cid:xx|hash|专题各数量|
|*             |   |        |
|queues:v5:emails|list|邮件队列|
|queues:v5:default|list|默认队列|
|*             |   |        |
|v5:ogc:rank:day:2|list| 排行榜计算2天的文章id列表       |
|v5:ogc:rank:day:7|list| 排行榜计算7天的文章id列表       |
|v5:ogc:rank:day:30|list|排行榜计算30天的文章id列表       |
|v5:ogc:rank:click:2|list| 2天的clcik       |
|v5:ogc:rank:click:7|list|  7天的clcik       |
|v5:ogc:rank:click:30|list| 30天的clcik       |
|v5:ogc:rank:support:2|list| 2天的support       |
|v5:ogc:rank:support:7|list|  7天的support      |
|v5:ogc:rank:support:30|list| 30天的support      |
|v5:ogc:rank:comment:2|list| 2天的comment       |
|v5:ogc:rank:comment:7|list|  7天的comment      |
|v5:ogc:rank:comment:30|list| 30天的comment      |
|*              |   |       |
|v5:ogc:top100|list| 1个月的top100数据      |






### v5:auto:xid   id生成说明

用户`id`生成规则：`redis`产生自增`id`,`key`为`v5:auto:uid`，拿到自增`id`后，根据`SequenceNumber::generateNumber($autoUid,$prefix='',$width=9)`方法生成一个等宽随机`uid`




### v5:jwt:xxxx jwt生成说明

用户登录时会产生`json web token`,`jwt`存在`redis`中,有过期时间，`jwt`是验证用户是否登录的令牌，也是检验是否有`api`权限的标识

```
get v5:jwt:uid:505146376:iat:1450082539
"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOjYwNTczNTQzMiwiZXhwIjoxNDUxMDI5NTc4LCJpYXQiOjE0NTA2Njk1NzgsImp0aSI6IjE0NTA2Njk1Nzg4NTM4IiwiZGF0YSI6eyJ1aWQiOjYwNTczNTQzMn19.OClfCMm8IqkKWVDcaTQZDghBu0XVLQ5aSqRJqazatZ8"

hgetall v5:jwt:md5:AFEB0549A6B245B52D7D55E7C7D919A0
1) "uid"
2) "505146376"
3) "iat"
4) "1450082539"
```




### v5:num:xid:xx num存储说明

用户的点击、支持、反对、评论、偶像、粉丝、文章数、私信未读数、通知未读数

```

['v5:num:uid:12'=>
    [
       'uid'=>'12',
       'click'=>'33',
       'support'=>'2',
       'oppose'=>'3',
       'comment'=>'6'
       'fans'=>'22',//粉丝数
       'friends'=>'4',//偶像数
       'following'=>'2'//我关注的专题数
       'article'=>'',
       'inbox'=>'2',//私信未读数
       'notice'=>'3',通知未读数
    ]
]

```


文章的点击、支持、反对、评论数

```

['v5:num:aid:12'=>
    [
       'aid'=>'12',
       'click'=>'33',
       'support'=>'21',
       'oppose'=>'3',
       'comment'=>'63',
    ]
]

```

个人分类下的粉丝、文章数

```

['v5:num:nid:12'=>
    [
       'nid'=>'12',
       'fans'=>'22',
       'article'=>'33',
       
    ]
]

```



专题下的粉丝、文章数

```

['v5:num:cid:12'=>
    [
       'cid'=>'12',
       'fans'=>'22',
       'article'=>'33',
       
    ]
]

```

### queues:v5:xx 队列
参见 [queue](./queue.md)