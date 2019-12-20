# detailed

### 描述

账单明细

### 数据结构

```json
{
    "id" : int(1),
    "user_id" : int(123),
    "billno" : "xxxx",//订单号
    "dillno" : "xxxx",//交易号
    "total_amount" : signed int(100), //金额,单位为分
    "add_time" : bigint(1343842713000),
    "total_type" : 1, //1 充值 2 消费
    "from" : "xxxx",//充值或消费来自谁
    "agent" : "xxx"
}

```

### 索引信息

```json

```