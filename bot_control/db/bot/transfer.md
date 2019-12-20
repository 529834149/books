# transfer

### 描述

微信消息抓取表 抓取第一次入库的数据

### 数据结构

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
    "create_time":xxxxxx,//发微信时间
    "add_time":xxxxxx,//插入数据库的毫秒数
    
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
    }
```
### 索引信息

```json

```

