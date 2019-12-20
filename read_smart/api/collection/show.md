# 收藏详情

- URL：sr.blogchina.com/api/collection/59200265   //59200265为用户id（必须）

- HTTP请求方式：GET


- 是否登陆：是

- 请求参数：

```
{	
    'token':xxx,      //用于判断用户登录状态(必须)
}

```

 

- 返回结果：

```
{
    
    'meta': {
        'code': 200,    //结果码，必需
        'message': 'OK'
    },
    'data':{
         items:[
                {
            		'uid':59200265,                    //用户id
                    'aid':xxx                          //文章id
                    'category':'公司',                 //文章分类
                    'p_image':'xxx',                   //平台图标
                    'p_name':'果壳精选',               //品台名称
                    'webauthor':'梁梦麟',              //原作者
                    'title':'博客中国',                //文章标题
                    'summary':'每天五分钟，给思想加油',//文章摘要
                    'covers':{
                        'url':'xxx'                    //文章头图
                    }
                    'pretty_time': '刚刚'              //文章添加时间
                    'collection_num':10,               //收藏数量
                    'share_num':13,                    //分享数量
                },{
                    'uid':59200265,             
                    'aid':xxx                      
                    'category':'公司',               
                    'p_image':'xxx',                
                    'p_name':'果壳精选',             
                    'webauthor':'梁梦麟',             
                    'title':'博客中国',             
                    'summary':'每天五分钟，给思想加油',
                    'covers':{
                        'url':'xxx'                  
                    }
                    'pretty_time': '刚刚',
                    'collection_num':10,      
                    'share_num':13,  
                },
                ......       
          ]
        
     } 
	
}

```


- 关于错误返回值与错误代码，参见 [错误代码说明](../README.md)
