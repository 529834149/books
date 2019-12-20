
# 应用平台广场

- URL：sr.blogchina.com/api/platform;     

- HTTP请求方式：get

- 是否登陆：否/是

- 请求参数：

```
{
    'deviceid':xxx,     // 必须参数 设备号
    'pcid':xxx			//平台分类id
    'token':'xxx',  //非必须参数 主要用于判定该用户登录还是未登录的应用平台
}
```

 

- 返回结果：

```
{
    
    'meta': {
        'code': 200/400/401/500,    //结果码，必需
        'message': 'ok/参数错误/token失效/服务器错误'
    }
    'data':{
    	'items':[
	    	{
		      "_id" => "594b9151c86e9b79a8000938"
		      "pid" => 236	//平台id
		      "image" => "http://avatar.blogchina.com/v5_avatar/5799660a945181469670922.jpg!m160"//平台log
		      "name" => "xxx" //平台名
		      "update_time" => xxx 
		      "is_follow" => "n" //是否关注
		      "add_people" => 0 //添加人数
		    },{
		      "_id" => "594b9151c86e9b79a8000938"
		      "pid" => 236
		      "image" => "http://avatar.blogchina.com/v5_avatar/5799660a945181469670922.jpg!m160"
		      "name" => "xxx"
		      "update_time" => xxx
		      "is_follow" => "n"
		      "add_people" => 0
		    },{
		      "_id" => "594b9151c86e9b79a8000938"
		      "pid" => 236
		      "image" => "http://avatar.blogchina.com/v5_avatar/5799660a945181469670922.jpg!m160"
		      "name" => "xxx"
		      "update_time" => xxx
		      "is_follow" => "n"
		      "add_people" => 0
		    },...
	    ]
    }
    

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
