# subscriber

### 描述


### 用户订阅表  数据结构

```json
{
    "_id" : ObjectId("58d5fa3bc3666e0a1a6dbf7a"),
    "user_id":xxx,//本站给用户生成的唯一id
    "blogchina_uid"/"deviceid" : xxxxx/xxxxxx,   //blogchina_uid or deviceid 登录/未登录
    "pid" : xx  , //订阅应用平台的id
    "pid":'y/n',//是否删除
    "add_tiem":xxx,//添加时间
    "update_time":xxx,//更新时间
    "sort_time":xxx //排序时间
}

```