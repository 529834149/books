# 结算账单表
bill
### 数据结构

```mysql
+-------------------+---------------+------+-----+---------+----------------+
| Field             | Type          | Null | Key | Default | Extra          |
+-------------------+---------------+------+-----+---------+----------------+
| id                | int(11)       | NO   | PRI | NULL    | auto_increment |
| date              | int(11)       | NO   |     | NULL    |                |
| settlement_total  | decimal(10,0) | YES  |     | NULL    |                |
| settlement_num | int(11)       | YES  |     | NULL    |                |
| city              | varchar(255)  | YES  |     | NULL    |                |
| agent_id          | int(11)       | YES  |     | NULL    |                |
+-------------------+---------------+------+-----+---------+----------------+
date:结账时间
settlement_oddnumbers:对账单号
settlement_total:结算金额
settlement_num:结算数量
city:所在城市
agent_id :供应商ID
```