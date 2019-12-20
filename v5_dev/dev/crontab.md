# crontab
后台定时任务,项目在v5_spider中

### 定时任务列表

| 任务描述         |   命令   | 
| :--------   | :---------  |
|生成首页2/7/30天排行| php artisan ranks:create click 30 |  
|每日清理日期归档恢复与删除动作| php artisan v5:archive:purge | 
