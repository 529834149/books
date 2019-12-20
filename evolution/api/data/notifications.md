#notifications

通知表

### 数据结构

```json
{
	"uid" : NumberLong(1310),//原作者用户id
	"type" : "direct_comment/fabulous_comment/newreply_comment/before_comment/recomment",
	//(1.当用户推荐的文章被评论时； 
	//2.当用户的评论被点赞时； 
	//3.当用户的评论有新回复时； 
	//4.当用户之前发表过评论的文章有了新评论时；)
	//recomment 新的点评记录
	"aid" : NumberLong(3055746),//文章id
	"title" : "诗一首：你让我顺流漂去"//文章标题
	"data" : {
	    "who_uid" : NumberLong(66100),//操作用户id
	    "who_realname" : "狐狸",//操作用户备注名
	    "who_avatar":'xxx',//操作用户头像
	    "content" : "xxxxx",//操作用户发布的评论内容 
	},
	"add_time" : NumberLong(1468442356),//添加时间 
	"is_read":'n',//是否读取
	"is_del" : "n" 
}

```