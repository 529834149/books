# 大咖表信息
dern
### 数据结构

```json

{
    "_id" : ObjectId("59f31110ce7d2133d95e7c20"),//MongoDB自带_id
    "did" : 605809160, //大咖Id
    "nickname":xxx,//大咖昵称
    "avatar":xxx,//大咖头像
    "introduction":xxx,//大咖简介
    "add_time":time(),//添加时间
    "update_time":time(),//修改时间
    "monitor":{
    	
    	"examine":{
            'is':'a',//是否审核        a未审核    b审核通过    c拒绝,
            'time':xxx,//操作时间
            "monitor_id":xxx,//监管id
        } 
    	"hidden":{
            'is':'n/y',//是否隐藏
            'time':time(),//操作时间
            "monitor_id":xxx,//监管id
        },
    	"del":{
            'is':'n/y',//是否删除
            'time':time(),//操作时间
            "monitor_id":xxx,//监管id
        }, 
    },
    "update_time":xxx, //更新时间
    "sort_time":xxx, //排序时间
    "position":"含品经理"//职位
    
}

```