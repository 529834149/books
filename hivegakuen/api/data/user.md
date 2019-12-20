# 用户表信息
user
### 数据结构

```json

{
    "_id" : ObjectId("59f31110ce7d2133d95e7c20"),//MongoDB自带_id
    "uid" : 605809160, //用户id
    "nickname":xxx,//昵称 没有为空
    "avatar":xxx,//用户头像 没有为空
    "mobile":xxx,//手机号码 没有为空
    "is_valid_mobile":'y/n',//是否绑定手机号码 
    "password":xxxx,//密码
    "reg_from":xxx,//来源于什么平台 hive/本站 weibo/微博 weixinweb/微信
    "intro":xxx,//用户简介 没有为空
    "ip":xxx.xxx.xxx.xxx,//ip
    "is_del" :"off" //on删除 off正常
    "member":{
    	"status":xxx,//未付款0/付款1/续费状态2
    	"expire":xxx,//过期时间
    	"payment":xxx,//支付方式 （qq、微信weixinweb、微博weibo） 
    },
    "monitor":{ 
    	"examine":{
    		'monitor_id':xxx,//监管id
            'is':'a',//是否审核        a未审核    b审核通过    c拒绝,
            'time':xxx,//操作时间
        } 
    	"hidden":{
    		'monitor_id':xxx,//监管id
			'is':'n/y',//是否隐藏
	        'time':time(),//操作时间
		},
    	"del":{
    		'monitor_id':xxx,//监管id
			'is':'n/y',//是否删除
	        'time':time(),//操作时间
		}, 
    }, 
    "add_time":xxx,//添加时间
    "update_time":xxx, //更新时间
}

```