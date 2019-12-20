# wallet_log

### 描述

红包明细日志

### 数据结构

```json
{
    "_id" : ObjectId("57724e99897e84a801297cea"),
    "user_id" :  NumberLong(1),
    "aid" :  NumberLong(1),//转发有aid,充值为空
    "billno" : "xxxx",//订单号
    "dillno" : "xxxx",//交易号
    "total_amount" : signed int(100), //金额,单位为分
    "add_time" : bigint(1343842713000),
    "tatal_type" : 1, //1 充值 2 消费
    "from" : "xxxx",//充值或消费来自谁
    "dill_status" : "success", //success 成功 fail 失败
    "agent" : "xxx"
}

```

### 索引信息

```json

```