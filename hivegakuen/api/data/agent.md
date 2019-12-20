# 代理商
agent
### 数据结构

```mysql

 agent_id           | int(11)      | NO   | PRI | NULL    |       |   自增ID
| name               | varchar(50)  | YES  |     | NULL    |       |  代理商名字
| mobile             | int(11)      | YES  |     | NULL    |       |  代理商手机号
| identity           | varchar(255) | YES  |     | NULL    |       |  身份证号
| closing_date       | int(11)      | YES  |     | NULL    |       |  合同终止时间
| bank_account       | varchar(50)  | YES  |     | NULL    |       |  银行类型
| username           | varchar(255) | YES  |     | NULL    |       |  帐号
| proportions        | varchar(255) | YES  |     | NULL    |       |  比例
| desc               | text         | YES  |     | NULL    |       |  描述
| identity_positive  | varchar(255) | YES  |     | NULL    |       |  身份证正面
| identity_reverse   | varchar(255) | YES  |     | NULL    |       |  身份证反面
| development_person | int(11)      | YES  |     | NULL    |       |  发展人数
```