
# 添加平台

- URL：sr.blogchina.com/api/platform/add

- HTTP请求方式：POST

- 请求参数：

```
{
    'token': 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX' //token值
}
```

 

- 返回结果：

```
{
    
    'meta': {
        'code': 200,    //结果码，必需
        'message': 'ok'
    },
    'data': {
    	[
	       	'p_image':'http://images.blogchina.com//read_smart//5947cad28038c1497877202.jpg!m600', //平台图标
	       	'p_image':'少数派',			//平台名称
	       	'add_time':'刚刚',			//最新一条数据跟新时间
	       	'pid':30       			    //平台id  
       	],[
	       	'p_image':'http://images.blogchina.com//read_smart//5947cad28038c1497877203.jpg!m600',
	       	'p_image':'少数派',			
	       	'add_time':'刚刚',		
	       	'pid':30       			   
       	], 
       	......	
     }

}

```

- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
