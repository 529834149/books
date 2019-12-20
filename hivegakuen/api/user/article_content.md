# 文章内容页

- URL api/article/32956953(这里传文章ID)

- HTTP请求方式：get
 
- 是否登陆：是
 
- 请求参数：
 
 ```
 {
     "aid":xxxxxxx//必传参数
     "token":xxxxxxx//必传
 }
 ```
 
 - 返回结果：
 
 ```
 
 {
 	"meta": {
            "code": 200,400,4011,401,404 //200成功/400 参数错误/4011不是会员或者会员时间已经过期(message=0时为用户未开通会员 2时 用户需续费)/4010token不正确或过期/404没有找到大咖文章
            "message": "OK"
 	},
 	"data": {
            "_id": "5a72771d2539441a20001eed",
            "aid": 32958985,//文章ID
            "article_title": "超级月食 - 简书", //文章标题
            "article_url": "https:\/\/www.jianshu.com\/p\/b8ee55034fdc",//文章链接
            "covers_url": "http:\/\/images.blogchina.com\/hive_image\/5a7429a3a2c411517562275.jpg!s150",//头图
            "introduction_first": "速度速度速度上",//第一段文章
            "introduction_second": "得瑟得瑟闪电似的是",//第二段文章
            "did": 1342181376,
            "editor_url": "http:\/\/images.blogchina.com\/hive_image\/f74d545e1d3a2a776f43e9bea657a4af.png",//中间的图片编辑上传
            "add_time":xxxxxxxxx//添加時間
            "nickname": "方兴东",//大咖姓名
            "avatar": "http:\/\/images.blogchina.com\/hive_image\/efb98f96ee85526b675747b6059c891c.jpeg!m150",//大咖头像
 	    }
 }
 
 ```