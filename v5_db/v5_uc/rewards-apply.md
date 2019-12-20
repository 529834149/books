# rewards_apply
申请赞赏用户

### 数据结构

```json

{
    "_id" : ObjectId("5677730046d81242120041a7"), 
    "uid" : 12145,
    "reg_from":"blogchina",
    "email" : "entere@126.com",
    "mobile" : "13333333333",
    "realname" : "姓名", 
    "nickname":"昵称",
    "qq" : "1222222",   
    "weixin":"5556666",
    "idcard":"152456358978954578",//身份证号码 
    "avatar":"ssss.jpg",//头像
    "rank":"专栏作家",//头衔
    "ip" : "127.0.0.1",
    "add_time" : NumberLong(1450668800),

    "active_time" : 0,//通过和未通过时间
    "active_ip" : "",//通过和未通过编辑ip
    "operator" : "",//审核人员姓名 
    "state":"a",//a 审核中，b 通过 c 未通过  d 待定 
}

```
### 索引信息

```
db.rewards_apply.ensureIndex({"add_time":1},{"background":true}); 
db.rewards_apply.ensureIndex({"uid":1},{"background":true}); 
```
