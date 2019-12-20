# trouble

### 描述

故障记录

### 数据结构

```json
{
    "id" : int(1),
    "user_id" : int(123),
    "aid" : int(123456),
    "openid" : "xxx",//openid
    "billno" : "xxxx",//订单号
    "dillno" : "xxxx",//交易号
    "total_amount" : signed int(100), //金额,单位为分
    "add_time" : bigint(1343842713000),
    "tatal_type" : 1, //1 充值 2 消费
    "from" : "xxxx",//充值或消费来自谁
    "status" : 1,//1 成功 0 失败
    "agent" : "xxx"
}

```

### 索引信息

```json

```