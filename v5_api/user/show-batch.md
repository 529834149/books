# 批量获取用户信息
根据uids获取用户信息


- URL：/user/batch

- HTTP请求方式：GET

- 是否登陆：否

- 请求参数：是否必传 y

```
{
   "uids":"505072640,521849856" y
   
}
```

- 返回结果：/user/batch?uids=505072640,521849856

```
{
    "meta":{
        "code": 200,
        "message":"OK"
    },
    "data":{
        1310:{
		    "uid":int(1310)
		    "accout":string(3) "fxd"
		    "email":string(17) "fxd@chinalabs.com"
		    "name":string(3) "fxd"
		    "nickname":string(9) "方兴东"
		    "avatar":string(68) "http://avatar.blogchina.com/HeadPic/79715b4b3d995d350689194113978c7b"
		    "avatar_by_editor":string(72) "http://avatar.blogchina.com/HeadPic/79715b4b3d995d350689194113978c7b4645"
		    "add_time":int(1024329600)
		    "reg_from":string(9) "blogchina"
		    "intro":string(296) "方兴东，博士，中国最具影响力的互联网评论家，中国最早的网络空间智库——互联网实验室（chinalabs.com）创始人、主任。博客中国（blogchina.com）创始人、总编辑，被誉为“博客教父”。汕头大学长江新闻与传播学院院长。"
		    "homepage":string(0) ""
		    "rank":string(21) "博客中国创始人"
		    "blog_name":string(15) "方兴东观察"
		    "group_id":int(200)
		    "avatar_color":string(6) "e58951"
		  }
		  48962:{
		    "uid":int(48962)
		    "accout":string(6) "entere"
		    "email":string(23) "qiyin_xiaoqiang@163.com"
		    "name":string(6) "entere"
		    "nickname":string(6) "entere"
		    "avatar":string(65) "http://avatar.blogchina.com/v5_avatar/57887cb290a3c1468562610.jpg"
		    "avatar_by_editor":string(87) "http://bokeepic3.b0.upaiyun.com/admin/paltform/2d10eee2-079b-671a-aaa0-239e96f1fcbf.png"
		    "add_time":int(1261324800)
		    "reg_from":string(9) "blogchina"
		    "intro":string(6) "It男."
		    "homepage":string(27) "http://entere.blogchina.com"
		    "rank":string(12) "php工程师"
		    "blog_name":string(4) "奀T"
		    "group_id":int(200)
		    "avatar_color":string(6) "e58951"
		  }
    }
      
}
```


- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)