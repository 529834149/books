# 推荐列表

- URL：evapi.blogcore.cn/api/recomment/lists

- HTTP请求方式：GET

- 是否登陆：是

- 请求参数：

``` 
{ 
    "uid": 14437,    //当前登录用户id 
    "card_userid": 344641,  //必传参数，名片对应的用户id 
    "last_time": 1346313476    //上拉加载时使用，
}
```

- 返回结果：

```
{
    "meta":{
        "code":200,
        "message":'OK'
    },
    "data":[
    {
	    "uid":111 //用户id
	    "aid": 346314   //推荐文章id
	    "title" : "从各大手机品牌后半年表现，看未来手机行业的竞争格局",   //文章标题
	    "article_url":'xxx' //外链
	    "is_publish":"n",//是否发布
	    "remark":{
	    	'rid':xxx,//点评id
	    	"body":'xxx'//点评内容
	    },
            "add_time": 1507858114204,
	    "lead_image_url" : "http://images.blogchina.com/artpic_upload_v5/59bf795640da2.jpg!m1024"  //文章图片
    },
    {
	    "uid":111 //用户id
	    "aid": 346314   //推荐文章id
	    "title" : "从各大手机品牌后半年表现，看未来手机行业的竞争格局",   //文章标题
	    "article_url":'xxx' //外链
	    "is_publish":"n",//是否发布
	    "remark":{
	    	'rid':xxx,//点评id
	    	"body":'xxx'//点评内容
	    },
            "add_time": 1507858114204,
	    "lead_image_url" : "http://images.blogchina.com/artpic_upload_v5/59bf795640da2.jpg!m1024"  //文章图片
    },...
    ]
}
```