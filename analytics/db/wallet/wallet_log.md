# wallet_log

### 描述

红包日志

### 数据结构

```json
{
    "_id" : ObjectId("57724e99897e84a801297cea"),
    "order_id" : '030520170607173030123',
    "deal_id" : '020420170607173030123',
    "from_user" :  NumberLong(1),
    "from_status" :  NumberLong(1),// 订单状态: 0 未完成 1 已完成
    "to_user" : "xxxx",//订单号
    "to_status" : "xxxx",//交易号
    "total_amount" : NumberLong(100), //金额,单位为分
    "goods" : "xxx",//订单商品，红包用文章id，充值为recharge， 提现为withdraw
    "add_time" : bigint(1343842713000),
    "type" : 1, //1为充值 2为提现 3为红包
    "agent" : "xxx"
}

```

### 索引信息

```json

```