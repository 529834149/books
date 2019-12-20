# article
文章

### 数据结构

```json

{
    "_id" : ObjectId("59bf9b35c86e9b067c0020f4"),
    "uid" : 11111,//用户id
    "message_id" : "7784329232668883406",//微信消息id
    "msg_type" : "1",//类型 1为文字发送获取的信息  49为分享连接获取的信息
    "msg_from" : "<span class=\"emoji emoji1f335\"></span><span class=\"emoji emoji1f335\"></span><span class=\"emoji emoji1f335\"></span>迷茫",//发送者 备注名
    "memoname" : "<span class=\"emoji emoji1f335\"></span><span class=\"emoji emoji1f335\"></span><span class=\"emoji emoji1f335\"></span>迷茫",//发送者 备注名
    "receiver_name" : "唐启胤",//接收者
    "wx_add_time" : "1505725882553",//微信发送时间
    "add_time" : 1505729331980,
    "update_time" : 1505729331980,
    "sort_time" : 1505729331980, 
    "visiable" : "public",//public:公开的 private:仅fans可见 protected:私有的
    "is_publish":'n',//是否发布
    "is_recyle" : "n",//y 在回收站，n正常
    "is_del" : "n",//y,彻底删除（等于物理删除），n正常   
    "monitor" : {	//监管动作
    	"recommend":{
    		is:'n',//是否推荐
    		time:111111111
    	},
    	"examine":{
    		is:'a',//是否审核 	a未审核 b已审核 c 审核拒绝
    		time:111111111
    	},
        "hidden" : {
            "is" : "n",//是否隐藏
            "allow_edit" : "n",
            time:111111111
        },
        "del" : {
            "is" : "n",//是否删除
            "allow_edit" : "n",
            time:111111111
        }
    }, 
    "aid" : 597412360,//文章id 
    "title" : "超级网络平台治理迎来危险时刻-方兴东的专栏\n",//抓取的标题
    "article_url" : "http://fxd.blogchina.com/523990059.html",//文章来源的地址 
    "lead_image_url" : "http://images.blogchina.com/wx_bot/59bf9b8ab82251505729418.jpg",//头图
    "updated_at" : ISODate("2017-09-18T10:08:53.000Z"),
    "created_at" : ISODate("2017-09-18T10:08:53.000Z")
}

```