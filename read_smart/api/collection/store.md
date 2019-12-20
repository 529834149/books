# 添加收藏/取消收藏

- URL：sr.blogchina.com/api/collection

- HTTP请求方式：POST


- 是否登陆：是

- 请求参数：

```
{	
    'token':xxx,      //用于判断用户登录状态(必须)
    'aid': 882559488  //文章ID(必须)
    'status':'normal/cancel'    //in:normal(收藏),cancel(取消收藏)
}

```

 

- 返回结果：

```
{
    
    'meta': {
        'code': 200/400/401/500,    //结果码，必需/参数错误/没有权限/服务器错误
        'message': 'OK'
    },
    'data': {
		'collection_nums':525,	//收藏数量
	}
	
}

```


- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
