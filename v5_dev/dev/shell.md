# 后台运行的脚本


### 1.邮件和用户日志队列，每天晚上1.01分重启 （v5_api）

```
php artisan queue:work --queue=v5:emails  --daemon --sleep=3 --tries=3 > /tmp/log/emails_error.log &
php artisan queue:work --queue=v5:default --daemon --sleep=3 --tries=3 /tmp/log/default_error.log &
```


### 2.30\7\2 天排行，每天晚上0.01分执行 (v5_spider)

```
php artisan v5:ranks:create click 30
php artisan v5:ranks:create click 7
php artisan v5:ranks:create click 2
php artisan v5:ranks:create support 30
php artisan v5:ranks:create support 7
php artisan v5:ranks:create support 2
php artisan v5:ranks:create comment 30
php artisan v5:ranks:create comment 7
php artisan v5:ranks:create comment 2

```

### 3.修复用户的文章总数，分类、日期归档下的文章数 （v5_spider）

```
php artisan v5:repire:user-numbers entere
```


