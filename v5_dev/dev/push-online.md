#上线项目列表
|项目名|描述|注意事项|
|:----|:-----|:-----|
|v5_uc|专栏|.evn中redis和memcache的修改|
|v5_api|专栏api|.env各数据库修改| 
|v5_discuss|评论|.evn 不用修改|      
|v5_images|图片上传|.env 不用修改|  
|v5_ogc|cms系统|.env各数据库修改|  
|v5_pindao|大首页频道|域名修改 pindao.blogchina.com|
|v5_tuijian|大首页|域名修改 tuijian.blogchina.com|
|v5_mobile|大首页|域名修改 m.blogchina.com|
|v5_monitor|监管|| 
|v5_spider|crontab|.env各数据库修改|
|v5_migrate|导数据| .env各数据库修改|
|subject_pose_vote|专题投票|.env各数据库修改|


#上线流程


上线前两天  

1.清空redis

2.导入全部用户数据

3.导入id <=3042500 的文章

4.导入dateline <=1462936271的评论



停前端

1.删除导入的全部用户数据（三个表删除）

2.重新导入用户数据

3.导入id >3042500 的文章

4.导入dateline >1462936271的评论

5.导入全部栏目数据

6.导入脚印数据 

7.导入日志数据 

8.导入频道数据 

9.导入number 数 

10.导入栏目下的的文章 number数

11. 设置自增加id

> 设置redis用户自增加id set v5:auto:uid 60 000 000
> 设置redis文章自增加id set v5:auto:aid 3 100 000
> 设置redis栏目自增加id set v5:auto:nid 2 000 000

12.建立索引

13.导入cms数据

14.导入赞赏数据

14.开启内部测试

15.开启外部web服务器

16.优化laravel

> app_debug : false
> php artisan route:cache : true
> php artisan optimize : true








