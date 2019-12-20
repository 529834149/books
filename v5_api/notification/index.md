# 获取用户提醒列表

- URL：/notification

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数(header头 Authorization:bearer token)：

```
{ 
    "token":'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx',//y
}

```

- 返回结果：

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data": {
	    {
	    "_id" : "5853a093348a704051bc2c97"
	    "uid" : 59200265 //用户id
	    "type" : "follow_user"//什么类型
	    "data" :{
	      "who" => 770583614 //谁的脚印
	      "nickname" => null //谁的笔名或昵称
	    }
	    "add_time" : 1481875603 //脚印时间
	    "unread" : "n" //是否已读
	    "explain" : "<a href="http://.blogcore.cn" target="_blank"></a>关注了您" //内容
	    "class" : "fa-check" //class类 用户通知前面所展示的图标
	    "notice_time" : "2016.12.16 16:06" //格式化了的脚印时间
	  },
	  {
	    "_id" : "5853a091348a705661bc2c93"
	    "uid" : 59200265
	    "type" : "follow_user"
	    "data" :{
	      "who" : 770583614
	      "nickname" : null
	    }
	    "add_time" : 1481875601
	    "unread" : "n"
	    "explain" : "<a href="http://.blogcore.cn" target="_blank"></a>关注了您"
	    "class" : "fa-check"
	    "notice_time" : "2016.12.16 16:06"
	  },
	  {
	    "_id" : "58538cf9348a703951bc2c96"
	    "uid" : 59200265
	    "type" : "comment_article"
	    "data" :{
	      "who" : 929967158
	      "who_nick" : "杉菜"
	      "who_if_anonymouts" : "n"
	      "a_id" : 666989083
	      "a_title" : "adsf"
	      "nickname" : null
	    }
	    "add_time" : 1481870585
	    "unread" : "n"
	    "explain" : "<a href="http://.blogcore.cn" target="_blank">杉菜</a>评论了您的文章<a href="http://tangtangtang.blogcore.cn/666989083.html#show_discuss" target="_blank">adsf</a>"
	    "class" : "fa-comment-o"
	    "notice_time" : "2016.12.16 14:43"
	  },
	  {
	    "_id" : "58538ce2348a702f56bc2c97"
	    "uid" : 59200265
	    "type" : "comment_article"
	    "data" :{
	      "who" : 929967158
	      "who_nick" : "杉菜"
	      "who_if_anonymouts" : "n"
	      "a_id" : 675378195
	      "a_title" : "广汽乘用车-传祺GA8"
	      "nickname" : null
	    }
	    "add_time" : 1481870562
	    "unread" : "n"
	    "explain" : "<a href="http://.blogcore.cn" target="_blank">杉菜</a>评论了您的文章<a href="http://tangtangtang.blogcore.cn/675378195.html#show_discuss" target="_blank">广汽乘用车-传祺GA8</a>"
	    "class" : "fa-comment-o"
	    "notice_time" : "2016.12.16 14:42"
	  }...
     } 
}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)