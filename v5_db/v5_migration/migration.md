bc_usercenter
rbac_persimissions  
rbac_role 
rbac_role_per 
rbac_role_user

user_base
user_base_detail
user_base_reward  



特别说明：
1.导入数据 各id先不变，
2.新注册用户uid 的 auto_id 调整为6000万以上
3.新注册用户nid(notebook_id) 的auto_id 调整为200万以上
4.新注册用户发文aid 的auto_id 调整为310万以上

# 数据迁移--用户：bc_usercenter 

    把bc_usercenter 中的 user_base和user_base_detail 迁移到v5_uc库中的  users 和 users_bind中，同时生成默认栏目


2. php artisan  v5:users:migrate  //开始导入数据（users 和users_bind） 约10分钟

3. 详细过程查看 v5_migrate/app/Console/Commands/MigrateUsers.php

注意：此过程中生成了默认栏目，默认栏目的id从100万到 100万+用户总数（只针对导入的数据）



注意：
1.n_blog_point 中的数据已分散到articles 中
2.n_blog_tag和nblog_tag_blog 中的数据已分散到 articles 中
3.n_blog_leaveword 暂时不处理
4.n_blog_wordfc暂时不处理

# 数据迁移--文章： 

    nblog0 和nblog1 和 bc_nblog_content 

    把文章标题、内容、标签、支持/反对人 等信息一起迁移，栏目默认id也做了处理 

1. 用户库导入完成后才可以开始导文章

2. php artisan  v5:articles:migrate  //开始导入数据  约10分钟

3. 详细过程查看 v5_migrate/app/Console/Commands/MigrateArticles.php


# 数据迁移--栏目： 

nblogcomm 中n_blog_class 到 notebooks 

1.php artisan v5:notebooks:migrate

2.详细过程查看 v5_migrate/app/Console/Commands/MigrateNotebooks.php


# 数据迁移--登录日志 ： 

bc_usercenter user_login_logs 到 users_log 

1.php artisan v5:logs:migrate

2.详细过程查看 v5_migrate/app/Console/Commands/MigrateLogs.php


# 数据迁移--脚印 ：

nblogcomm nblog_footprint到 footprints 

1.php artisan v5:footprints:migrate

2.详细过程查看 v5_migrate/app/Console/Commands/MigrateFootprints.php
