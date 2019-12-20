# wallet_manage

### 描述

钱包

### 数据结构

```
CREATE TABLE `wallet_manage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',//用户id
  `balance` int(11) unsigned NOT NULL DEFAULT '0',//余额
  `share_money` int(11) NOT NULL DEFAULT '0',//设置的分享金额，如果设置随机金额，便使用这个
  `is_random` tinyint(1) NOT NULL DEFAULT '0',//是否采取随机金额： 0 否 1 是
  `min_money` int(11) NOT NULL DEFAULT '100', //随机金额的最小值，默认是100分
  `max_money` int(11) NOT NULL DEFAULT '1000',//随机金额的最大值，默认10元，1000分
  `add_time` bigint(13) unsigned NOT NULL DEFAULT '0',//添加时间，精确到毫秒
  `update_time` bigint(13) unsigned NOT NULL DEFAULT '0',//更改时间，精确到毫秒
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8

```

### 索引信息

```json

```