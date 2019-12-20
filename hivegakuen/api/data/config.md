# 配置信息
config
### 数据结构

```json
config表(网站基本配置表 已经弃用)
{
    "_id" : ObjectId("5a5c3d4c25394417a0007dbc"),
    "telephone" : "0104547781_",//电话
    "problem" : "大苏打ada",//常见问题
    "aboutapp" : "啊大大打算as",//关于app
    "add_time" : "2018-01-15 00:00:00",//创建时间
    "cid" : 1075839104,//唯一标识
    "updated_at" : ISODate("2018-01-15T05:34:04.000Z"),
    "created_at" : ISODate("2018-01-15T05:34:04.000Z")
}
complaint表(投诉建议表)
{
    "_id" : ObjectId("5a5c4c54785731c94e2f3183"),
    "recommendations" : "哒哒哒",//意见内容
    "uid" : 25,// 哪个用户发起的
    "status" : "n",//n未解决 y以解决
    "add_time" : "2017",//时间2018-01-15 02:31:32
    "updated_at" : ISODate("2018-01-15T06:59:45.000Z")
}
```