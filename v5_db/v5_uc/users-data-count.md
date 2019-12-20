# users-data-count
用户表数据统计表

### 数据结构

```json

{
    "_id" : ObjectId("5677730046d81242120041a7"),
    "uid" : NumberLong(605735432),
    "name" : "fxd",
    "nickname" : "方兴东",
    "avatar" : "",
    "is_read":"n",//y已读
    "article_num": "",//文章总数
    "click_num": "",//阅读总数
    "support_num": "",//支持总数
    "comment_num": "",//评论总数
    "reward_sum": "",//打赏钱数
    "words_num": "",//总字数

    "click_num_rank": "",//阅读总数排行
    "support_num_rank": "",//支持总数排行
    "comment_num_rank": "",//评论总数排行
    "reward_sum_rank": "",//打赏钱数排行
    "words_num_rank": "",//总字数排行


    "click_top_article_title": "",//阅读总数第一的文章标题
    "click_top_article_link": "",//阅读总数第一的文章链接
    "click_top_article_num": "",//阅读总数第一的文章阅读数

    "support_top_article_title": "",//支持总数第一的文章标题
    "support_top_article_link": "",//支持总数第一的文章链接
    "support_top_article_num": "",//支持总数第一的文章支持数

    "comment_top_article_title": "",//评论总数第一的文章标题
    "comment_top_article_link": "",//评论总数第一的文章链接
    "comment_top_article_num": "",//评论总数第一的文章评论数

    "reward_top_article_title": "",//赞赏总数第一的文章标题
    "reward_top_article_link": "",//赞赏总数第一的文章链接
    "reward_top_article_num": "",//赞赏总数第一的文章钱数






    "add_time": 1465458876,//数据入库时间

    "type",//什么类型的用户数据 2016年的type=2016   
    

    
    
    
}

```
## 索引信息

```
db.users.ensureIndex({"uid":1},{"unique":true},{"background":true}); 
 


```
