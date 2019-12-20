# 配置信息
config
### 数据结构

```json
article表
{
    "_id" : ObjectId("5a6050d82539441b680033c2"),
    "article_url" : "https://www.jianshu.com/p/2e77c9564f18",
    "introduction_first" : "我回信  到\r\n\r\n宇宙之端\r\n\r\n卫星帮我发射\r\n\r\n爱你的誓言\r\n\r\n光纤替我邮寄到\r\n\r\n你的身边",//导言
    "introduction_second" : "我回信  到\r\n\r\n宇宙之端\r\n\r\n卫星帮我发射\r\n\r\n爱你的誓言\r\n\r\n光纤替我邮寄到\r\n\r\n你的身边",//导言内容
    "did" : "1344274570",
    "add_time" : "2018-01-18 00:00:00",
    "operator" : "宝金",//编辑
    "is_del" : "n",
    "is_publish" : "y",
    "publish_time" :21321312313,//发布时间
    "url_first" : "hive_image/0974340e981e65c030d51ad8c18dc59c.png",//辅助截图1
    "url_second" : "hive_image/9f0de6b433f94da7bb31223d6623c51c.png",//辅助截图2
    "aid" : 1076101250,//文章id
    "updated_at" : ISODate("2018-01-18T07:46:32.000Z"),
    "created_at" : ISODate("2018-01-18T07:46:32.000Z"),
    "monitor":{

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
    "article_title" : "[陌生人|荒陌之殇] - 简书",//文章标题
    "covers_url" : "hive_image/5a6050da511ab1516261594.jpg"//首图
    "edit_url" :"hive_image/5a6050da511ab1516261594.jpg"//编辑上传的图片
}
```