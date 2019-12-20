# actives_data
邮件相关数据

### 数据结构

```json

{
    "_id" : ObjectId("5677b26e46d81243120041a7"),
    "uid" : NumberLong(605735432),
    "email" : "entere@126.com",
    "view" : "mail_confirm", //邮件视图，也可当作邮件类型
    "code" : "fbe3c65180ba42d43c781ee1d2b20da4",
    "add_time" : NumberLong(1450685038),
    "expire" : NumberLong(1450685638),
    "ip" : "127.0.0.1",
    "active_time" : NumberLong(0),//验证时间
    "active_ip" : "",//验证ip
    "updated_at" : ISODate("2015-12-21T08:03:58.920Z"),
    "created_at" : ISODate("2015-12-21T08:03:58.920Z")
}

```

### 索引

```
db.actives_data.ensureIndex({"code":1},{"background":true});

```
