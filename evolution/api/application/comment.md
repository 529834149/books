# 名片的评论列表

- URL：evapi.blogcore.cn/api/comment/lists

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

```
{
    "uid" : 1323424,    //必传参数，名片用户的id  
    "last_time": 3414343413    //上拉加载时需要的参数
}
```

- 返回结果：

```
{
    "meta": {
        "code": 200,
        "message": "OK"
    }
    "data":{
        {
	        "aid" : xxx,文章id
		    "did" : 364,//评论id  
		    "article":{
		    	"title" : "互联网最新创业资讯_36氪"
		        "url" : "http://36kr.com/p/5096631.html"
		        "lead_image_url" : "http://images.blogchina.com/artpic_upload_v5/59bf795640da2.jpg!m1024"  //文章图片
		    } 
		    "discuss" :{
		      "fids" : 0
		      "body" : "2对488303617评论进行了再次回复"
		    }
		    "add_time" : 1507779008 
        },
        {
	        "aid" : xxx,文章id
		    "did" : 364,//评论id  
	        "article":{
		    	"title" : "互联网最新创业资讯_36氪"
		        "url" : "http://36kr.com/p/5096631.html"
		        "lead_image_url" : "http://images.blogchina.com/artpic_upload_v5/59bf795640da2.jpg!m1024"  //文章图片
		    } 
		    "discuss" :{
		      "fids" : 0
		      "body" : "2对488303617评论进行了再次回复"
		    }
		    "add_time" : 1507779008 
        }
        ...
    }
}
```