# readability 

### 描述
用于展示我的推荐列表页

### 数据结构

```json
{
    "message_id":'xxxxxxxx', //微信传入的message_id
    "message_backups_id":'xxxxx',//备注message_id 主要针对公众号抓取
    "msg_type":'x', //微信传入的类型1为文本...
    'avatar':'xxx',//微信头像 暂无
    'msg_from':'xxx',//来自谁的消息
    'nickname':'xxx',//发消息者
    'receiver_name':'xxx',//'接收者'
    'notebook_id':0,//分类id 暂无
    'wx_add_time': 1490348477,//微信消息发布记录时间
    "add_time" : 1490348477,//入库时间
    "update_time" : 1490348477,//更新时间
    "sort_time" : 1490348477,//排序时间
    "from" : "",//来自什么平台 
    "is_havesource":'y/n',//判定是否具有来源名 现只有公众号才有来源
    "articlesource":'xxx',//来源名字
    "channel_id" : [],//属于什么频道 暂无
    "visiable" : "public",//是否发布
    "is_recyle" : "n",//是否在回收站
    "is_del" : "n",//是否删除
    "is_recommend" : "n",//是否允许评论
    "monitor" : {//监管操作
        "is" : "n",
        "allow_edit" : "n"
    },
    "msg_url" : "http://mp.weixin.qq.com/s/JFkr1cCgbAnZNBuAgjFa2Q",//抓取文章的URL
    "title" : "xxxxx",//标题
    "summary" : "xxxxx",//摘要
    "is_headfigure":'y/n',//公众号发布的文章是否是头图
    "is_suregrab":'y/n',//是否可以抓取
    "c_id" : 874179072,//文章id
    "is_existence" : "n",//用户列表是否存在该条数据
    "is_repeat" : "n",//首页上是否存在该条数据    
    "lead_image_url":'xxxxx',//文章中的图片
}

```

### 索引信息

```json

```




 
 