# notifications
通知,通知只会增加，不会减少，比如取消关注不触发任何通知


### 通知的类型


|type|说明|
|:---|:---------|
|follow_user |xxx关注了了您|
|follow_collection |xxx 关注了您的专题 《xxx》|
|support_article |xxx 喜欢了您的文章  《xxx》|
|comment_article |xxx 评论了您的文章  《xxx》|
|comment_replay | xxx 回复了您的评论 |
|collection_new_article |您的专题 《xxx》 有了一篇新投稿|
|collection_new_user |您已成为专题 《xxx》 的编辑|
|collection_invite_user |xxx 邀请您到专题 《xxx》 中投稿 |
|ogc_homepage_store | 您的文章 《xxx》 被编辑 推荐到首页 |
|reward_article | 您的文章 《xxx》 获得了新的赞赏 |
|ogc_homepage_passcomplain | 博文《xxx》，已经申诉成功，您可选择再次编辑发布 |
|ogc_homepage_rejectcomplain | 经核实，博文《xxx》涉嫌违反相关法律法规，您的申诉已被拒绝 |
|ogc_homepage_upgrade_y | 经核实，您升级为专栏作家的申请已通过，激活链接为xxx |
|ogc_homepage_upgrade_n | 经核实，您升级为专栏作家的申请因不符合申请标准，予以拒绝 |


各类型数据结构：

##### follow_user

```json

{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824,//你【接收通知】
    "type" : "follow_user",
    "data" : {
        "who":123,// who关注了uid
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}


##### follow_collection
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824,//你【接收通知】
    "type" : "follow_collection",
    "data" : {
        "who":123,//谁关注了你的专题
        "c_id":234,//你专题id
        "c_name":"xxx",//你专题名
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}


##### support_article
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824,//你【接收通知】
    "type" : "support_article",
    "data" : {
        "who":123,//xxx
        "a_id":234,//你文章id
        "a_title":"xxx",//你文章标题
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}


##### comment_article
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824,//你【接收通知】
    "type" : "comment_article",
    "data" : {
        "who":123,//谁
        "who_nick":"",//
        "who_if_anonymouts":"n",//匿名评论消息显示也是匿名
        "a_id":234,//你的文章id
        "a_title":"xxx",//你文章标题
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}

##### comment_replay
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824,//你【接收通知】
    "type" : "comment_replay",
    "data" : {
        "who":123,//谁
        "who_nick":"",//
        "who_if_anonymouts":"n",//匿名评论消息显示也是匿名
        "a_id":234,//你评论的文章id
        "a_title":"xxx",//你评论的文章标题
        "did":"xxx",
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}


##### collection_new_article
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824,//你【接收通知】
    "type" : "collection_new_article",
    "data" : {
        "c_id":123, //专题id
        "c_name":"xxx", //专题名
        
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}


##### collection_new_user
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824, //你【接收通知】
    "type" : "collection_new_user",
    "data" : {
        "c_id":123, //专题id
        "c_name":"xxx", //专题名
        
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    
}


##### collection_invite_user
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824, //你【接收通知】
    "type" : "collection_invite_user",
    "data" : {
        "who":123,//xxx
        "c_id":234, //专题id
        "c_name":"xxx", //专是名字
        
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    
}

##### ogc_homepage_store
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824, //你【接收通知】
    "type" : "ogc_homepage_store",
    "data" : {
        "who":123, //谁操作了你(uid)的文章
        "a_id":234,//你的文章id
        "a_title":"xxx",//你的文章标题
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}

##### reward_article
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824, //你【接收通知】
    "type" : "reward_article",
    "data" : {
        "who":123, //谁赞赏了你(uid)的文章
        "a_id":234,//你的文章id
        "a_title":"xxx",//你的文章标题
        "total_fee":200,//赞赏费用(分)
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}

##### ogc_homepage_passcomplain
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824, //你【接收通知】
    "type" : "ogc_homepage_passComplain",
    "data" : {
        "who":123, //谁操作了你(uid)的文章
        "a_id":234,//你的文章id
        "a_title":"xxx",//你的文章标题
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}

##### ogc_homepage_rejectcomplain
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824, //你【接收通知】
    "type" : "ogc_homepage_rejectComplain",
    "data" : {
        "who":123, //谁操作了你(uid)的文章
        "a_id":234,//你的文章id
        "a_title":"xxx",//你的文章标题
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}


##### ogc_homepage_upgrade_y
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824, //你【接收通知】
    "type" : "ogc_homepage_upgrade",
    "data" : {
        "code":XXXX, //激活需要的code
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}

##### ogc_homepage_upgrade_n
{
    "_id" : ObjectId("547fd2ed2997cfa475516662"),
    "uid" : 597346824, //你【接收通知】
    "type" : "ogc_homepage_upgrade",
    "data" : {
        
    },
    "add_time" : 1450662531,
    "ip" : "127.0.0.1",
    "unread":"y",//"y|n",y代表未读通知
    
}

```

