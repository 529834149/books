# 群组表
group_data
### 数据结构

```mysql
+-------------------+--------------+------+-----+---------+----------------+
| Field             | Type         | Null | Key | Default | Extra          |
+-------------------+--------------+------+-----+---------+----------------+
| group_id          | int(11)      | NO   | PRI | NULL    | auto_increment |
| group_name        | varchar(255) | YES  |     | NULL    |                |
| city_id           | int(255)     | YES  |     | NULL    |                |
| agent_id          | int(11)      | YES  |     | NULL    |                |
| group_admin       | varchar(255) | YES  |     | NULL    |                |
| number            | int(11)      | YES  |     | 0       |                |
| group_introduce   | text         | YES  |     | NULL    |                |
| group_add_time    | int(10)      | YES  |     | NULL    |                |
| group_update_time | int(10)      | YES  |     | NULL    |                |
| is_del            | char(1)      | YES  |     | n       |                |
| group_logo        | varchar(255) | YES  |     |         |                |
| province_id       | int(10)      | YES  |     | NULL    |                |
+-------------------+--------------+------+-----+---------+----------------+
group_id:群组ID
city_id:城市ID
group_name:群组名称
agent_id:代理商ID
group_admin:群管理员
number:人数
group_introduce:群介绍
group_add_time:添加时间
group_update_time:修改时间
is_del:是否删除
group_logo:群二维码
province_id:对应的市ID，area表里parent_id


```