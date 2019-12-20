# 个人首页脚印列表

- URL：/footprint

- HTTP请求方式：GET

- 是否登陆：否
-参数 是否必传 y
```
{
    "user_id":222,    // y
	"which":'home', // y
	"limit":10,
	"page":1,
}
```

 

- 返回结果：

```
{
     "meta":{
            "code": 200,
            "message":"OK"
        },
     "data":[
        {
	      "_id": "58a661fd44ed9ad017000029",
	      "fid": 471595024,//脚印编译后的id
	      "auto_fid": 22706,//脚印自增id
	      "user_id": 59200265,//用户id
	      "which": "home/article",//来自哪里
	      "loginstate": "y/n",//访问者是否登录
	      "referer": "http://tangtangtang.blogcore.cn/",//访问的地址
	      "uuid": 2147483647,//帆布指纹 访问时的唯一标识uuid
	      "ip": "127.0.0.1",//ip
	      "data": {
	        "to_user_id": 0 //访问者的user_id 0为未登录的用户
	      },
	      "add_time": 1487299069,//访问时间
	      "state": "a",//该脚印的状态
	      "monitor": {	//监管操作
	        "is_hidden": "n",
	        "is_del": "n"
	      },
	      "updated_at": "2017-02-17 10:37:49",
	      "created_at": "2017-02-17 10:37:49"
	    },
	    {
	      "_id": "58622f3ab79cfec81a00002a",
	      "fid": 882821656,//脚印编译后的id
	      "auto_fid": 10509,//脚印自增id
	      "user_id": 59200265,//用户id
	      ""which": "home/article",//来自哪里
	      "loginstate": "y/n",//访问者是否登录
	      "referer": "http://tangtangtang.blogcore.cn/",//访问的地址
	      "uuid": 438131537,//帆布指纹 访问时的唯一标识uuid
	      "ip": "127.0.0.1",
	      "data": {
	        "to_user_id": 48962//访问者的user_id 0为未登录的用户
	      },
	      "add_time": 1482829626,//访问时间
	      "state": "a",//该脚印的状态
	      "monitor": {	//监管操作
	        "is_hidden": "n",
	        "is_del": "n"
	      },
	      "updated_at": "2016-12-27 17:07:06",
	      "created_at": "2016-12-27 17:07:06",
	      "to_user_info": { //访问者的用户信息
	        "uid": 48962,
	        "accout": "entere",
	        "email": "qiyin_xiaoqiang@163.com",
	        "name": "entere",
	        "nickname": "entere",
	        "avatar": "http://avatar.blogchina.com/v5_avatar/57887cb290a3c1468562610.jpg",
	        "avatar_by_editor": "http://bokeepic3.b0.upaiyun.com/admin/paltform/2d10eee2-079b-671a-aaa0-239e96f1fcbf.png",
	        "add_time": 1261324800,
	        "reg_from": "blogchina",
	        "intro": "It男.",
	        "homepage": "http://entere.blogchina.com",
	        "rank": "php工程师",
	        "blog_name": "奀T",
	        "group_id": 200,
	        "avatar_color": "e58951"
	      },
	      "user_avatar": "http://images.blogchina.com//http://avatar.blogchina.com/v5_avatar/57887cb290a3c1468562610.jpg"
	    }...
     ],
     } 
 }

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)