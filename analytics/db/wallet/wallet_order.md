# wallet_order

### 描述

订单

### 数据结构

```
CREATE TABLE `wallet_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT, //自增id
  `order_id` char(21) NOT NULL DEFAULT '', //0305+日期+3位毫秒数 如：030520170607173030123
  `from_user` varchar(32) NOT NULL DEFAULT '', //发起订单人，有user_id使用user_id
  `from_status` tinyint(1) unsigned NOT NULL DEFAULT '0', // 订单状态: 0 未完成 1 已完成
  `to_user` varchar(32) NOT NULL DEFAULT '', //接受者，有user_id使用user_id
  `to_status` tinyint(1) unsigned NOT NULL DEFAULT '0',//交易状态: 0 未完成 1 已完成 
  `total_amount` int(11) unsigned NOT NULL DEFAULT '0', //交易金额
  `add_time` bigint(13) unsigned NOT NULL DEFAULT '0', //创建订单时间，时间戳精确到毫秒
  `update_time` bigint(13) unsigned NOT NULL DEFAULT '0',//修改订单时间，精确到毫秒
  `goods` varchar(20) NOT NULL DEFAULT '',//订单商品，红包用文章id，充值为recharge， 提现为withdraw
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',//1为充值 2为提现 3为红包
  `agent` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

```

### 索引信息

```json

```