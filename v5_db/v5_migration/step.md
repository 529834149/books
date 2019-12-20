#数据导入流程

### 第零阶段
    设置redis用户自增加id从0开始  set v5:auto:uid 0
    设置redis文章自增加id从0开始  set v5:auto:aid 0
    设置redis栏目自增加id从0开始  set v5:auto:nid 0

###第一阶段(上线前几天)

    1.导入全部用户 

    命令：php artisan v5:users:migrate

    说明：这个过程产生三个表：users,users_bind,notebooks


    2.把id <=3042500 的文章导入，

    命令：
    php artisan v5:articles:migrate nblog0 first 
    php artisan v5:articles:migrate nblog1 first

    说明：由于文章导入需要默认栏目，而默认栏目是在导用户时生成的，故导入文章前先把执行1要用户导入；


    3.把评论数据导入 dateline <=1462936271 (2016-05-11 11:11:11) 的评论数据全部导入

    命令：php artisan v5:discusses:migrate first
    说明：多说评论不用考虑，他已经在comment表中了





###第二阶段(上线关停数据库)

    1. 导入全部用户数据（把之前导入的用户数据全部分删除，重新导入） 

    命令：php artisan v5:users:migrate

    说明：这个过程产生三个表：users,users_bind,notebooks


    2.把id >3042500 的文章导入，

    命令：
    php artisan v5:articles:migrate nblog0 last 
    php artisan v5:articles:migrate nblog1 last

    说明：由于文章导入需要默认栏目，而默认栏目是在导用户时生成的，故导入文章前先把执行1要用户导入；


    3.把评论数据导入 dateline > 1462936271 (2016-05-11 11:11:11) 的评论数据全部导入

    命令：php artisan v5:discusses:migrate last

    说明：多说评论不用考虑，他已经在comment表中了


    4. 导入全部栏目数据 php artisan v5:notebooks:migrate

    5. 导入脚印数据 php artisan v5:footprints:migrate

    6. 导入日志数据 php artisan v5:logs:migrate

    7. 导入频道数据 php artisan v5:channels:migrate

    8.导入number 数  php artisan v5:numbers:migrate

    9.导入栏目下的的文章 number 数 php artisan v5:notebooks:num:migrate

    10. 设置自增加id
    设置redis用户自增加id set v5:auto:uid 60 000 000
    设置redis文章自增加id set v5:auto:aid 3 100 000
    设置redis栏目自增加id set v5:auto:nid 2 000 000



###建立索引

    1.v5_log

    db.users_log.ensureIndex({"uid":1,"type":1,"add_time":-1},{"background":true});

    2.v5_discuss

    db.discusses.ensureIndex({"article.aid":1,"discuss.add_time":-1},{"background":true});
    db.discusses.ensureIndex({"discuss.did":1},{"background":true});
    db.discusses.ensureIndex({"discuss.add_time":-1},{"background":true});

    3.v5_uc

    db.actives_data.ensureIndex({"code":1},{"background":true});
    db.users.ensureIndex({"uid":1},{"unique":true},{"background":true}); 
    db.users.ensureIndex({"accout":1},{"background":true}); 
    db.users.ensureIndex({"email":1},{"background":true}); 
    db.users.ensureIndex({"mobile":1},{"background":true}); 
    db.users.ensureIndex({"name":1},{"background":true});
    db.users_bind.ensureIndex({"u_id":1},{"background":true});
    db.users_follow.ensureIndex({"fans_uid":1,"add_time":-1},{"background":true}); 
    db.users_follow.ensureIndex({"friend_uid":1,"add_time":-1},{"background":true});
    db.columns_apply.ensureIndex({"code":1},{"background":true}); 
    db.columns_apply.ensureIndex({"mobile":1},{"background":true});
    db.articles.ensureIndex({"aid":1},{unique:true},{"background":true}); 
    db.articles.ensureIndex({"user_id":1,"add_time":-1},{"background":true});
    db.articles.ensureIndex({"notebook_id":1,"add_time":-1},{"background":true});
    db.articles.ensureIndex({"channel_id":1,"add_time":-1},{"background":true});
    db.articles.ensureIndex({"tag":1,"add_time":-1},{"background":true});
    db.articles.ensureIndex({"add_time":-1},{"background":true});
    db.collections.ensureIndex({"user_id":1,"add_time":-1},{"background":true});
    db.collections_article.ensureIndex({"c_id":1},{"background":true});
    db.collections_follower.ensureIndex({"c_id":1},{"background":true});
    db.collections_manager.ensureIndex({"c_id":1},{"background":true});
    db.notebooks.ensureIndex({"user_id":1,"add_time":-1},{"background":true}); 
    db.notebooks.ensureIndex({"nid":1},{"background":true});
    db.footprints.ensureIndex({"user_id":1,"add_time":-1},{"background":true}); 
    db.footprints.ensureIndex({"data.tu_user_id":1,"add_time":-1},{"background":true});
    db.archives.ensureIndex({"user_id":1},{"background":true});
    db.notifications.ensureIndex({"uid":1},{"background":true});
    db.timelines.ensureIndex({"uid":1,"add_time":-1},{"background":true});
    db.rewards_apply.ensureIndex({"add_time":1},{"background":true}); 
    db.rewards_apply.ensureIndex({"uid":1},{"background":true}); 

