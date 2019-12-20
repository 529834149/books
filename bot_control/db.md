# WeixinBot
微信机器人

### 表wx_bot_msg
微信消息抓取表 抓取第一次入库的数据

```json

{
    
    "msg_id":"xxxxxxx",//消息id
    "msg_type":"xxxxxx",//消息类型
    "msg_from":"",//消息来源那个群（群名），人（人名），公号（公号名称）
    "msg_content":{
        
        "title":"",
        "url":"",
        "description":"",
        "app_name":"",
        "pic_url":"",


        
    },
    "create_time":"xxxxxx",//发微信时间
    
    //谁发的消息
    "msg_sender":{
        "sender_name_str":"@196f0299e2776e7dbaa136c7c1dd4073c1abe24422402910b04fe388b4a5ca0a",
        "sender_name":"张三",
        "avatar":"",
    },

    //发给谁的
    "msg_receiver":{
        "receiver_name_str":"@d081a781b81d0391f7d23a1851ecb00b",
        "receiver_name":"拉灯",
        "avatar":"",
    },
    
    //微信原样返回的msg
    "wx_return_msg": {
        
        {
            'raw_msg': {
                'MediaId': '', 
                'MsgType': 1, 
                'SubMsgType': 0, 
                'Url': '', 
                'ToUserName': '@d081a781b81d0391f7d23a1851ecb00b', 
                'ImgHeight': 0, 
                'FromUserName': '@@39d2ee9afeb39c37f9a983367be43d8ea6c4c05e4cd663d472247988ca2c923c', 
                'ForwardFlag': 0, 
                'FileName': '', 
                'StatusNotifyUserName': '', 
                'FileSize': '', 
                'OriContent': '', 
                'ImgStatus': 1, 
                'CreateTime': 1488937815, 
                'Ticket': '', 
                'HasProductId': 0, 
                'NewMsgId': 5792720400535966734, 
                'AppMsgType': 0, 
                'PlayLength': 0, 
                'MsgId': '5792720400535966734', 
                'Content': '@de43fe92ba26f75fa4ca2538715ab3558944b3487dbb777f5b4eebbf9e4d94d0:<br/>\u200c大家好，我们最近在全国各地举办两天《股权激励整体解决方案班》人数不超50人的小型精品班的学习，白天授课，晚上免费一对一咨询，系统讲股权激励、公司控制权、股权布局、股权分配、股改、合伙创业股权分配、股东进入、退出机制、股东结构优化、公司估值，并购等内容，全是干货和案例· 详情连接http://a.eqxiu.com/s/AerIbKXs线上在线视频学习，随时随地观看，全干货方法，仅需199元，一次交费，终身线上学习，每周更新[强][强][强]注册会员观看链接http://q.eqxiu.com/s/K4eod47m详情咨询电话/微信 15994761084丘老师 感谢平台 感谢群主', 
                'Status': 3, 
                'ImgWidth': 0, 
                'RecommendInfo': {
                    'Ticket': '', 
                    'Signature': '', 
                    'VerifyFlag': 0, 
                    'Sex': 0, 
                    'NickName': '', 
                    'Scene': 0, 
                    'City': '', 
                    'Alias': '', 
                    'Content': '', 
                    'UserName': '', 
                    'AttrStatus': 0, 
                    'OpCode': 0, 
                    'Province': '', 
                    'QQNum': 0
                }, 
                'StatusNotifyCode': 0, 
                'AppInfo': {
                    'AppID': '', 
                    'Type': 0
                }, 
                'VoiceLength': 0
            }
        }
    }, 

    
}

```

### 表wx_bot_contact
微信联系人表（好友） 

```
    {
        "_id" : ObjectId("58d5fa3bc3666e0a1a6dbf7a"),
        "uin" : "0",
        "username" : "@d4dd3ab1792036ed17cb6eda3fb6acd4516db6a534e1b6ac513f4d72e8565a8a",
        "nickname" : "小B",
        "headimgurl" : "http://bot.blogchina.com/tools/WeixinBot/img/xiaoB.jpg",
        "contactflag" : "1",
        "membercount" : "0",
        "memberlist" : "[]",
        "remarkname" : "小B",
        "hideinputbarflag" : "0",
        "sex" : "2",
        "signature" : "",
        "verifyflag" : "0",
        "owneruin" : "0",
        "pyinitial" : "XB",
        "pyquanpin" : "xiaoB",
        "remarkpyinitial" : "XB",
        "remarkpyquanpin" : "xiaoB",
        "starfriend" : "0",
        "appaccountflag" : "0",
        "statues" : "0",
        "attrstatus" : "4133",
        "province" : "",
        "city" : "",
        "alias" : "",
        "snsflag" : "0",
        "unifriend" : "0",
        "displayname" : "",
        "chatroomid" : "0",
        "keyword" : "",
        "encrychatroomid" : "",
        "isowner" : "0"
    }

```


### 表 wx_readability_msg 
抓取URL入库
```json
"msg_id":xxx	//消息id
"msg_type":xx	//消息对应的类型
"msg_url":xxxxxxxxx	//消息来源的url
"article_id":xxx	//抓取后分配的文章id
"msg_from":xxx	//消息来源那个群（群名），人（人名），公号（公号名称）		
"notebook_id":xxx	//消息分类
"title":xxxx	//标题
"summary":xxx	//摘要
"body":	xxxxx//内容
"wx_add_timne":xxxxx	//微信发布时间
"add_time":xxxxx	//添加时间 
"update_time":xxx	//更新时间
"from":xxx	//来源于什么平台
"word_count":xxx	//内容总字数
"pics"｛ 
	exists:'y/n'	//图片是否存在
	url:xxx	//存在对应的URL
｝	
"voice":{
	exists:'n'	//音频是否存在
	url:xxx	//存在对应的URL
}
"videos"{
	exists:'y/n'	//视频是否存在
	url:xxx	//存在对应的URL
}
"channel_id":xxx	//对应的频道
"tag":xxx	//标签
"visiable":xxx	//public:公开的 private:私有的 protected:仅fans可见
"is_recyle":'y/n'	//y 在回收站，n正常
"is_del":'y/n'	//y,彻底删除（等于物理删除），n正常  
"is_recommend":'y/n'	//y,被编辑推到首页
"top":{	
	is:"'y/n'",//y置顶
     time:1435432234 //置顶时间，置顶顺序

}
"allow":{
	comment:'y/n'	//是否允许评论
	reward:'y/n'	//是否允许赞赏 
}

"monitor":{ 
	"hidden":{
		"is":"y/n",//n未被监管隐藏
        "allow_edit":"y/n",//是否允许编辑
	}
	"del":{
		 "is":"y/n",//n未被监管删除
         "allow_edit":"y/n",//默认n不允许编辑&&永远不允许编辑
	} 
}


```
### 表bots
机器人列表

```
{
    "_id" : ObjectId("58d5fa35c3666e0a1a6dbf73"),
    "id" : 1,
    "bot_name" : "1号机器人",
    "create_time" : 1490418229,
    "start_time" : 1490443737,
    "stop_time" : 1490443911,
    "start_file" : "weixin.py",
    "status" : 0,
    "is_del" : "n"
}
```







### 说明

####关于MsgType

|MsgType |说明|
| :--------   | :---------  |
|1   |文本消息|
|3   |图片消息|
|34  |语音消息|
|37  |VERIFYMSG|
|40  |POSSIBLEFRIEND_MSG|
|42  |共享名片|
|43  |视频通话消息|
|47  |动画表情|
|48  |位置消息|
|49  |分享链接|
|50  |VOIPMSG|
|51  |微信初始化消息|
|52  |VOIPNOTIFY||
|53  |VOIPINVITE|
|62  |小视频|
|9999   | SYSNOTICE|
|10000   |系统消息|
|10002   |撤回消息|





