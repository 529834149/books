# columns_apply
直接申请专栏的用户或升级成专栏用户

### 数据结构

```json

{
    "_id" : ObjectId("5677730046d81242120041a7"),
    
    "user_id" : 0,//直接申请专栏的用户为0，从评论用户升级成专栏用户user_id不为0
    "email" : "entere@126.com",
    "mobile" : "",
    "realname" : "",
    "gender" : NumberLong(3),//1男 2女 3保密
    
    "ip" : "127.0.0.1",
    "add_time" : NumberLong(1450668800),
    "qq" : "",
    "homepage":"", //博客地址
    "magnumopus" : "",//代表作
    "code":"fbe3c65180ba42d43c781ee1d2b20da4",//唯一随机码
    "expire" : NumberLong(1450685638),//过期时间
    "is_register":"n",//是否完成注册成功，完成注册后更新这个字段
    "active_time" : 0,//通过和未通过时间
    "active_ip" : "",//通过和未通过编辑ip
    "operator" : "",//审核人员姓名
    "reason" : "",//通过，未通过的原因
    "state":"a",//a 审核中，b 通过 c 未通过  d 待定
    
        
}

```
### 索引信息

```
db.columns_apply.ensureIndex({"code":1},{"background":true}); 
db.columns_apply.ensureIndex({"mobile":1},{"background":true}); 
```
