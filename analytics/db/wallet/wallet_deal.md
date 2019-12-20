# wallet_deal

### 描述

交易

### 数据结构

```
CREATE TABLE `wallet_deal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `deal_id` char(21) NOT NULL DEFAULT '',//交易号：0204+日期+3位毫秒数 如：020420170607173030123
  `order_id` char(21) NOT NULL DEFAULT '',//订单号：0305+日期+3位毫秒数 如：030520170607173030123
  `from_user` varchar(32) NOT NULL DEFAULT '',//发起订单人，有user_id使用user_id
  `to_user` varchar(32) NOT NULL DEFAULT '',//接受者，有user_id使用user_id
  `total_amount` int(11) unsigned NOT NULL DEFAULT '0',//交易金额
  `pay_type` tinyint(1) unsigned NOT NULL DEFAULT '1',//支付方式： 1 微信 2 支付宝 3 银行卡 4 其他
  `pay_time` bigint(13) unsigned NOT NULL DEFAULT '0',//支付时间，精确到毫秒
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1',//1为充值 2为提现 3为红包
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

```

### 索引信息

```json

```