# 取消收藏

- URL：sr.blogchina.com/api/collection/59200265   //59200265用户id(必须)

- HTTP请求方式：DELETE

- 是否登陆：是

- 请求参数：

```
{	
	'token':xxx,      //判断用户登录状态(必须)
    'aid': 882559488, //文章ID (必须)
}
```

- 返回结果：

```
{
    'meta':{
        "code": 200,   
        "message":"OK"
    },
    'data': {
		'collection_nums':524,	//收藏数量
	}
    
    
}
```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)