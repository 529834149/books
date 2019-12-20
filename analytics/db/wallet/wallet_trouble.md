# wallet_trouble

### 描述

故障记录 (交易成功，修改数据库失败)

### 数据结构

```json
{
    "_id" : ObjectId("57724e99897e84a801297cea"),
    "order_id" : '030520170607173030123',
    "deal_id" : '020420170607173030123',
    "from_user" :  NumberLong(1),
    "to_user" : "xxxx",//订单号
    "total_amount" : signed int(100), //金额,单位为分
    "add_time" : bigint(1343842713000),
    "type" : 1, //1为充值 2为提现 3为红包
    "to_status" : 1, //交易状态
}

```

### 索引信息

```json

```